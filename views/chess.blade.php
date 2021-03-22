<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> {{--libreria bootstrap--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		 <li class="nav-item">
        <a class="nav-link" href="{{ route('chess') }}">Home</a>
      </li>		
	  <li class="nav-item">
        <a class="nav-link" href="{{ route('torneos.index') }}">Torneos</a>
      </li>		
      <li class="nav-item">
        <a class="nav-link" href="{{ route('jugadores.index') }}">Jugadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('partidas.index') }}">Partidas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clubes.index') }}">Clubes</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="{{ route('arbitros.index') }}">Árbitros</a>
      </li>
    </ul>
  </div>
</nav>

<style>
.navbar{
    width: 85%;
	margin: 0 auto;
}
</style>

<script>
 $(document).ready(function () {    
   
    var CurrentUrl = window.location.origin+window.location.pathname;
    
    $('.navbar a').each(function(Key,Value)
        {
            if(Value['href'] === CurrentUrl)
            {
                $(Value).parent().addClass('active');
            }
        });
 });
</script>



<div>
	<h1>
	<b> Hola, bienvenido a chessmate!</b>	
	</h1>
</div>