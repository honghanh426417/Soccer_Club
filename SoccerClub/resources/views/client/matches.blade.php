<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer Fixture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">
    <link href="/css/matches/matches.css" rel="stylesheet">
    <link href="/css/clientcss/navbar.css" rel="stylesheet">
    <link href="/css/clientcss/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/clientcss/footer.css">
    <link rel="stylesheet" href="/css/clientcss/navbar.css">
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
@include('layouts.navbar')
<div>
    <article>
        <div class="p-5 d-flex align-items-end flex-column text-center img-fluid"
             style="height: 800px;width: 100%;background-position: center center; background-size: cover; background-image: url({{asset('/image/homepage/match/barcavsmu.png')}})"
        >
{{--        <span class="mt-auto mx-auto text-white text-center">--}}
{{--            <h1>AAAAAAAAAA</h1>--}}
{{--        </span>--}}
        </div>

        <div class="container">


            <div class="row">
                <div class="col-lg-12">

                    <div class="d-flex team-vs">
                        <span class="score">4-1</span>
                        <div class="team-1 w-50">
                            <div class="team-details w-100 text-center">
                                <img src="{{asset('image/homepage/match/manu.png')}}" alt="Image" class="img-fluid">
                                <h3>Manchester United<span>(win)</span></h3>
                                <ul class="list-unstyled">
                                    <li>Anja Landry (7)</li>
                                    <li>Eadie Salinas (12)</li>
                                    <li>Ashton Allen (10)</li>
                                    <li>Baxter Metcalfe (5)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-2 w-50">
                            <div class="team-details w-100 text-center">
                                <img src="{{asset('image/homepage/match/barca.png')}}" alt="Image" class="img-fluid">
                                <h3>Barcelona <span>(loss)</span></h3>
                                <ul class="list-unstyled">
                                    <li>Macauly Green (3)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section text-white bg-dark">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="widget-next-match">
                            <div class="widget-title">
                                <h3>Next Match</h3>
                            </div>
                            <div class="widget-body mb-3">
                                <div class="widget-vs">
                                    <div
                                        class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                            <img src="{{asset('image/homepage/match/manu.png')}}" alt="Image">
                                            <h3>Man United</h3>
                                        </div>
                                        <div>
                                            <span class="vs" style="padding-right: 5rem"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="{{asset('image/homepage/match/arsenal.png')}}" alt="Image">
                                            <h3>Arsenal</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>Premier League</h4>
                                <p class="mb-5">
                                    <span class="d-block" style="color: #808080">October 25th, 2023</span>
                                    <span class="d-block" style="color: #808080">10:00 AM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                </p>

                                <div id="date-countdown2" class="pb-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 title-section">
                        <h2 class="heading">Upcoming Match</h2>
                    </div>
                    <div class="col-lg-6 mb-4">
                        {{--                                        maybe change this later #808080--}}
                        <div class="bg-secondary p-4 rounded">
                            <div class="widget-body">
                                <div class="widget-vs">
                                    <div
                                        class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                            <img src="{{asset('/image/homepage/match/manu.png')}}" alt="Image">
                                            <h3>Football League</h3>
                                        </div>
                                        <div>
                                            <span class="vs" style="padding-right: 5rem"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="{{asset('/image/homepage/match/wolves.png')}}" alt="Image">
                                            <h3>Soccer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>Premier League</h4>
                                <p class="mb-5">
                                    <span class="d-block">October 26th, 2023</span>
                                    <span class="d-block">18:00 PM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="bg-secondary p-4 rounded">
                            <div class="widget-body">
                                <div class="widget-vs">
                                    <div
                                        class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                            <img src="{{asset('image/homepage/match/manu.png')}}" alt="Image">
                                            <h3>Football League</h3>
                                        </div>
                                        <div>
                                            <span class="vs" style="padding-right: 5rem"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="{{asset('image/homepage/match/leicester.png')}}" alt="Image">
                                            <h3>Soccer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>Premier League</h4>
                                <p class="mb-5">
                                    <span class="d-block">October 27th, 2023</span>
                                    <span class="d-block">15:00 PM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="bg-secondary p-4 rounded">
                            <div class="widget-body">
                                <div class="widget-vs">
                                    <div
                                        class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                            <img src="{{asset('image/homepage/match/manu.png')}}" alt="Image">
                                            <h3>Football League</h3>
                                        </div>
                                        <div>
                                            <span class="vs" style="padding-right: 5rem"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="{{asset('image/homepage/match/mancity.png')}}" alt="Image">
                                            <h3>Soccer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>Premier League</h4>
                                <p class="mb-5">
                                    <span class="d-block">October 29th, 2023</span>
                                    <span class="d-block">20:00 PM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="bg-secondary p-4 rounded">
                            <div class="widget-body">
                                <div class="widget-vs">
                                    <div
                                        class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                            <img src="{{asset('image/homepage/match/manu.png')}}" alt="Image">
                                            <h3>Football League</h3>
                                        </div>
                                        <div>
                                            <span class="vs" style="padding-right: 5rem"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                            <img src="{{asset('image/homepage/match/liverpool.png')}}" alt="Image">
                                            <h3>Soccer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <h4>Premier League</h4>
                                <p class="mb-5">
                                    <span class="d-block">October 1 th, 2023</span>
                                    <span class="d-block">22:00 PM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" style="background-color: #1a1a1a">
            <div class="container">
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">News</h2>
                    </div>
                </div>


                <div class="owl-4-slider owl-carousel">
                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="{{route('client.news5')}}" class="d-flex play-button align-items-center"
                               data-fancybox>
                                <div class="caption">
                                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img_2.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="{{route('client.news2')}}" class="d-flex play-button align-items-center"
                               data-fancybox>
                                <div class="caption">
                                    <h3 class="m-0">Pr</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img_12.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="{{route('client.news')}}" class="d-flex play-button align-items-center"
                               data-fancybox>
                                <div class="caption">
                                    <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img_24.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center"
                               data-fancybox>
                                <div class="caption">
                                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img_12.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center"
                               data-fancybox>
                                <div class="caption">
                                    <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="video-media">
                            <img src="{{asset('/image/matches/img.png')}}" alt="Image"
                                 class="img-fluid">
                            <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center"
                               data-fancybox style="margin-top: 5rem">
                                <div class="caption">
                                    <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </article>

    <!-- You can use latest version of jQuery  -->
    <script src="/assets/js/jquery-1.9.1.min.js"></script>
    <script src="/owl-carousel/owl.carousel.js"></script>
    <script src="/js/matches/slider.js"></script>
    <script src="/js/matches/matches.js"></script>

</div>
@include('layouts.footer')
</body>
</html>
