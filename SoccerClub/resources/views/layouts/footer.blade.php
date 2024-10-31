<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<footer>
    <div class="footer_container">
        <div class="sec aboutus">
            <h4>KESTER</h4>
            <p>Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, En
                gland. The club currently plays in the Premier League, the top tier of English football</p>
            <ul class="sci">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
            </ul>
        </div>

        <div class="sec quicklink">
            <h4>ESSENTIAL LINKS</h4>
            <ul>
                <li><a href="{{route('client.matches')}}">MATCH RESULT</a></li>
                <li><a href="{{route('client.aboutus')}}">OUR TEAM</a></li>
                <li><a href="{{route('order.history')}}">ORDER HISTORY</a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h4>GET IN TOUCH</h4>
            <ul class="info">
                <li>
                    <span><i style="color: white" class="fa-solid fa-envelope"></i></span><p><a href="mailto:#">Soccerclub@gmail.com</a></p>
                </li>
                <li>
                    <span><i style="color: white" class="fa-solid fa-phone"></i></span><p><a href="tel:#" title="#">+84 0000 0000 000</a></p>
                </li><li>
                    <span><i style="color: white" class="fa-solid fa-location-dot"></i></span><p><a href="#">8A Tôn Thất Thuyết, Mỹ Đình, Hà Nội</a></p>
                </li>
            </ul>
        </div>
        <div class="sec contact">
            <h4>SPONSOR</h4>
            <ul>
                <li><a href="#"><img src="image/footer/TMV_800x8001670409912900_thumb.webp"></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <p>FOOTBALLCLUB TEAM</p>
</div>

</body>
</html>
