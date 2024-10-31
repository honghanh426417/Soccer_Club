<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/clientcss/navbar.css">
    <script type="module" src=" https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js "></script>
    <script nomodule src=" https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js "></script>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css " integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<script>
    let prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            document.getElementById("header").classList.remove("hide-header");
            document.getElementById("nav").classList.remove("hide-nav");
        } else {
            document.getElementById("header").classList.add("hide-header");
            document.getElementById("nav").classList.add("hide-nav");
        }

        prevScrollPos = currentScrollPos;
    };
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

    let input = document.querySelector(".input");
    let btn = document.querySelector(".btn");
    let parent = document.querySelector(".parent");

    btn.addEventListener("click", () => {
        parent.classList.toggle("active");
        input.focus();
    });

    let searchBtn = document.querySelector('.searchBtn');
    let closeBtn = document.querySelector('.closeBtn');
    let searchBox = document.querySelector('.searchBox');
    let navigation = document.querySelector('.navigation')
    let menuToggle = document.querySelector('.menuToggle');
    let headers = document.querySelector('header');

    searchBtn.onclick = function () {
        searchBox.classList.add('active');
        closeBtn.classList.add('active');
        searchBtn.classList.add('active');
        menuToggle.classList.add('hide');
        headers.classList.remove('open');
    }

    closeBtn.onclick = function () {
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
        menuToggle.classList.remove('hide');

    }

    menuToggle.onclick = function () {
        headers.classList.toggle('open');
        searchBox.classList.remove('active');
        closeBtn.classList.remove('active');
        searchBtn.classList.remove('active');
    }
</script>
<script defer=""
        src=" https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854 "
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;812d417bff036e69&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>


</body>

</html>
