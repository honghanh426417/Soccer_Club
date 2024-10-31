<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Page</title>
    <link rel="stylesheet" href="{{ asset('css/products/product-detail.css') }}" />
    <!-- Add Alertify.js library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script mailto:src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" mailto:href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" mailto:href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" mailto:href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" mailto:href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/clientcss/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/clientcss/navbar.css') }}" />



</head>

<body>
    @include('layouts.navbar')
    <div class="main-product-detail">
        <div class="back">
            <a class="back-to" href="{{route('products.index')}}">
            <i class="fa-solid fa-arrow-right-arrow-left"></i>Back To Product</a>
        </div>
        <section class="product-detail_container">
            <div class="product-detail_images">
                <img src="{{ $product_detail->product_image }}" alt="{{ $product_detail->name }}" />
            </div>

            <div class="product-detail_info">
                <div class="product-info_title">
                    <h2>{{ $product_detail->name }}</h2>
                    <div class="overview">
                        <p id="rating">
                            4.9
                            <span style="color: #fbcc15">&#9733;&#9733;&#9733;&#9733;&#9733;
                            </span>
                        </p>
                        <p id="reviews">{{ $reviewsCount }} reviews</p>
                    </div>
                </div>
                <div class="product-info_detail">
                    <p class="product-price">${{ $product_detail->price }}</p>
                    <div class="product-count">
                        <p>{{ $product_detail->quantity }} products available</p>
                        <button class="add-to-cart" data-product-id="{{ $product_detail->id }}">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="description">
            <h2>Description</h2>
            <p>
                {{ $product_detail->description }}
            </p>
        </section>
        <section class="review">
            <div class="section-title">
                <h2>Product Reviews</h2>
                <a id="nextReview" href="#">Next Review</a>
            </div>
            @if ($product_reviews->count() > 0)
            @foreach ($product_reviews as $review)
            <div class="testimonial-box" id="reviews">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>{{ $review->username}}</strong>
                            <span>{{ $review->email}}</span>
                        </div>
                    </div>
                    <div class="reviews">
                        <span style="color: #fbcc15">&#9733;&#9733;&#9733;&#9733;&#9733;
                        </span>
                    </div>
                </div>
                <div class="client-comment">
                    <p>{{ $review->comment}}</p>
                </div>
            </div>
            @endforeach
            @else
            <p>No reviews yet. Be the first to leave a review!</p>
            @endif

        </section>

        <section class="similar-products">
            <div class="section-title">
                <h2>Similar Products</h2>
                <a href="{{ route('products.index') }}">See more</a>
            </div>
            <div class="products">
                @foreach($relatedProducts as $product)
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
            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".add-to-cart").click(function() {
                var productId = $(this).data("product-id");
                addToCart(productId);
            });

            function addToCart(productId) {
                $.ajax({
                    url: '/AddCart/' + productId,
                    method: 'GET',
                    success: function(response) {
                        if (response.error) {
                            setTimeout(function() {
                                alertify.dismissAll();
                            }, 2000);
                            alertify.error(' The quantity of products exceeds the quantity in stock!');
                        } else {
                            // $("#change-item-cart").empty();
                            // $("#change-item-cart").html(response);
                            setTimeout(function() {
                                alertify.dismissAll();
                            }, 2000);
                            alertify.success('The product has been added to cart!');
                        }
                    },
                    error: function() {
                        alert("An error occurred while sending the request!");
                    }
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var reviews = @json($product_reviews);
            var currentIndex = 0; // Vị trí đánh giá hiện tại
            var reviewsPerPage = 3; // Số đánh giá hiển thị mỗi lần

            // Hiển thị đánh giá ban đầu
            displayReviews();
            // Xử lý sự kiện ấn để qua
            $('#nextReview').on('click', function() {
                currentIndex += reviewsPerPage;
                displayReviews();
                // Ẩn nút "Next" nếu không còn đánh giá để hiển thị
                if (currentIndex >= reviews.length - reviewsPerPage) {
                    $('#nextReview').hide();
                }
            });

            function displayReviews() {
                $('.testimonial-box').hide();
                // Hiển thị đánh giá từ vị trí hiện tại đến vị trí hiện tại + số đánh giá mỗi lần
                $('.testimonial-box:lt(' + (currentIndex + reviewsPerPage) + ')').show();
            }
        });
    </script>
</body>

@include('layouts.footer')

</html>
