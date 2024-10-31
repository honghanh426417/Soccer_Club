@extends('layouts.admin')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@section('content')
    <a href="{{route('listing.index',['model'=>'Order'])}}">Back to Order</a>
    <section class="content-header">
        <h1>
            Chi tiết đơn hàng
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container123  col-md-6" style="">
                            <h4></h4>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-md">Thông tin khách hàng</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{$orders->full_name}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{$orders->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$orders->email}}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{$orders->address}}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>{{$orders->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>{{$orders->city}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid"
                               aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                            </thead>
                            <tbody>
                            @foreach($ODInfo as $key => $OD)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $OD->productName }}</td>
                                    <td>{{ $OD->quantity }}</td>
                                    <td>{{ number_format($OD->subtotal) }} VNĐ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red">{{ number_format($orders->TotalAmount) }}
                                        VNĐ</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <form method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div class="form-inline">
                                <label>Trạng thái giao hàng: </label>
                                <select name="status" class="form-control input-inline"
                                        style="width: 220px; text-align: center">
                                    <option value="1">Chưa giao</option>
                                    <option value="2">Đang giao</option>
                                    <option value="3">Đã giao</option>
                                </select>
                                <input id="xulyButton" type="submit" value="Xử lý" class="btn btn-primary"
                                       style="margin-left: 28px">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>
</html>



