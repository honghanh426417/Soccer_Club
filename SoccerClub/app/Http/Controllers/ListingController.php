<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{

    public function index(Request $request, $modelName)
    {

        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\' . ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $filterResult = $model->getFilter($request, $configs, $modelName);
        $orderBy = [
            'field' => 'id',
            'sort' => 'asc'
        ];
        if ($request->input('sort')) {
            $field = substr($request->input('sort'), 0, strrpos($request->input('sort'), "_"));
            $sort = substr($request->input('sort'), strrpos($request->input('sort'), "_") + 1);
            $orderBy = [
                'field' => $field,
                'sort' => $sort
            ];
        }
        $records = $model->getRecords($filterResult['conditions'], $orderBy);
        return view('admin.listing', [
            'user' => $adminUser,
            'records' => $records,
            'configs' => $filterResult['configs'],
            'modelName' => $modelName,
            'title' => $model->title,
            'orderBy' => $orderBy,
        ]);
    }

    public function deleteplayer(Request $request, $modelName, $id)
    {
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\' . ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $filterResult = $model->getFilter($request, $configs, $modelName);
        $orderBy = [
            'field' => 'id',
            'sort' => 'asc'
        ];

        if ($request->input('sort')) {
            $field = substr($request->input('sort'), 0, strrpos($request->input('sort'), "_"));
            $sort = substr($request->input('sort'), strrpos($request->input('sort'), "_") + 1);
            $orderBy = [
                'field' => $field,
                'sort' => $sort
            ];
        }
        // Delete the record by ID
        $record1 = $model->find($id);

        if ($record1) {
            $record1->delete();
            $success = true;
        } else {
            $success = false;
        }

        $records1 = $model->getRecords($filterResult['conditions'], $orderBy);

        return view('admin.listing', [
            'user' => $adminUser,
            'records' => $records1,
            'modelName' => $modelName,
            'title' => $model->title,
            'configs' => $filterResult['configs'],
            'orderBy' => $orderBy,
            'success' => $success, // Pass the success flag for displaying a message
        ]);
    }
    public function delete(Request $request, $modelName, $id)
    {
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\' . ucfirst($modelName);
        $model = new $model;
        $configs = $model->listingConfigs();
        $filterResult = $model->getFilter($request, $configs, $modelName);
        $orderBy = [
            'field' => 'id',
            'sort' => 'asc'
        ];

        if ($request->input('sort')) {
            $field = substr($request->input('sort'), 0, strrpos($request->input('sort'), "_"));
            $sort = substr($request->input('sort'), strrpos($request->input('sort'), "_") + 1);
            $orderBy = [
                'field' => $field,
                'sort' => $sort
            ];
        }
        $record = $model->find($id);

        if (!$record) {
            return redirect()->back()->with('error', 'Không tìm thấy bản ghi.');
        }
         if ($record->orderDetails()->count() > 0) {
             return redirect()->back()->with('error', 'Không thể xóa bản ghi có sản phẩm liên quan.');
         }
        $success = $record->delete();

        if ($success) {
            $message = 'Bản ghi đã được xóa.';
        } else {
            $message = 'Không thể xóa bản ghi.';
        }
        $records = $model->getRecords($filterResult['conditions'], $orderBy);

        return view('admin.listing', [
            'user' => $adminUser,
            'records' => $records,
            'configs' => $filterResult['configs'],
            'modelName' => $modelName,
            'title' => $model->title,
            'orderBy' => $orderBy,
            'success' => $success, // Pass the success flag for displaying a message
            'message' => $message, // Pass the message for displaying to the user
        ]);
    }


    public function update(Request $request, $modelName, $id)
    {
        $modelClassName = '\App\Models\\' . ucfirst($modelName);
        if (!class_exists($modelClassName)) {
            abort(404);
        }

        $model = new $modelClassName;
        $record = $model->find($id);
        if (!$record) {
            abort(404);
        }

        foreach ($model->configs() as $config) {
            if (isset($request->{$config['field']})) {
                $record->{$config['field']} = $request->{$config['field']};
            }
            if ($request->hasFile($config['field'])) {
                 $name = time() . rand(11111, 99999) . '.' . $request->file($config['field'])->getClientOriginalName();
                 $path = $request->file($config['field'])->storeAs(
                    'public', $name
                );
                $record->{$config['field']} = $request->{$config['field']} = $model->{$config['field']} = '/' . str_replace("public", "storage", $path);
            }

        }

        if ($record->save()) {
            return redirect()->route('listing.index', ['model' => $modelName])->with('success', 'Bản ghi đã được cập nhật thành công');
        } else {

            return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật bản ghi');
        }
    }


    public function edit(Request $request, $modelName, $id)
    {
        $adminUser = Auth::guard('admin')->user();
        $modelClassName = '\App\Models\\' . ucfirst($modelName);
        if (!class_exists($modelClassName)) {
            abort(404);
        }
        $model = new $modelClassName;
        $record = $model->find($id);
        if (!$record) {
            abort(404);
        }

        $configs = $model->configs();
        return view('admin.edit', [
            'user' => $adminUser,
            'record' => $record,
            'modelName' => $modelName,
            'title' => $model->title,
            'configs' => $configs, // Truyền cấu hình chỉnh sửa vào view
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $orderstatus = DB::table('orders')
            ->select(  'orders.status as status')
            ->where('orders.id', '=', $id)
            ->first();

//        $orderstatus->status = $request->input('status');
//        $orderstatus->save();
        dd($orderstatus);
//        return view('listing.updateStatus');
    }

}
