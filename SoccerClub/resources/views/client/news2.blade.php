<!DOCTYPE html>
<html lang="en">

<head>
    <title>FIFA CLUB WORLD CUP JAPAN 2008</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


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
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_4.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">PREMIER LEAGUE CUP<h6 style="color: white">(2007-2008)</h6></h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The 2007–08 Premier League (known as the Barclays Premier League for sponsorship
                    reasons) season was the 16th since its establishment. The first matches of the season were played on
                    11 August 2007, and the season ended on 11 May 2008. Manchester United went into the 2007–08 season
                    as the Premier League's defending champions, having won their ninth Premier League title and
                    sixteenth league championship overall the previous season. This season was also the third
                    consecutive season to see the "Big Four" continue their stranglehold on the top four spots (which
                    mean UEFA Champions League qualification).</p>
                <br>
                <p>The first goal of the season was scored by Michael Chopra, who scored a 94th-minute winner for
                    Sunderland against Tottenham in the early kick-off. The first red card of the season was given to
                    Reading's Dave Kitson after a challenge on Patrice Evra in their opening game against Manchester
                    United. The first hat-trick was scored by Emmanuel Adebayor in the match between Arsenal and Derby
                    County.</p>
                <br>
                <p><img src="{{asset('image/news/img.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>On 29 September 2007, Portsmouth beat Reading 7–4 in the highest-scoring match in Premier
                        League history. On 15 December 2007, both Roque Santa Cruz (Blackburn Rovers) and Marcus Bent
                        (Wigan Athletic) scored hat-tricks during Wigan's 5–3 home win over Blackburn. This was the
                        first occasion in Premier League history that two players on opposing teams had scored
                        hat-tricks during the same match.</p></blockquote>
                <br>
                <p>On 29 March 2008, Derby County drew 2–2 with Fulham while Birmingham City, who were 17th in the table
                    at the time, beat Manchester City 3–1, to make Derby County the first team in Premier League history
                    to be relegated in March, ending the season with an all-time top flight record low points tally of
                    just 11.</p>
                <br>
                <p><img src="{{asset('image/news/img_5.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>On 11 May 2008, the final day of the season, Manchester United beat Wigan Athletic 2–0 while Chelsea
                    drew 1–1 with Bolton Wanderers, thus crowning Manchester United with their tenth Premier League
                    title, and 17th championship overall, just one behind Liverpool's total of 18. Meanwhile, despite
                    Birmingham beating Blackburn Rovers 4–1 and Reading beating Derby 4–0, both Birmingham and Reading
                    were relegated due to Fulham's 1–0 win over Portsmouth. This meant that Fulham avoided relegation by
                    a goal difference of −22, compared to Reading's −25. On the same day, Middlesbrough beat Manchester
                    City 8–1 to claim the biggest win of the season.</p>
                <br>
                <p>The season was notable for the return of the English league to the top of UEFA's official ranking
                    list, overtaking La Liga for the period from 1 May 2008 to 30 April 2009. This followed the success
                    of English clubs in the UEFA Champions League, with both champions Manchester United and runners-up
                    Chelsea reaching the European Cup final. This was the first time that the English league had topped
                    the UEFA rankings since the Heysel Stadium disaster in 1985.</p>
                <div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_6.png')}}" alt="Image placeholder"
                         class="img-fluid mb-4">
                    <h3 class="text-uppercase">EUROPEAN SUPER CUP</h3>
                    <p>The 1991 European Super Cup was the 16th European Super Cup, an annual football match organised
                        by UEFA (the Union of European Football Associations) and contested by the winners of the
                        previous season's European Cup and Cup Winners' Cup competitions. </p>
                    <br>
                    <p><a href="{{route('client.news8')}}" class="btn btn-primary text-white">Read More</a></p>
                </div>


            </div>
        </div>
    </div>
</div>


<footer id="footer">
    <div class="container">
        <div class="sec aboutus">
            <h4>KESTER</h4>
            <p>Manchester United Football Club is a professional football club based in Old Trafford, Greater
                Manchester, En
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
                    <span></span>
                    <p><a href="mailto:#"><i style="color: white" class="fa-solid fa-envelope"></i> Soccerclub@gmail.com</a>
                    </p>
                </li>
                <li>
                    <span></span>
                    <p><a href="tel:#" title="#"><i style="color: white" class="fa-solid fa-phone"></i> +84 0000 0000
                            000</a></p>
                </li>
                <li>
                    <p><a href="#"><span><i style="color: white" class="fa-solid fa-location-dot"></i></span> 8A Tôn
                            Thất Thuyết, Mỹ Đình, Hà Nội</a></p>
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
