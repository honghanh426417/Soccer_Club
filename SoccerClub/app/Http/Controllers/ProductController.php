<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products', compact('products'));
    }

    public function display($id)
    {
        $product_detail = Product::find($id);
        $product_reviews = $product_detail->reviews;
        $reviewsCount = $product_detail->reviews->count();
        $relatedProducts = Product::inRandomOrder()
            ->where('id', '!=', $product_detail->id) // Loại trừ sản phẩm hiện tại
            ->limit(4) // Giới hạn số lượng sản phẩm tương tự
            ->get();
        return view('product-detail', compact('product_detail', 'relatedProducts','product_reviews','reviewsCount'));

    }


        public function AddCart(Request $req, $id){
            $product = DB::table('products')->where('id', $id)->first();

            if ($product != null) {
                $oldCart = Session('Cart') ? Session('Cart') : null;
                $newCart = new Cart($oldCart);

                $cartQuantity = $newCart->products[$id]['quanty'] ?? 0;

                if (($cartQuantity + 1) <= $product->quantity) {
                    $newCart->AddCart($product, $id);
                    $req->session()->put('Cart', $newCart);
                } else {
                    return response()->json(['error' => 'Số lượng sản phẩm vượt quá số lượng còn trong kho.']);
                }
            }
            return view('shoppingcart', compact('newCart'));
        }

    public function DeleteItemCart(Request $req ,$id){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->DeleteItemCart($id);
            if (Count($newCart->products)>0){
                $req->session()->put('Cart',$newCart);
            }
            else{
                $req->session()->forget('Cart');
            }
        return view('shoppingcart',compact('newCart'));
    }
    public function ViewListCart()
    {
        return view('listcart');
    }
    public function DeleteListItemCart(Request $request,$id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart->products)>0){
            $request->session()->put('Cart',$newCart);
        }
        else{
            $request->session()->forget('Cart');
        }
        return view('listcart');
    }
    public function SaveListItemCart(Request $req ,$id,$quanty){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id,$quanty);
            $req->session()->put('Cart',$newCart);

        return view('listcart');
    }
    public function delete(Request $request, $id)
    {
        $record = Product::find($id);

        if (!$record) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy sản phẩm.']);
        }
        $success = $record->delete();

        if ($success) {
            return response()->json(['success' => true, 'message' => 'Sản phẩm đã được xóa.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Không thể xóa sản phẩm.']);
        }
    }


}

