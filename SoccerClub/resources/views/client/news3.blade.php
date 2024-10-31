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
<div class="hero overlay" style="background-image: url('{{asset('image/news/img_19.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mx-auto text-center">
                <h1 class="text-white">FA CUP<h6 style="color: white">(2004)</h6> </h1>
                <p><span>May 20, 2020</span> <span class="mx-3">&bullet;</span> <span>by Admin</span></p>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <p class="lead">The 2004 FA Cup final was the 123rd FA Cup Final and the fourth to be played at the Millennium Stadium, the Welsh national stadium in Cardiff, due to the ongoing reconstruction of the usual venue, London's Wembley Stadium. The match took place on 22 May 2004 and it was contested by Manchester United, who had finished third in the Premier League that season, and Millwall, who had finished 10th in the First Division.</p>
                <br>
                <p>Manchester United secured a record 11th FA Cup victory with a headed goal from Cristiano Ronaldo and a brace from Ruud van Nistelrooy, which included a penalty kick. In contrast, it was Millwall's first appearance in a final of either the FA Cup or the Football League Cup. At the trophy presentation after the match, the Manchester United players wore shirts bearing the name and number of midfielder Jimmy Davis, who died in a road accident in August 2003.</p>
                <br>
                <p>Manchester United were appearing in their 16th FA Cup final and had won it on 10 of their previous 15 appearances. Two of these victories had yielded a League and FA Cup double (in 1994 and 1996) and in 1999 they had won the FA Cup as part of an unprecedented treble of Premier League, Champions League and FA Cup wins.</p>
                <br>
                <p><img src="{{asset('image/news/img_20.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <blockquote><p>Due to the ongoing reconstruction of Wembley Stadium, the match was played at the Millennium Stadium in Cardiff for the fourth year in a row. The stadium was built in 1998 ahead of the 1999 Rugby World Cup in Wales, with a capacity of 72,500. While it was being built, the Wales national rugby union team played its home matches at the old Wembley Stadium, so after Wembley was torn down in 2000, the Millennium Stadium was selected to host the finals of the FA Cup, the League Cup and the Football League play-offs until at least 2003. Delays to the construction of the new Wembley meant that deal was later extended until 2006.</p></blockquote>
                <br>
                <p>Manchester United goalkeeper Roy Carroll appeared to have earned his place in the team for the FA Cup final after a run of good performances between the end of March and mid-April 2004, conceding just two goals in five games, including the semi-final win over Arsenal on 3 April. However, a 1–0 defeat away to Portsmouth on 17 April led to a recall for American goalkeeper Tim Howard for the last five games of the season. Although Howard conceded three goals in that time, he retained his place in the team for the cup final. Following the recurrence of a knee injury against Arsenal on 28 March, striker Ruud van Nistelrooy was only able to play in one match in April 2004 and was expected to miss the last two league games against Chelsea and Aston Villa to ensure his fitness for the final; however, he recovered in time to play and score in both games, guaranteeing his place up front against Millwall. One surprise selection saw Darren Fletcher named in central midfield alongside Roy Keane ahead of both Nicky Butt and Phil Neville.</p>
                <br>
                <p>The first chances of the match fell to Manchester United's Paul Scholes, who took a couple of long-range efforts at goal – one went just wide while another was tipped away by Millwall goalkeeper Andy Marshall. Scholes was presented with another opportunity on the six-yard line, when a rabona cross from Cristiano Ronaldo found him unmarked; the midfielder seemed as surprised by the cross as everyone else and completely missed the ball with his hooked shot.</p>
                <br>
                <p><img src="{{asset('image/news/img_21.png')}}" alt="Image" class="img-fluid"></p>
                <br>
                <p>Millwall's only chance of the first half came when Paul Ifill broke down the right-hand side of the pitch and arrowed in towards the penalty area, only to have his shot blocked. They looked to have survived the first half without conceding until a minute before the interval, when Roy Keane played in Gary Neville as the right-back moved into the penalty area and Neville chipped a cross back across the box; Millwall player-manager Dennis Wise waited for the ball to arrive, but in doing so, he allowed Ronaldo to steal in and head the ball past Marshall, to give United a 1–0 lead going into the break.</p>
                <br>
                <p>Manchester United went 2–0 up 20 minutes into the second half, when Ryan Giggs went on a run down the right wing into the Millwall box only to be brought down by David Livermore. Referee Jeff Winter awarded a penalty for the foul and Ruud van Nistelrooy scored with a powerful shot into the top-corner to the goalkeeper's right. United now held a comfortable advantage and Millwall struggled to find a way back into the match. United's defence kept Neil Harris and Tim Cahill at bay, and the Red Devils eventually scored a third when Giggs went on a run down the left and crossed for Van Nistelrooy to tap in from three yards out. There were suggestions that Van Nistelrooy was offside at the moment of Giggs' pass, but television replays showed his feet were grounded in an onside position.</p>
                <br>
                <p>Millwall had a chance near the end when substitute Mark McCammon almost found a way through United's defence, while Scholes had a late effort for the Reds, before Curtis Weston (aged 17 years and 119 days) replaced Wise to become the youngest player to appear in an FA Cup final, beating the record set by James F. M. Prinsep of Clapham Rovers, when he appeared in the 1879 FA Cup Final at the age of 17 years and 245 days. The match finished 3–0 to Manchester United, their 11th success in the FA Cup.</p>
                <div class="pt-5">
                </div>


            </div>
            <div class="col-md-4 sidebar">

                <div class="sidebar-box">
                    <img style="border-radius: 10px" src="{{asset('image/news/img_22.png')}}" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-uppercase">PREMIER LEAGUE CUP</h3>
                    <p>The 2012–13 Premier League (known as the Barclays Premier League for sponsorship reasons) was the 21st season of the Premier League, the English professional league for association football clubs, since its establishment in 1992, and the 114th season of top-flight English football overall</p>
                    <br>
                    <p><a href="{{route('client.news7')}}" class="btn btn-primary text-white">Read More</a></p>
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
