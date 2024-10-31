<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
    <link rel="stylesheet" href="css/clientcss/footer.css" type="text/css">
    <link rel="stylesheet" href="css/clientcss/navbar.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css">

</head>

<body>
    @include('layouts.navbar')

    <div class="main_about-us">
        <section class="intro_about_us">
            <div class="intro-img">
                <img id="about_us-img" src="/image/about/foudation.jpeg" alt="hii">
            </div>
            <div class="intro-content">
                <h2 class="intro-title">About Us</h2>
                <div class="intro-content_detail">
                    <p>We use football to engage and inspire young people to build a better life for themselves and unite the communities in which they live.</p>
                    <p>Dedicated staff deliver educational and community outreach programmes to help young people make positive choices in their lives.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </section>
        <section id="history">
            <h3 class="title-section">History</h2>
                <div class="history-content">
                    <p style="text-indent: 1.5em;">Founded in 1878, Manchester United stands as one of the premier football clubs with a rich and storied history. From its humble beginnings in Newton Heath to the heights of global football dominance, the journey has been nothing short of spectacular.</p>
                    <p>Over the years, Manchester United has witnessed triumphs, setbacks, and moments of pure magic. The club's legacy is woven into the fabric of football history, with iconic players, legendary managers, and unforgettable matches etching the name "Manchester United" into the hearts of millions of fans worldwide.</p>
                    <p>From the "Busby Babes" to the "Class of '92," from the historic treble-winning season in 1999 to the countless league titles, Manchester United's history is a tapestry of passion, dedication, and the relentless pursuit of excellence.</p>
                    <p>As we look back on the glorious chapters of our history, we find inspiration to continue the legacy, create new stories, and forge ahead into the future with the same spirit that has defined Manchester United for over a century.</p>
                </div>
        </section>
        <section id="work">
            <div class="mission">
                <h3 class="work-title">Our mission</h3>

                <div class="work-content">
                    <p>We use the power of football and Manchester United to help young people make positive choices in their lives.</p>
                </div>
            </div>
            <div class="vision">
                <h3 class="work-title">Our vision</h3>

                <div class="work-content">
                    <p>A future where all young people are empowered to achieve their goals</p>
                </div>
            </div>
            <div class="outcome">
                <h3 class="work-title">Outcome</h3>
                <div class="work-content">
                    <p>Improved communities.</p>
                </div>
            </div>
        </section>

        <section id="achievements">
            <h3 class="title-section">Achievements</h2>
                <ul>
                    <li><strong>Premier League Titles:</strong> 20 times (as of the latest update)</li>

                    <li><strong>FA Cup:</strong> 12 times (as of the latest update)</li>

                    <li><strong>UEFA Champions League:</strong> 3 times (as of the latest update)</li>
                </ul>
        </section>
        <section id="values">
            <h3 class="title-section">Core Values</h2>
                <ul>
                    <li><strong>Unity:</strong> Unity within the team and with the community is our key strength.</li>
                    <li><strong>Fighting Spirit:</strong> This applies not only on the pitch but in every aspect of life.</li>
                    <li><strong>Commitment to Fans:</strong> Fans are not just supporters but an integral part of the Manchester United family.</li>
                </ul>
        </section>

        <section id="future">
            <h3 class="title-section">Future</h3>
            <p>With unwavering dedication and ceaseless passion, we look towards new challenges and successes in the future...</p>

            <div class="features">
                <div class="feature-item">
                    <h4>Innovative Technology</h4>
                    <p>Embracing the latest technologies to enhance fan experience and player performance.</p>
                </div>

                <div class="feature-item">
                    <h4>Community Outreach</h4>
                    <p>Expanding our community outreach programs to make a positive impact on society.</p>
                </div>

                <div class="feature-item">
                    <h4>Youth Development</h4>
                    <p>Nurturing young talents and providing them with opportunities to thrive in football and life.</p>
                </div>
            </div>
        </section>

    </div>
    </div>
</body>
@include('layouts.footer')

</html>