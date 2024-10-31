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
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_22.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">PREMIER LEAGUE CUP<h6 style="color: white">(2012-2013)</h6> </h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The 2012–13 Premier League (known as the Barclays Premier League for sponsorship reasons) was the 21st season of the Premier League, the English professional league for association football clubs, since its establishment in 1992, and the 114th season of top-flight English football overall. The fixture schedule was released on 18 June 2012.The season began on 18 August 2012 and ended on 19 May 2013.</p>
                <br>
                <p>Manchester City were the defending champions, having won their first Premier League title the previous season. This was their first top division league title since the 1967–68 season.</p>
                <br>
                <p><img src="{{asset('image/news/img_23.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>On 22 April 2013, Manchester United won their 13th Premier League title and 20th English title overall by defeating Aston Villa 3–0 at Old Trafford. This left reigning champions Manchester City 16 points behind with only 15 left to play for. It was the first time the title had been decided in April since Chelsea were the winners in 2005–06. It was also only the fourth time in the history of the Premier League that it had been won with at least four games remaining in the season, the last time being in 2003–04 when Arsenal were champions.[citation needed] England national football team manager, Roy Hodgson declared that United's manager, Sir Alex Ferguson, was a "magician" having won 13 titles in 21 seasons. Ferguson announced his retirement on 8th May 2013, and his last match in charge of United was a 5-5 draw at West Brom.</p></blockquote>
                <br>
                <p>Manchester United recovered from their opening week loss with a 3–2 win over Fulham in their opening home game at Old Trafford, but lost striker Wayne Rooney to injury during the match. Other second week highlights included Chelsea's 2–0 win over Newcastle United, with recent Belgian signing Eden Hazard involved in both goals.</p>
                <br>
                <p><img src="{{asset('image/news/img_24.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>The month of October saw a tightening at the top of the standings, with Chelsea, Manchester United and Manchester City all winning their first two of three games for the month, setting up a vital Sunday afternoon match at Stamford Bridge between third placed Manchester United and the leaders Chelsea. The game did not disappoint, as Chelsea went down 2–0 early on an own goal by David Luiz in the fourth minute and a goal by Robin van Persie in the 12th. Van Persie had also taken the shot that had rebounded off of Luiz, and thus was ultimately responsible for the Red Devil's one-goal lead at half-time, following a late first half goal by Chelsea's Juan Mata from a free kick. Eight minutes into the second half Ramires equalised for Chelsea, and in the 75th minute United's Javier Hernández scored what proved to be the deciding goal via a rebound from a missed Van Persie shot. Replays showed that Hernández was in an offside position, generating a great deal of controversy. After the game, only a single point separated leaders Chelsea from second placed Manchester United.</p>
                <br>
                <p>The month of December saw minimal change in the standings at the top end of the table. The situation by New Year's Eve with the top three places was the same as it was at the start of the month, though Manchester United had extended their lead over second place Manchester City to seven points, with Chelsea four points back from City in third place. Tottenham Hotspur occupied fourth place with Arsenal, Everton, and West Bromwich Albion all tied for fifth. Chelsea stopped their November slide with a 3–1 win at Sunderland on 8 December on the strength of two goals by Fernando Torres. The Manchester derby was renewed on 9 December at the City of Manchester Stadium with first place on the line. United took a two-goal lead thanks to two goals from Wayne Rooney in the 16th and 30th minute. City responded with a Yaya Touré goal in the 60th minute, a goal that followed two saves in rapid succession by United keeper David de Gea. Pablo Zabaleta equalised in the 86th minute, but Robin van Persie once again proved to be the hero for United, scoring the winning goal two minutes into injury time to extend United's lead over City at the top of the table to six points. The last team without a league win, Queens Park Rangers, finally got their first win of the season on 15 December.</p>
                <div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_1.png')}}" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-uppercase">FIFA CLUB WORLD CUP JAPAN 2008</h3>
                    <p>The year 2008 has certainly been one to remember for Manchester United Football Club. Champions of England, champions of Europe and now champions of the world due to their 1-0 victory over Liga de Quito in the final of the FIFA Club World Cup.</p>
                    <br>
                    <p><a href="{{route('client.news')}}" class="btn btn-primary text-white">Read More</a></p>
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
