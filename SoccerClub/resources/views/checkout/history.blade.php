<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/history/history.css') }}">
    <title>History Order</title>

</head>
<body>
<div class="back"><a class="back-to" href="{{route('products.index')}}">Back To Product</a></div>
@foreach($purchaseHistory as $order)
    <div class="container">
        <table class="viewOrder">
            <tr>
                <th class="viewOrder-title">User Name:</th>
                <td class="viewOrder-info">{{ $order->UserName }}</td>
            </tr>
            <tr>
                <th class="viewOrder-title">Total Amount:</th>
                <td class="viewOrder-info">{{ $order->TotalAmount }}</td>
            </tr>
            <tr>
                <th class="viewOrder-title">Status:</th>
                <td class="viewOrder-info">{{ $order->status }}</td>
            </tr>
            <tr>
                <th class="viewOrder-title">Delivery Date:</th>
                <td class="viewOrder-info">{{ $order->created_at }}</td>
            </tr>
        </table>
        <table>
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Feedback</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderDetails as $orderDetail)
                <tr>
                    <td>{{ $orderDetail->productName }}</td>
                    <td>{{ $orderDetail->quantity }}</td>
                    <td>{{ $orderDetail->subtotal }}</td>
                    <td>
                        <form action="{{ route('reviews.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $orderDetail->productID }}">
                            <input type="hidden" name="product_name" value="{{ $orderDetail->productName }}">
                            <input type="hidden" name="user_name" value="{{ $user->username }}">
                            <input type="hidden" name="user_email" value="{{ $user->email }}">
                            <div class="form-group">
                                <textarea name="comment" rows="1" required></textarea>
                            </div>
                            <button type="submit"  data-status="{{ $order->status }}">Send Feedback</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endforeach
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            var form = $(this);
            var formData = form.serialize();
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alertify.success('Cảm ơn đã đánh giá!');
                        form.closest('form').hide();
                    } else {
                        alertify.error('Đánh giá không thành công. Vui lòng thử lại.');
                    }
                },
                error: function () {
                    alertify.error('Đã xảy ra lỗi. Vui lòng thử lại sau.');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('button[data-status="Pending"], button[data-status="Đang giao"]').each(function() {
            $(this).html("Bạn chưa nhận được hàng không thể đánh giá sản phẩm").prop('disabled', true);
        });
    });
</script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</body>

</html>
