<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/contact/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div id="contactUs">
    <div class="title">
        <a href="{{route('client.home')}}"><img style="height: 80px; width: 80px; float: right" src="image/footer/Manchester_United_FC_crest.svg.png"></a>
        <h2> Contact Us</h2>
    </div>
    <div class="box">
        <div class="contact form">
            <h3>Send a Message</h3>
            <form>
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <input type="text" placeholder="Hieu">
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>
                            <input type="text" placeholder="Nguyen">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input type="text" mailto:placeholder="hieu@gmail.com">
                        </div>
                        <div class="inputBox">
                            <span>Phone</span>
                            <input type="text" placeholder="+84 0000 000 0000">
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputBox">
                            <span>Message</span>
                            <textarea placeholder="Write your message here..."></textarea>
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="contact info">
            <h3>Contact Info</h3>
            <div class="infoBox">
                <div>
                    <span><ion-icon name="location"></ion-icon></span>
                    <a href="#"><p>8A Ton That Thuyet, Nam Tu Liem, Ha Noi, VietNam</p></a>
                </div>
                <div>
                    <span><ion-icon name="mail"></ion-icon></span>
                    <a href="mailto:#">football@email.com</a>
                </div>
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="tel:#">+84 0000 000 0000</a>
                </div>
                <ul class="sci">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="contact map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.6253254843954!2d105.78223836748306!3d21.028664523899785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab86cece9ac1%3A0xa9bc04e04602dd85!2zRlBUIEFwdGVjaCBIw6AgTuG7mWkgLSBI4buHIFRo4buRbmcgxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6puIFF14buRYyBU4bq_IChTaW5jZSAxOTk5KQ!5e0!3m2!1svi!2s!4v1697063976791!5m2!1svi!2s"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</body>
</html>
