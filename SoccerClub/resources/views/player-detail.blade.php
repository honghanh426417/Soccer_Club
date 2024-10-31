<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Detail</title>
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
    <link rel="stylesheet" href="{{ asset('css/players/player-detail.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/clientcss/footer.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('css/clientcss/navbar.css') }}" type="text/css">

</head>
<body>
    @include('layouts.navbar')
    <div class="main_player-detail">
        <div class="player-detail_top">
            <div class="player-detail_card-img">
                <img id="player-detail_img" src="{{ $player_detail->player_image }}" alt="player-image">
            </div>
            <div class="content_player-detail">
                <div id="player-profile">
                    <h2 class="player-profile_title">Profile</h2>
                    <div class="player-profile_detail">
                        <div id="player-info">
                            <h3 class="player-info_title-number">Jersey Number :</h3>
                            <p class="player-info_number">{{ $player_detail->jersey_number }}</p>

                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Name :</h3>
                            <p class="player-info_number">{{ $player_detail->player_name }}</p>
                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Date Of Birth :</h3>
                            <p class="player-info_number">{{ $player_detail->date_of_birth }}</p>
                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Nationality :</h3>
                            <p class="player-info_number">{{ $player_detail->nationality }}</p>
                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Height :</h3>
                            <p class="player-info_number">{{ $player_detail->height }}</p>
                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Weight :</h3>
                            <p class="player-info_number">{{ $player_detail->weight }}</p>
                        </div>
                        <div id="player-info">
                            <h3 class="player-info_title-number">Position :</h3>
                            <p class="player-info_number">{{ $player_detail->position }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="player-section_title">
            <h2 >Achievement</h2>
            <div class="player-section_title-content">
                {{ $player_detail->player_title}}
            </div>
        </div>
        <div class="player-section_bio">
            <h2>Biography</h2>
            <div class="player-section_bio-content">
                {{ $player_detail->biography}}
            </div>
        </div>
        
        <a class="link-players" href="{{ route('players.index') }}">See all player</a>
        

    </div>
    @include('layouts.footer')
</body>

</html>