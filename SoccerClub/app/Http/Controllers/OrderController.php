<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Cart;
use App\Models\Checkouts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();

            $checkout = new Checkouts();
            // code này để lấy id của user
            $checkout->UserID = $user->id;
            $checkout->full_name = $request->input('fname');
            $checkout->email = $request->input('email');
            $checkout->address = $request->input('adr');
            $checkout->city = $request->input('city');
            $checkout->phone_number = $request->input('phone');
            $checkout->card_name = $request->input('cname');
            $checkout->card_number = $request->input('ccnum');
            $checkout->security_code = $request->input('securitycode');
            $checkout->save();

            $cart = Session::get("Cart");
            if ($cart) {
                $totalAmount = $cart->totalPrice;
                $order = new Order;
                $order->UserID = $user->id;
                $order->UserName = $user->username;
                $order->TotalAmount = $totalAmount;
                $order->save();

                foreach ($cart->products as $productId => $productInfo) {
                    $orderDetail = new OrderDetail();
                    $orderDetail->orderID = $order->id;
                    $orderDetail->productID = $productId;
                    $orderDetail->quantity = $productInfo['quanty'];
                    $orderDetail->subtotal = $productInfo['price'];

                    $product = Product::find($productId);
                    $orderDetail->productName = $product->name;
                    $product->quantity -= $productInfo['quanty'];
                    $product->save();
                    $orderDetail->save();
                }

                Session::forget('Cart');
            }

        }

        // Sau khi lưu đơn hàng, có thể thực hiện thêm xử lý hoặc chuyển hướng người dùng đến trang xác nhận đơn hàng.


        return view('checkout.success');
    }

    public function index()
    {

        return view('checkout.index');
    }


    public function updateStatus(Request $request, $id)
    {
        $orderstatus = Order::find($id);
        $value = $request->input('status');

        // Get the current status of the order
        $currentStatus = $orderstatus->status;

        if ($value == "2") {
            // If the new status is "Đang giao"
            if ($currentStatus == "Pending") {
                $orderstatus->status = "Đang giao";
            }
        } elseif ($value == "3") {
            // If the new status is "Đã giao"
            if ($currentStatus == "Đang giao") {
                $orderstatus->status = "Đã giao";
            }
        }

        $orderstatus->save();

        return redirect()->route('admin.orderdetail', ['id' => $id]);

    }

    public function edit($id)
    {
        $adminUser = Auth::guard('admin')->user();

        $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.UserID')
            ->leftJoin('checkouts', 'checkouts.UserID', '=', 'orders.UserID')
            ->select('checkouts.*', 'orders.TotalAmount as TotalAmount', 'orders.status as status')
            ->where('orders.id', '=', $id)
            ->first();

        $ODInfo = DB::table('order_details')
            ->join('orders', 'orders.id', '=', 'order_details.orderID')
            ->leftjoin('products', 'order_details.productID', '=', 'products.id')
            ->where('orders.id', '=', $id)
            ->select('orders.*', 'order_details.*', 'products.name as productName')
            ->get();

        $this->data['orders'] = $orders;
        $this->data['ODInfo'] = $ODInfo;

        return view('admin.orderdetail', ['user' => $adminUser], $this->data);

    }
    public function history()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $purchaseHistory = Order::with('orderDetails')->where('UserID', $user->id)->get();
            return view('checkout.history', [
                'user' => $user,
                'purchaseHistory' => $purchaseHistory,
            ]);
        }
        return redirect()->route('login.show');
    }

    public function store(Request $request)
    {
        $productID = $request->input('product_id');
        $productName = $request->input('product_name');
        $username = $request->input('user_name');
        $email = $request->input('user_email');
        $comment = $request->input('comment');


        $review = new ProductReview();
        $review->user_id = Auth::user()->id;
        $review->product_id = $productID;
        $review->product_name = $productName;
        $review->username = $username;
        $review->email = $email;
        $review->comment = $comment;
        $review->save();
        return response()->json(['success' => true]);
    }

}



