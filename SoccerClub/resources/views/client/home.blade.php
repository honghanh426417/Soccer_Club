<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Specer Template">
    <meta name="keywords" content="Specer, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soccer</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/homepage/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/homepage/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/homepage/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/homepage/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/homepage/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/homepage/style.css" type="text/css">
    <link rel="stylesheet" href="css/clientcss/navbar.css" type="text/css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/clientcss/footer.css" type="text/css">
    <link rel="stylesheet" href="css/clientcss/navbar.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
    </style>
</head>
@include('layouts.navbar')
<body>
<section class="hero-section set-bg" data-setbg="image/homepage/hero/hero-1.jpg"
         style="background-image: url("{{asset('/image/homepage/hero/hero-1.jpg')}}")">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="hs-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h4>10 October 2023 / 9:00 GMT+0000</h4>
                                <h2>Man United VS Barcelona</h2>
                                <a href="{{route('client.matches')}}" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="trending-news-section">
    <div class="container">
        <div class="tn-title"><i class="fa fa-caret-right"></i> Trending News</div>
        <div class="news-slider owl-carousel owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                     style="transform: translate3d(-3510px, 0px, 0px); transition: all 0s ease 0s; width: 7020px;">
                    <div class="owl-item cloned" style="width: 1170px;">
                        <div class="nt-item">News Title 1</div>
                    </div>
                    <div class="owl-item cloned" style="width: 1170px;">
                        <div class="nt-item">News Title 2</div>
                    </div>
                    <div class="owl-item" style="width: 1170px;">
                        <div class="nt-item">News Title 3</div>
                    </div>
                    <div class="owl-item animated owl-animated-in fadeIn active" style="width: 1170px;">
                        <div class="nt-item">News Title 4</div>
                    </div>
                    <div class="owl-item cloned" style="width: 1170px;">
                        <div class="nt-item">News Title 5</div>
                    </div>
                    <div class="owl-item cloned" style="width: 1170px;">
                        <div class="nt-item">News Title 6</div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button type="button" role="presentation" class="owl-next">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>
<section class="match-section set-bg" data-setbg="image/homepage/match/match-bg.jpg"
         style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ms-content">
                    <h4>Next Match</h4>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6>Man United</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Man United vs Brighton</div>
                                    <h4>VS</h4>
                                    <div class="mc-op">15 October 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/brighton.png" alt="">
                                    <h6>Brighton</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/leicester.png" alt="">
                                    <h6>Leicester City</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Leicester vs Man United</div>
                                    <h4>VS</h4>
                                    <div class="mc-op">23 October 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6>Man United</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6>Man United</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Man United vs Man City</div>
                                    <h4>VS</h4>
                                    <div class="mc-op">1 November 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/mancity.png" alt="">
                                    <h6>Man City</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ms-content">
                    <h4>Recent Results</h4>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/chelsea.png" alt="">
                                    <h6>Chelsea</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Chelsea vs Man United</div>
                                    <h4>1 : 2</h4>
                                    <div class="mc-op">3 October 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6>Man United</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6>Man United</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Man United vs Wolves</div>
                                    <h4>3 : 0</h4>
                                    <div class="mc-op">22 September 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/wolves.png" alt="">
                                    <h6>Wolves</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mc-table">
                        <table>
                            <tbody>
                            <tr>
                                <td class="left-team">
                                    <img src="image/homepage/match/liverpool.png" alt="">
                                    <h6>Liverpool</h6>
                                </td>
                                <td class="mt-content">
                                    <div class="mc-op">Liverpool vs Man United</div>
                                    <h4>7 : 1</h4>
                                    <div class="mc-op">17 September 2023</div>
                                </td>
                                <td class="right-team">
                                    <img src="image/homepage/match/manu.png" alt="">
                                    <h6 class="mi-right">Man United</h6>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="soccer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title">
                    <h3>Soccer <span>Feed</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="image/homepage/soccer/soccer-1.jpg"
                     style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                    <div class="si-tag">Soccer</div>
                    <div class="si-text">
                        <h5><a href="#">Counting Your Chicken Before They Hatch</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="image/homepage/soccer/soccer-2.jpg"
                     style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                    <div class="si-tag">Soccer</div>
                    <div class="si-text">
                        <h5><a href="#">Hypnotherapy For Motivation Getting The Drive Back</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="image/homepage/soccer/soccer-3.jpg"
                     style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                    <div class="si-tag">Soccer</div>
                    <div class="si-text">
                        <h5><a href="#">Astronomy Binoculars A Great Alternative</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="soccer-item set-bg" data-setbg="image/homepage/soccer/soccer-4.jpg"
                     style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                    <div class="si-tag">Soccer</div>
                    <div class="si-text">
                        <h5><a href="#">Decorate For Less With Art Posters</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                            <li><i class="fa fa-edit"></i> 3 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title latest-title">
                    <h3>Latest <span>News</span></h3>
                    <ul>
                        <li>Premier League</li>
                        <li>Champion League</li>
                        <li>FA Cup</li>
                        <li>Carabao Cup</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-item left-news">
                            <div class="ni-pic set-bg" data-setbg="image/news/img_13.png"
                                 style="background-image: url({{asset('/image/news/img.png')}});">
                                <div class="ni-tag">Soccer</div>
                            </div>
                            <div class="ni-text">
                                <h4><a href="{{route('client.news6')}}">UEFA EUROPA LEAGUE CUP</a></h4>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                                <p>It’s that time again when people start thinking about their New Years
                                    Resolutions. Usually they involve, losing weight, quitting smoking, and joining
                                    a gym, just to mention a few.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/news/img_8.png" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="{{route('client.news8')}}">How To Quit Smoking Using Zyban</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/news/img_10.png" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="{{route('client.news4')}}">Decorate For Less With Art Posters</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/news/img_15.png" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="{{route('client.news5')}}">Home Business Advertising Ideas</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/news/img_23.png" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="{{route('client.news2')}}">Lasik Doesn T Stop Your Eyes From Aging</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h3>Club <span>Ranking</span></h3>
                </div>
                <div class="points-table">
                    <table>
                        <thead>
                        <tr>
                            <th class="th-o">Pos</th>
                            <th>Team</th>
                            <th class="th-o">P</th>
                            <th class="th-o">W</th>
                            <th class="th-o">L</th>
                            <th class="th-o">PTS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="team-name">
                                <img src="image/homepage/match/tottenham.png" alt="">
                                <span>Tottenham</span>
                            </td>
                            <td>8</td>
                            <td>6</td>
                            <td>0</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="team-name">
                                <img src="image/homepage/match/arsenal.png" alt="">
                                <span>Arsenal</span>
                            </td>
                            <td>8</td>
                            <td>6</td>
                            <td>0</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="team-name">
                                <img src="image/homepage/match/mancity.png" alt="">
                                <span>Man City</span>
                            </td>
                            <td>8</td>
                            <td>6</td>
                            <td>2</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="team-name">
                                <img src="image/homepage/match/liverpool.png" alt="">
                                <span>Liverpool</span>
                            </td>
                            <td>8</td>
                            <td>5</td>
                            <td>1</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="team-name">
                                <img src="image/homepage/match/manu.png" alt="">
                                <span>Man United</span>
                            </td>
                            <td>17</td>
                            <td>5</td>
                            <td>2</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="team-name">
                                <img src="image/homepage/match/brighton.png" alt="">
                                <span>Brighton</span>
                            </td>
                            <td>8</td>
                            <td>5</td>
                            <td>2</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="team-name">
                                <img src="image/homepage/match/leicester.png" alt="">
                                <span>Leicester City</span>
                            </td>
                            <td>8</td>
                            <td>4</td>
                            <td>2</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="team-name">
                                <img src="image/homepage/match/wolves.png" alt="">
                                <span>Wolverhampton</span>
                            </td>
                            <td>8</td>
                            <td>2</td>
                            <td>4</td>
                            <td>8</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="#" class="p-all">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h3>Popular <span>Post</span></h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-item popular-item set-bg" data-setbg="image/homepage/news/popular-b.jpg"
                             style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                            <div class="ni-tag tenis">Premier League</div>
                            <div class="ni-text">
                                <h5><a href="#">England reach World Cup last 16 with hard-fought win over
                                        Argentina</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-1.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">There’s a great history of the winner Sandia</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-2.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">It’ll be a tough game and a physical game</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-3.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">If we don’t score we can’t get frustrated</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-item popular-item set-bg" data-setbg="image/homepage/news/popular-b.jpg"
                             style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                            <div class="ni-tag football">Champion League</div>
                            <div class="ni-text">
                                <h5><a href="#">We are playing history and Argentina at the World Cup, says Phil
                                        Neville</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-5.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">Le Havre does have a growing fan club</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-6.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">It will be hard to break them down</a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="ni-pic">
                                <img src="image/homepage/news/ln-7.jpg" alt="">
                            </div>
                            <div class="ni-text">
                                <h5><a href="#">We’ve never seen them as organised </a></h5>
                                <ul>
                                    <li><i class="fa fa-calendar"></i> May 19, 2019</li>
                                    <li><i class="fa fa-edit"></i> 3 Comment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h3>Follow <span>Us</span></h3>
                </div>
                <div class="follow-links">
                    <ul>
                        <li class="facebook">
                            <i class="fa fa-facebook"></i>
                            <div class="fl-name">Facebook</div>
                            <span class="fl-fan">2.530 Fans</span>
                        </li>
                        <li class="twitter">
                            <i class="fa fa-twitter"></i>
                            <div class="fl-name">Twitter</div>
                            <span class="fl-fan">2.046 Fans</span>
                        </li>
                        <li class="google">
                            <i class="fa fa-google"></i>
                            <div class="fl-name">Google</div>
                            <span class="fl-fan">1.170 Fans</span>
                        </li>
                    </ul>
                </div>
                <div class="vote-option set-bg" data-setbg="image/news/vote-bg.jpg"
                     style="background-image: url({{asset('/image/homepage/hero/hero-1.jpg')}});">
                    <div class="vo-text">
                        <h5>In your opinion, which team will win this year</h5>
                        <div class="vt-item">
                            <input type="radio" name="like-team" id="one">
                            <label for="one">Man City</label>
                        </div>
                        <div class="vt-item">
                            <input type="radio" name="like-team" id="two">
                            <label for="two">Liverpool</label>
                        </div>
                        <div class="vt-item">
                            <input type="radio" name="like-team" id="three">
                            <label for="three">Arsenal</label>
                        </div>
                        <div class="vt-item">
                            <input type="radio" name="like-team" id="four">
                            <label for="four">Man United</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="js/homepage/jquery-3.3.1.min.js"></script>
<script src="js/homepage/bootstrap.min.js"></script>
<script src="js/homepage/jquery.magnific-popup.min.js"></script>
<script src="js/homepage/owl.carousel.min.js"></script>
<script src="js/homepage/main.js"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<!-- <script>
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
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;812d417bff036e69&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script> -->
@include('layouts.footer')
</body>

