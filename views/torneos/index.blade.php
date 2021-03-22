<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> {{--libreria datatable--}}
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> {{--libreria datatable--}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> {{--libreria bootstrap--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> {{--libreria sweetalert (alerta de borrado)--}}

<script> {{--pone a funcionar el datatable--}}

$(document).ready( function () {
    $('#containerTable').DataTable();
} );
</script>

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

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">

@if (session('status')) {{--notification al insertar crear o eliminar torneo--}}
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success mt-3 mb-3" href="{{ route('torneos.create') }}">
        Crear
    </a>

    <table id="containerTable" class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre del torneo</th>
        <th scope="col">Año del torneo</th>
        <th scope="col">f_inico</th>
        <th scope="col">f_final</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($torneos as $torneo)
        <tr>
            <td>
                {{ $torneo->id }}
            </td>
            <td>
                {{ $torneo->nombre_torneo  }}
            </td>
            <td>
                {{ $torneo->year }} 
            </td>
            <td>
                {{ Carbon\Carbon::parse($torneo->f_inicio)->format("d-m-Y")  }}
            </td>   
			<td>
                {{ Carbon\Carbon::parse($torneo->f_final)->format("d-m-Y")  }}
            </td>  
            
            <td>
                
                <a href="{{ route('torneos.edit' , $torneo->id) }}" class="btn btn-info"> Editar </a>
                <a href="{{ route('torneos.destroy',$torneo->id) }}" class="btn  btn-danger eliminar">Eliminar</a>
            </td>
            
        </tr>
    @endforeach
    </tbody>
    </table>
        
</div>
