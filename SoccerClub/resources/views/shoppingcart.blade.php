<div class="select-items i fa-solid fa-cart-shopping">
    @if(Session::has("Cart") && count(Session::get('Cart')->products) < 0) <table>
        <tbody>
            <tr>
                @foreach(Session::get('Cart')->products as $item)
            <tr>
                <td class="si-pic">
                    <img src="{{ $item['productInfo']->product_image }}">
                </td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{number_format($item['productInfo']->price)}} x {{$item['quanty']}}</p>
                        <h6>{{$item['productInfo']->name}}</h6>
                    </div>
                </td>
                <td class="close-icon">
                    <i class="fa fa-close" data-id="{{$item['productInfo']->id}}"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{number_format($newCart->totalPrice)}}₫</h5>
</div>
<div class="select-button">
    <a href="{{ route('products.ViewListCart') }}" class="primary-btn view-card">VIEW CARD</a>
    <a href="{{ route('checkout.index') }}" class="primary-btn checkout-btn">CHECK OUT</a>
</div>
@endif