<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        h1 {
            font-size: 30px;
            font-weight: 700;
            margin-left: 30px;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            flex: 50%;
        }

        .col-50 h3 {
            margin: 20px 0 0px 0;
        }

        .col-75 {
            -ms-flex: 75%;
            flex: 75%;
            padding: 0 40px;
            margin-bottom: 40px;
        }

        .col-25,
        .col-50 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input {
            width: 100%;
            margin-bottom: 20px;
            margin-right: 30px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        label i {
            margin-right: 5px;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .ckout {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px auto;
            border: none;
            width: 10%;
            display: flex;
            align-items: center;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
            justify-content: center;
        }

        .back-to {
            text-decoration: none;
            color: #929292;
            font-size: 14px;
            font-style: italic;

        }

        .back-to:hover {
            text-decoration: underline;
            color: #262525;
        }

        .ckout:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
    <!--    HAVE TO HAVE <link rel="stylesheet" href="WEBSITE REFERED TO"> IN ORDER TO USE ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<h1>Checkout Page</h1>

@if(auth()->check())
{{-- {{$user = auth()->user()}};--}}

<body>
    <div class="row">
        <div class="col-75">
            <div class="container">

                <form action="{{ route('checkout.createOrder') }}" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3><br>
                            <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                            <input type="text" id="fname" name="fname" placeholder="Name">
                            <span id="fname-error" class="error-message"></span>

                            <label for="email"><i class="fa fa-envelope"></i>Email</label>
                            <input type="email" id="email" name="email" placeholder="user@email.com">
                            <span id="email-error" class="error-message"></span>


                            <label for="adr"><i class="fa fa-address-card-o"></i>Adress</label>
                            <input type="text" id="adr" name="adr" placeholder="Hong Kong Tower">
                            <span id="adr-error" class="error-message"></span>


                            <label for="city"><i class="fa fa-institution"></i>City</label>
                            <input type="text" id="city" name="city" placeholder="Hanoi">
                            <span id="city-error" class="error-message"></span>


                            <div class="row">
                                <div class="col-50">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+84 123456789">
                                    <span id="phone-error" class="error-message"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-50">
                            <h3>Payment</h3><br>

                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color: navy"></i>
                                <i class="fa fa-cc-amex" style="color: blue"></i>
                                <i class="fa fa-cc-mastercard" style="color: red"></i>
                                <i class="fa fa-cc-discover" style="color: orange"></i>
                            </div>

                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cname" placeholder="Duc Cu">
                            <span id="name-error" class="error-message"></span>

                            <label for="ccnum">Credit Card Number</label>
                            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
                            <span id="num-error" class="error-message"></span>

                            <label for="securitycode">Security Code</label>
                            <input type="password" id="securitycode" name="securitycode" placeholder="****">
                            <span id="code-error" class="error-message"></span>

                        </div>
                    </div>

                    <button class="ckout">Pay</button>
                    <div><a class="back-to" href="{{route('products.ViewListCart')}}">Back To List Cart</a></div>
                </form>
            </div>
        </div>
    </div>
    @else
    <p>You need to log in or register to pay!!</p>
    <a href="{{ route('login.show') }}">Sign In</a>
    <a href="{{ route('register.show') }}">Sign Up</a>
    @endif
    <script>
        function validateForm() {
            var fname = document.getElementById('fname').value;
            var email = document.getElementById('email').value;
            var adr = document.getElementById('adr').value;
            var city = document.getElementById('city').value;
            var phone = document.getElementById('phone').value;
            var cname = document.getElementById('cname').value;
            var num = document.getElementById('ccnum').value;
            var securitycode = document.getElementById('securitycode').value;

            var isValid = true;

            resetErrorMessages();

            if (fname == "") {
                displayError('fname-error', "Please enter your full name!");
                isValid = false;
            }

            if (email === "") {
                displayError('email-error', "Please enter email!");
                isValid = false;
            } else {
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!email.match(emailPattern)) {
                    displayError('email-error', "Please enter a valid email address!.");
                    isValid = false;
                }
            }

            if (adr == "") {
                displayError('adr-error', "Please enter your address!");
                isValid = false;
            }

            if (city == "") {
                displayError('city-error', "Please enter a city!");
                isValid = false;
            }

            if (phone === "") {
                displayError('phone-error', ".Please enter the phone number!");
                isValid = false;
            } else {
                var phonePattern = /^\d{10}$/;
                if (!phone.match(phonePattern)) {
                    displayError('phone-error', "Please enter a 10-digit phone number!");
                    isValid = false;
                }
            }

            if (cname == "") {
                displayError('name-error', "Please enter card name!");
                isValid = false;
            }

            if (num === "") {
                displayError('num-error', "Please enter card number!");
                isValid = false;
            } else {
                var NumPattern = /^\d{16}$/;
                if (!num.match(NumPattern)) {
                    displayError('num-error', "Please enter the correct tag format!");
                    isValid = false;
                }
            }

            if (securitycode === "") {
                displayError('code-error', "Please enter number!");
                isValid = false;
            } else {
                var CodePattern = /^\d{4}$/;
                if (!securitycode.match(CodePattern)) {
                    displayError('code-error', "Please enter the correct number!");
                    isValid = false;
                }
            }

            return isValid;
        }

        function displayError(elementId, errorMessage) {
            var errorElement = document.getElementById(elementId);
            errorElement.textContent = errorMessage;
        }

        function resetErrorMessages() {
            var errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(function(element) {
                element.textContent = '';
            });
        }
    </script>
</body>

</html>