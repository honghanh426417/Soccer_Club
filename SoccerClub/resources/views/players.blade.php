<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
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
    <link rel="stylesheet" href="{{ asset('css/players/players.css') }}">
    <link rel="stylesheet" href="css/clientcss/footer.css" type="text/css">
    <link rel="stylesheet" href="css/clientcss/navbar.css" type="text/css">
</head>

<body>
    @include('layouts.navbar')
    <div class="main-players">
        <section class=" main-players_position">
            <h2 class="title-players_position">Goalkeeper</h2>
            <div class="all-players">
                @foreach($players as $player_detail)
                @if($player_detail->position === 'Goalkeeper')
                <a href="{{ route('player-detail', ['id' => $player_detail->id]) }}" id="playerCard">
                    <img  class="playerCard-img" src="{{ $player_detail->player_image }}" alt="{{ $player_detail->player_name }}"  />
                    <div class="playerCard-info">
                        <h4 class="playerCard-number">{{ $player_detail->jersey_number }}</h4>
                        <h3 class="playerCard-name">{{ $player_detail->player_name }}</h3>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </section>
        <section class="main-players_position">
            <h2 class="title-players_position">Defender</h2>
            <div class="all-players">
                @foreach($players as $player_detail)
                @if(in_array($player_detail->position, ['Right-back', 'Left-back', 'Defender', 'Centre-back']))
                <a href="{{ route('player-detail', ['id' => $player_detail->id]) }}" id="playerCard">
                    <img  class="playerCard-img" src="{{ $player_detail->player_image }}" alt="{{ $player_detail->player_name }}"  />
                    <div class="playerCard-info">
                        <h4 class="playerCard-number">{{ $player_detail->jersey_number }}</h4>
                        <h3 class="playerCard-name">{{ $player_detail->player_name }}</h3>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </section>
        <section class="main-players_position">
            <h2 class="title-players_position">Forwards</h2>
            <div class="all-players">
                @foreach($players as $player_detail)
                @if(in_array($player_detail->position, ['Forwards']))
                <a href="{{ route('player-detail', ['id' => $player_detail->id]) }}" id="playerCard">
                    <img  class="playerCard-img" src="{{ $player_detail->player_image }}" alt="{{ $player_detail->player_name }}"  />
                    <div class="playerCard-info">
                        <h4 class="playerCard-number">{{ $player_detail->jersey_number }}</h4>
                        <h3 class="playerCard-name">{{ $player_detail->player_name }}</h3>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </section>

        <section class="main-players_position">
            <h2 class="title-players_position">Midfielders</h2>
            <div class="all-players">
                @foreach($players as $player_detail)
                @if(in_array($player_detail->position, ['Midfielder']))
                <a href="{{ route('player-detail', ['id' => $player_detail->id]) }}" id="playerCard">
                    <img  class="playerCard-img" src="{{ $player_detail->player_image }}" alt="{{ $player_detail->player_name }}"  />
                    <div class="playerCard-info">
                        <h4 class="playerCard-number">{{ $player_detail->jersey_number }}</h4>
                        <h3 class="playerCard-name">{{ $player_detail->player_name }}</h3>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </section>


</div>
    @include('layouts.footer')

</body>

</html>
