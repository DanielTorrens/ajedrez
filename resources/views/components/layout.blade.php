<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Daniel Torrens Gonzรกlez" />
    <meta name="description" content="Final proyect. Making a chess application" />
    <title>@yield('title')</title>
	@stack('styles')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">	
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>
	
</head>

<body>
    <nav>
		<div id="logo">
			
		</div>
        <div class="logo">
            <h4>Bienvenidos a ChessMate</h4>
        </div>
        <ul class="nav-links">
			<li><a href="{{ route('chess') }}">Inicio <i class="fas fa-home"></i></a></li>
			<li><a href="{{ route('jugadores.index') }}">Jugadores <i class="fas fa-users"></i></a></li>
            <li><a href="{{ route('partidas.index') }}">Partidas <i class="fas fa-chess"></i></a></li>
			<li><a href="{{ route('torneos.index') }}">Torneos <i class="fas fa-trophy"></i></a></li>
            <li><a href="{{ route('clubes.index') }}">Clubes <i class="fas fa-chess-queen"></i></a></li>
            <li><a href="{{ route('arbitros.index') }}">Árbitros <i class="fas fa-gavel"></i></a></li>
        </ul>
    </nav>
	
	@yield("content")
	
	
	@stack('scripts')	
</body>
</html>