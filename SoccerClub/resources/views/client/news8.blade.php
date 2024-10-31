<!DOCTYPE html>
<html lang="en">

<head>
    <title>FIFA CLUB WORLD CUP JAPAN 2008</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/news/css/news.css">
    <link rel="stylesheet" href="/css/news/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/news/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/news/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/news/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/news/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/news/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/news/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/news/css/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/news/css/aos.css">

    <link rel="stylesheet" href="/css/news/css/style.css">



</head>

<body>
<header id="header">
    <div class="sidebar" id="sidebar-left">
        <li>
            <a href="#"><i class="fa-solid fa-globe"></i> EN</a>
            <!-- <ul class="cap_2">
                <li>VN</li>
            </ul> -->
        </li>
        <li>
            <a href="#"><i class="fa-solid fa-gear"></i> Setting</a>
            <!-- <ul style="margin-left: 25px" class="cap_2">
                <li>1QUE</li>
                <li>2QUE</li>
            </ul> -->
        </li>
    </div>
    <div class="parent">
        <input class="input" type="type" placeholder="Search..." />

        <button class="btn">
            <ion-icon name="search-outline"></ion-icon>
        </button>
    </div>
    <div class="sidebar" id="sidebar-right">
        <li>
            @guest
                <a href="{{ route('login.perform') }}"><i class="fa-solid fa-user"></i> LOGIN</a>
                <!-- <ul class="cap_2">
                    <li><a href="{{ route('register.perform') }}">SIGN UP</a></li>
                    <li><a href="{{ route('login.perform') }}">LOGIN</a></li>
                </ul> -->
            @endguest
            @auth
                <a href="{{ route('logout.perform') }}"><i class="fa-solid fa-user"></i>Logout</a>
            @endauth
        </li>
        <li>
            <a href="{{ route('products.ViewListCart') }}">
                <i class="fa-solid fa-cart-shopping"></i> Cart

                </ul>
            </a>

        </li>


    </div>
</header>
<div id="nav-placeholder"></div>
<nav id="nav">
    <div class="sidebar">
        <li>
            <a id="hr1" href="{{route('client.home')}}">
                <img id="imghomepage" src="{{asset('image/homepage/match/manu.png')}}" style="width: 70px; height: 70px;">
            </a>
        </li>
        {{-- <li>--}}
        {{-- <a id="hr2" href="#">GENERAL INFOMATION</a>--}}
        {{-- <ul style="margin-left: 50px;" class="cap_2">--}}
        {{-- <li>History of game</li>--}}
        {{-- <li>Rules</li>--}}
        {{-- <li>Field Details</li>--}}
        {{-- <li>Tricks and Skills</li>--}}
        {{-- </ul>--}}
        {{-- </li>--}}
        {{-- <li>--}}
        {{-- <a id="hr3" href="#">NEWS</a>--}}
        {{-- <ul class="cap_2">--}}
        {{-- <a href="{{route('client.news6')}}"><li>Lastest News</li></a>--}}
        {{-- </ul>--}}
        {{-- </li>--}}
        <li>
            <a id="hr4" href="{{route('client.matches')}}">MATCHES</a>
            {{-- <ul class="cap_2">--}}
            {{-- <li>Fixtures</li>--}}
            {{-- <li>Featured Matches</li>--}}
            {{-- <li>Schedule</li>--}}
            {{-- <li>Standings</li>--}}
            {{-- <li>Highlights</li>--}}
            {{-- </ul>--}}
        </li>
        <li><a id="hr5" href="{{route('players.index')}}">PLAYERS</a></li>
        {{-- <li>--}}
        {{-- <a id="hr6" href="#">STATISTICS</a>--}}
        {{-- <ul style="margin-left: 10px;" class="cap_2">--}}
        {{-- <li>Teams</li>--}}
        {{-- <li>Players</li>--}}
        {{-- </ul>--}}
        {{-- </li>--}}
        <li><a id="hr8" href="{{route('products.index')}}">MERCHANDISE</a></li>
        <li><a id="hr9" href="{{route('client.aboutus')}}">ABOUT US</a></li>
        <li><a id="hr8" href="{{route('client.contactus')}}">CONTACT US</a></li>
        <li><a id="hr10" href="{{route('feedback.show')}}">FEEDBACK</a></li>
    </div>

</nav>
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_7.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">EUROPEAN SUPER CUP<h6 style="color: white">(1991)</h6> </h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The 1991 European Super Cup was the 16th European Super Cup, an annual football match organised by UEFA (the Union of European Football Associations) and contested by the winners of the previous season's European Cup and Cup Winners' Cup competitions. The match was played on 19 November 1991 and featured the 1990–91 European Cup winners, Red Star Belgrade, and Manchester United, winners of the 1990–91 Cup Winners' Cup. It was meant to be played over two legs, but due to the political unrest in Yugoslavia at the time, UEFA decided that only the leg at Manchester United's home, Old Trafford, would be played.</p>
                <br>
                <p>The match kicked off at 19:15 GMT, in front of a crowd of 22,110. Red Star Belgrade were the better team in the first half, but had two attempts cleared off the line by Manchester United players, and missed the goal with their other shots. In the second half, Red Star started the stronger of the two again, but United improved, playing counter-attacking football. In the 67th minute, Brian McClair scored the only goal of the game, a close-range rebound after a shot by Neil Webb. United went close to adding a second goal, but the game finished 1–0, giving Manchester United their first and only European Super Cup title.</p>
                <br>
                <p><img src="{{asset('image/news/img_8.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>For Manchester United, the Super Cup was their only chance to win a European trophy in the 1991–92 season; they had been knocked out of the Cup Winners' Cup in the second round earlier in the month, losing 4–1 on aggregate to Atlético Madrid, thus failing to retain their title. In contrast, Red Star were still in the European Cup, having won in each of the first two rounds.[12] In the lead-up to the match, Ferguson said, "If we can defeat one of the best teams in Europe, it will be a real boost for us."</p></blockquote>
                <br>
                <p>The match was played at Old Trafford, in front of a crowd of 22,110, roughly half the capacity of the ground, and Manchester United's lowest home attendance of the season. The Times' reporter at the game, Stuart Jones, explained that the match was played primarily for a television audience, and was more of a friendly match for the two sides. Manchester United had the first chance of the game in the second minute, when they were awarded a penalty by the referee, Mario van der Ende; a free kick from the right wing was hit to the far side of the penalty area by Lee Martin, where the ball was met by Gary Pallister, only for his header back across the box to be blocked by the arm of Red Star centre-back Miodrag Belodedici, who received a yellow card for handball.</p>
                <br>
                <p><img src="{{asset('image/news/img_9.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>Manchester United captain Steve Bruce placed the penalty kick to the right of Red Star goalkeeper Zvonko Milojević, who palmed the ball round the post. United had another chance at goal four minutes later, when Milojević saved a shot from Mark Hughes.[6] Manchester United's attacks in the first half were slow and laboured, rarely piercing Red Star's defence. Meanwhile, the Red Star forwards, Dejan Savićević and Darko Pančev, each broke through the United defence with quick, purposeful attacks. Pančev just missed the goal with a 20-yard volley, before heading wide from a free kick. Twice, attacks from Savićević and Pančev beat United's goalkeeper, Peter Schmeichel, but were cleared off the line by Gary Pallister and Clayton Blackmore. Another header from Pančev went narrowly wide just before half-time, and the score remained 0–0.</p>
                <br>
                <p>The travelling side continued to have the best of the play at the start of the second half: Savićević just missed the target with two angled shots. United, playing a counter-attacking game, started to have more success. In the 67th minute, Neil Webb dribbled the ball around Savićević on the edge of the box, and hit a shot that was deflected by Milojević onto the post. The ball rebounded to McClair, who put it into the net from close range, giving United a 1–0 lead. According to the Irish Independent, Manchester United played better after the goal, and had further chances to double their advantage; Blackmore hit a long-range shot that was parried by Milojević, while Giggs could only hit the goalkeeper with an effort and a volley from Hughes was saved near the ground by Milojević at his near post.</p>
                <div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_10.png')}}" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-uppercase">UEFA EUROPA LEAGUE CUP</h3>
                    <p>The 2017 UEFA Europa League Final was the final match of the 2016–17 UEFA Europa League, the 46th season of Europe's secondary club football tournament organised by UEFA, and the 8th season since it was renamed from the UEFA Cup to the UEFA Europa League.</p>
                    <br>
                    <p><a href="{{route('client.news6')}}" class="btn btn-primary text-white">Read More</a></p>
                </div>


            </div>
        </div>
    </div>
</div>


<footer id="footer">
    <div class="container">
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
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CHECK OUT</a></li>
                <li><a href="#">EVENT</a></li>
                <li><a href="#">MATCH RESULT</a></li>
                <li><a href="#">OUT TEAM</a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h4>GET IN TOUCH</h4>
            <ul class="info">
                <li>
                    <span></span><p><a href="mailto:#"><i style="color: white" class="fa-solid fa-envelope"></i> Soccerclub@gmail.com</a></p>
                </li>
                <li>
                    <span></span><p><a href="tel:#" title="#"><i style="color: white" class="fa-solid fa-phone"></i> +84 0000 0000 000</a></p>
                </li><li>
                    <p><a href="#"><span><i style="color: white" class="fa-solid fa-location-dot"></i></span> 8A Tôn Thất Thuyết, Mỹ Đình, Hà Nội</a></p>
                </li>
            </ul>
        </div>
        <div class="sec contact">
            <h4>SPONSOR</h4>
            <ul>
                <li><a href="#"><img src="images/TMV_800x8001670409912900_thumb.webp"></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <p>FOOTBALLCLUB TEAM</p>
</div>



</div>
<!-- .site-wrap -->

<script src="/js/news/js/jquery-3.3.1.min.js"></script>
<script src="/js/news/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/news/js/jquery-ui.js"></script>
<script src="/js/news/js/popper.min.js"></script>
<script src="/js/news/js/bootstrap.min.js"></script>
<script src="/js/news/js/owl.carousel.min.js"></script>
<script src="/js/news/js/jquery.stellar.min.js"></script>
<script src="/js/news/js/jquery.countdown.min.js"></script>
<script src="/js/news/js/bootstrap-datepicker.min.js"></script>
<script src="/js/news/js/jquery.easing.1.3.js"></script>
<script src="/js/news/js/aos.js"></script>
<script src="/js/news/js/jquery.fancybox.min.js"></script>
<script src="/js/news/js/jquery.sticky.js"></script>
<script src="/js/news/js/jquery.mb.YTPlayer.min.js"></script>


<script src="/js/news/js/main.js"></script>
<script>

    let input = document.querySelector(".input");
    let btn = document.querySelector(".btn");
    let parent = document.querySelector(".parent");

    btn.addEventListener("click", () => {
        parent.classList.toggle("active");
        input.focus();
    });

</script>

</body>

</html>
