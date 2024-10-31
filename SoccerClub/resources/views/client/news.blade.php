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
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_1.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">FIFA CLUB WORLD CUP JAPAN 2008™ </h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The year 2008 has certainly been one to remember for Manchester United Football Club. Champions of England, champions of Europe and now champions of the world due to their 1-0 victory over Liga de Quito in the final of the FIFA Club World Cup.</p>
                <br>
                <p>They did it the hard way. Completely dominating possession and play in the first half, United were in control of the game. That was until Nemanja Vidic elbowed Claudio Bieler in the face - and the Red Devils ended up seeing red. However, despite their numerical disadvantage, United still tried to play positively rather than try and close the game out and rely on the lottery of a penalty shoot-out, which saw them qualify for the competition after defeating Chelsea on spot-kicks in Moscow seven months ago.</p>
                <br>
                <p><img src="{{asset('image/news/img_2.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>Inspired by the prompting of Cristiano Ronaldo and Wayne Rooney, Sir Alex Ferguson's side were rewarded Rooney, the adidas Golden Ball winner fired past the outstanding Jose Cevallos in the 73rd minute, which proved to be enough. Yet the English side were forced to rely on the heroics of Edwin van der Sar who pulled off two world-class saves to frustrate Damian Manso, who claimed the adidas Bronze Ball.</p></blockquote>
                <br>
                <p>Third place went to AFC champions Gamba Osaka, who prevailed by a single goal over Pachuca in a tight match for third place. A well taken strike from Masato Yamazaki proved to be the difference between the two sides; with Osaka's victory blighted only by the tournament's first sending off, an injury-time red card for substitute Takahiro Futugawa. Yet the squad together with their enthusiastic supporters, who sang from start to finish at each of their three games in this competition, celebrated the win with gusto - which equalled Urawa Reds' achievement this time last year.</p>
                <br>
                <p>The tournament opened with a Trans-Tasman derby between Oceania champions Waitakere United of New Zealand, and Asian runners-up Adelaide United of Australia. After conceding goals in the third and fourth minute in the previous event, Waitakere underlined the progress they had made in the meantime by opening the scoring against Adelaide after 34 minutes at Tokyo's National Stadium, following a goalkeeping error. Adelaide, however, equalised before half-time, and captain Travis Dodd provided the winner for the Australians seven minutes from the close, to book a quarter-final rematch with Asian champions Gamba Osaka.</p>
                <br>
                <p>Before that, there was the other quarter-final to be contested, at the same stadium. Egypt's Al Ahly, the African champions, shocked their Mexican opponents Pachuca by going into a two-goal lead before half-time. Yet a spirited Pachuca fightback levelled the scores, forcing the match to extra time, where the Mexicans made their territorial dominance count with two more goals, from Damian Alvarez and Argentinian star Christian Gimenez.</p>
                <br>
                <p><img src="{{'image/news/img_3.png'}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>Gamba Osaka, playing in front of a passionate crowd in Toyota City, went into an early lead against Adelaide with a well-worked goal from Japan international Yasuhito Endo. Adelaide, however, made a match of it in the second half, and only two late near-misses from Dodd and substitute Robert Younis prevented the match from going to extra time.</p>
                <br>
                <p>It was time for the big two to make their entry, and the first to do so were South American champions Liga de Quito, who had beaten the more fancied Argentinian and Brazilian clubs to win the Copa Libertadores. And the Ecuadorians showed it was no fluke by racing into a two-goal lead against Pachuca, and holding firm in the face of tremendous pressure from the Mexicans in the second period, with goalkeeper Jose Cevallos making two outstanding saves.</p>
                <br>
                <p>The long-awaited entry of European champions Manchester United sparked the event's most thrilling match. Faced with ‘home' side Gamba Osaka, Sir Alex Ferguson's men were committed to attack from the outset, and were rewarded with first-half goals for Nemanja Vidic and Cristiano Ronaldo, both headers from Ryan Giggs corners. Yet Gamba had created chances of their own in the first period, and gave the English side a momentary fright when Masato Yamazaki pulled a goal back on 74 minutes. But then the United substitutes took over: England star Wayne Rooney scored twice in four minutes, sandwiched by a goal from Darren Fletcher, to give the Europeans an unassailable 5-1 lead. Yet Gamba refused to give up, and notched two consolation strikes before the whistle blew to signal the end of an unforgettable match.</p>
                <br>
                <p>Adelaide United emulated the feat of their Australian colleagues Sydney FC in 2005 by defeating Al Ahly in the play-off for fifth place. A brilliant individual goal from Cristiano in the seventh minute was enough for Aurelio Vidmar's side to prevail. There was also joy for the Australians after returning home as they scooped the FIFA Fair Play Award.</p><div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_4.png')}}" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-uppercase">PREMIER LEAGUE CUP</h3>
                    <p>The 2007–08 Premier League (known as the Barclays Premier League for sponsorship reasons) season was the 16th since its establishment. The first matches of the season were played on 11 August 2007, and the season ended on 11 May 2008</p>
                    <br>
                    <p><a href="{{route('client.news2')}}" class="btn btn-primary text-white">Read More</a></p>
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
