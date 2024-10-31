<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/products/products.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">
    <link rel="stylesheet" href="css/clientcss/footer.css" type="text/css">
    <link rel="stylesheet" href="css/clientcss/navbar.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

</head>

<body>
@include('layouts.navbar')
<div class="container">
    <div class="grid-content">
        @foreach ($products as $product)
            <div class="product-card">
                <a class="top-card" href="{{ route('product-detail', ['id' => $product->id]) }}">
                    <div class="card-img">
                        <img src="{{$product->product_image}}" alt=" {{ $product->name }}" />
                    </div>
                    <h4 id="card-name">{{ $product->name }}</h4>
                </a>
                <div id="bottom-card">
                    <h3 class="card-price">${{ $product->price }}</h3>
                    <a class="card-cart" onclick="AddCart({{$product->id}})" href="javascript:">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>

        @endforeach
        <div class="error-message" id="error-message-{{ $product->id }}"></div>
    </div>
    <div class="pagination">
        <a href="#" onclick="changePage(-1)">❮ Prev</a>
        <span id="currentPage">1</span>
        <a href="#" onclick="changePage(1)">Next ❯</a>
    </div>
</div>

<script>
    function AddCart(id)
    {
        $.ajax({
            url: '/AddCart/' + id,
            type: 'GET',
        }).done(function(response) {

            if (response.error) {
                alertify.error(response.error);
                setTimeout(function() {
                    alertify.dismissAll();
                }, 2000);
            } else {
                setTimeout(function() {
                    alertify.dismissAll();
                }, 2000);
                $("#change-item-cart").empty();
                $("#change-item-cart").html(response);
                alertify.success('Đặt hàng thành công!');
                $("#error-message-" + id).empty();
            }
        });
    }
    $("#change-item-cart").on("click", ".close-icon i", function() {
        console.log($(this).data("id"));
        $.ajax({
            url: 'Delete-Item-Cart/' + $(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            console.log(response);
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alertify.success('Đã xóa sản phẩm!');

        });
    });


    let currentPage = 1;
    const itemsPerPage = 12;

    const totalItems = document.querySelectorAll('.product-card').length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    showPage(currentPage);

    function changePage(offset) {
        currentPage += offset;
        if (currentPage < 1) {
            currentPage = 1;
        } else if (currentPage > totalPages) {
            currentPage = totalPages;
        }
        showPage(currentPage);
    }

    function showPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        document.querySelectorAll('.product-card').forEach((card, index) => {
            card.style.display = index >= startIndex && index < endIndex ? 'block' : 'none';
        });

        document.getElementById('currentPage').innerText = page;
    }
</script>
</body>
@include('layouts.footer')
</html>
