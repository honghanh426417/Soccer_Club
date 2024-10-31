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
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_16.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">FOOTBALL LEAGUE CUP<h6 style="color: white">(2010)</h6> </h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The 2010 Football League Cup Final was the final match of the 2009–10 Football League Cup, the 50th season of the Football League Cup, a football competition for the 92 teams in the Premier League and The Football League. The match, played at Wembley Stadium on 28 February 2010, was won by Manchester United, who beat Aston Villa 2–1. Aston Villa took the lead in the fifth minute of the game, via a James Milner penalty kick, but Michael Owen equalised for Manchester United seven minutes later. Wayne Rooney, who replaced the injured Owen shortly before half time, scored the winning goal with 16 minutes left to play</p>
                <br>
                <p>Manchester United went into the match as defending champions, having beaten Tottenham Hotspur on penalties in the 2009 final. The win gave them their fourth Football League Cup title, their third in five years and their second in succession, becoming the first team to retain the trophy since Nottingham Forest in 1990. It was the first time Manchester United successfully defended a major cup, having been losing finalists as title holders in the 1995 and 2005 FA Cup, and the 2009 Champions League finals. Since Manchester United qualified for the 2010–11 UEFA Champions League via their league position, the place in the following season's Europa League which would have been given to the winners of the League Cup was instead given to Villa, since they finished in sixth place in the 2009–10 Premier League.</p>
                <br>
                <p>Out of the 173 previous meetings between the two sides, Manchester United had won 87 and Aston Villa had won 49, with the remaining 37 games finishing as draws; however, Villa's record in the League Cup against United was markedly better, with four wins in six matches between them.[8] United's only League Cup win over Aston Villa came in October 1975, when they won 2–1 at Villa Park in the third round. The only previous meeting between the two teams in the final of the competition came in 1994, when Villa won 3–1 and United winger Andrei Kanchelskis became the first player to be sent off in a League Cup final.</p>
                <br>
                <p><img src="{{asset('image/news/img_17.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>Both Manchester United and Aston Villa had played in seven Football League Cup finals, but Manchester United had only won three compared to Villa's five. United's most recent victory, however, came in 2009 – when they beat Tottenham Hotspur on penalties – whereas Villa's last League Cup title came in 1996, when they beat Leeds United 3–0. Manchester United went into the match looking to become the first team to retain the League Cup since Nottingham Forest in 1990.</p></blockquote>
                <br>
                <p>Manchester United, on the other hand, were beset by injury and suspension; midfielder Ryan Giggs broke his arm in the league match between the two teams 18 days earlier, forcing him to miss a month of the season, while fellow midfielder Anderson suffered an injury to the cruciate ligament in his left knee against Everton and was ruled out for the remainder of the season. Defender Rio Ferdinand had been expected to play in the match following a four-match suspension for an incident against Hull City, but he suffered a recurrence of a back problem that had kept him out of contention for three months earlier in the season. Also missing with long-term injuries for United were midfielder Owen Hargreaves (knee) and defender John O'Shea (thigh), while midfielder Nani was suspended for three matches after being sent off for a two-footed tackle on Stiliyan Petrov in the match between United and Villa on 10 February.</p>
                <br>
                <p>Manchester United equalised seven minutes later after capitalising on an uncharacteristic mistake by Richard Dunne. Dimitar Berbatov caught Dunne in possession inside the Aston Villa half and ran towards the goal; although Dunne was able to catch up to Berbatov, his tackle only succeeded in finding its way to Michael Owen on the edge of the penalty area, where he swept the ball past Brad Friedel into the bottom-left corner of the goal. Milner had a chance to double his tally and restore his side's lead four minutes later with a left-footed shot from outside the penalty area, but Kuszczak kept the scores level with a diving, two-handed save.</p>
                <br>
                <p>As the first half drew to a close, Owen pulled up with a hamstring injury as he chased down a ball into the Aston Villa penalty area; Wayne Rooney came on to replace him in the 41st minute. Park Ji-sung almost gave Manchester United the lead in injury time at the end of the first half, as James Collins' attempted clearance from Antonio Valencia's cross fell to him just inside the penalty area, but his shot hit the post.</p>
                <br>
                <p><img src="{{asset('image/news/img_18.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>Michael Carrick had the first significant chance of the second half in the 49th minute, when he forced Friedel into a low, diving save after making space for himself with a neat turn on the edge of the box. It took until the 74th minute for United to take the lead, as Rooney beat Friedel with a looping header; Berbatov found Valencia on the right side of the penalty area near the goal line, and the Ecuadorian stood up a cross into the centre, where Rooney outjumped Collins to head back across goal his 28th goal of the season. Rooney almost scored again with another header three minutes later, but it hit the foot of the left-hand post.</p>
                <br>
                <p>Villa's search for an equaliser resulted in Norwegian striker John Carew coming on for Spanish right-back Carlos Cuellar with 10 minutes to play, and Carew almost had an immediate impact; as Stewart Downing crossed from the right wing, Carew's presence caused confusion in the Manchester United penalty area, and Vidić knew little about it as Heskey's header ricocheted off his shoulder and up onto the top of the crossbar.</p>
                <br>
                <p>Dunne had a chance to equalise in the dying minutes as Downing chipped a cross to the far post, but he didn't make good enough contact on his header and it went harmlessly wide. United managed to survive the four minutes of injury time at the end of the second half to take the victory, the first team to retain the League Cup since Nottingham Forest in 1990 and the first time they had retained a cup trophy in their history.</p>
                <div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_19.png')}}" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-uppercase">FA CUP</h3>
                    <p>The 2004 FA Cup final was the 123rd FA Cup Final and the fourth to be played at the Millennium Stadium, the Welsh national stadium in Cardiff, due to the ongoing reconstruction of the usual venue, London's Wembley Stadium.</p>
                    <br>
                    <p><a href="{{route('client.news3')}}" class="btn btn-primary text-white">Read More</a></p>
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
