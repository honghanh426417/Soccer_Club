    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Fashi Template">
        <meta name="keywords" content="Fashi, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/cart/listcart.css') }}">

        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    </head>

    <body>
        <section class="shopping-cart spad">

            <div class="cart-container">
                <div class="row">
                    <div class="col-lg-12" id="list-cart">
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Save</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has("Cart") != null)
                                    @foreach(Session::get('Cart')->products as $item)
                                    <tr>
                                        <td class="cart-pic"><img src="{{$item['productInfo']->product_image}}" alt=""></td>
                                        <td class="cart-title">
                                            <h5>{{$item['productInfo']->name}}</h5>
                                        </td>
                                        <td class="p-price">{{number_format($item['productInfo']->price)}}</td>
                                        <td class="qua-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input id="quanty-item-{{$item['productInfo']->id}}" type="number" value="{{$item['quanty']}}" max="{{$item['productInfo']->quantity}}" min="0">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price">{{number_format($item['price'])}}</td>
                                        <td class="save-icon"> <i class="fa fa-save" onclick="SaveListItemCart({{$item['productInfo']->id}});"></i></td>
                                        <td class="close-icon"> <i class="fa fa-close" onclick="DeleteListItemCart({{$item['productInfo']->id}});"></i></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 offset-lg-8">
                                <div class="proceed-checkout">
                                    @if(Session::has("Cart") != null)
                                    <ul>
                                        <li class="subtotal">Total Quantity: <span>{{Session::get('Cart')->totalQuanty }}</span></li>
                                        <li class="cart-total">Total: <span>{{Session::get('Cart')->totalPrice}}</span></li>
                                    </ul>
                                    <a href="{{ route('checkout.index') }}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                                    @endif
                                </div>
                                <div class="back-to-product">
                                    <a href="{{ route('products.index') }}">Back To Product </a>
                                </div>

                            </div>
                        </div>

                        <!-- <a href="{{ route('products.index') }}">
        <i class="fa-solid fa-rotate-left"></i>
        Back To Product
    </a> -->
                    </div>
                </div>
            </div>
            </div>
        </section>
        <script>
            function DeleteListItemCart(id) {

                try {
                    $.ajax({
                        url: 'Delete-List-Item-Cart/' + id,
                        type: 'GET',
                    }).done(function(response) {
                        $("#list-cart").empty();
                        $("#list-cart").html(response);
                        alertify.success('Đã xóa sản phẩm!');
                    });
                } catch (err) {
                    console.log(err)
                }

            }

            function SaveListItemCart(id) {
                var newQuantity = $("#quanty-item-" + id).val();
                var maxQuantity = parseInt($("#quanty-item-" + id).attr('data-max-quantity'));

                if (newQuantity > maxQuantity) {
                    alertify.error('Số lượng sản phẩm vượt quá số lượng còn trong kho.');
                    return;
                }

                $.ajax({
                    url: 'Save-List-Item-Cart/' + id + '/' + newQuantity,
                    type: 'GET',
                }).done(function(response) {
                    $("#list-cart").empty();
                    $("#list-cart").html(response);
                    alertify.success('Đã lưu sản phẩm!');
                });
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>

    </html>
