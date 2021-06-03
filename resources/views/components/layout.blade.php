<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Daniel Torrens Gonzรกlez" />
    <meta name="description" content="Final proyect. Making a chess application" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="{{ secure_asset('css/styles_2.css') }}">	
	<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>	
	<link rel="shortcut icon" type="image/x-icon" href="" />
	
</head>

<body>
    <nav>
		<div id="logo">
			
		</div>
        <div class="logo">
            <h4>Bienvenidos a ChessMate</h4>
        </div>
        <ul class="nav-links">
			<li id="nav-inicio"><a href="{{ route('chess') }}">Inicio <i class="fas fa-home"></i></a></li>
			<li id="nav-jugadores"><a href="{{ route('jugadores.index') }}">Jugadores <i class="fas fa-users"></i></a></li>
            <li id="nav-partidas"><a href="{{ route('partidas.index') }}">Partidas <i class="fas fa-chess"></i></a></li>
			<li id="nav-torneos"><a href="{{ route('torneos.index') }}">Torneos <i class="fas fa-trophy"></i></a></li>
            <li id="nav-clubes"><a href="{{ route('clubes.index') }}">Clubes <i class="fas fa-chess-queen"></i></a></li>
            <li id="nav-arbitros"><a href="{{ route('arbitros.index') }}">Árbitros <i class="fas fa-gavel"></i></a></li>
			<li id="nav-resultados"><a href="{{ route('jugador_partida.index') }}">Resultados</a></li>
			<li class=""><a href="{{ route('logout') }}">Log Out</a></li>
        </ul>
	  <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
	
	@yield("content")
	
	<script>
		const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");
  //toggle nav
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    //animate links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.3
        }s`;
      }
    });
    //burger animation
    burger.classList.toggle("toggle");
  });
};

navSlide();
	</script>
</body>
</html>