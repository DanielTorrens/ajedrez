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

@if (session('status')) {{--notification al insertar crear o eliminar arbitro--}}
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success mt-3 mb-3" href="{{ route('arbitros.create') }}">
        Crear
    </a>

    <table id="containerTable" class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre del árbitro</th>
        <th scope="col">Apellidos del árbitro</th>
        <th scope="col">Nacionalidad del árbitro</th>
        <th scope="col">Email del árbitro</th>
	    <th scope="col">Teléfono del árbitro</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($arbitros as $arbitro)
        <tr>
            <td>
                {{ $arbitro->id }}
            </td>
            <td>
                {{ $arbitro->nombre_arbitro  }}
            </td>
            <td>
                {{ $arbitro->apellidos_arbitro  }}
            </td>
            <td>
                {{ $arbitro->nacionalidad_arbitro }}
            </td>
			<td>
                {{ $arbitro->email_arbitro }}
            </td> 
			<td>
                {{ $arbitro->telefono_arbitro }}
            </td>  
            
            <td>
                
                <a href="{{ route('arbitros.edit' , $arbitro->id) }}" class="btn btn-info"> Editar </a>
                <a href="{{ route('arbitros.destroy',$arbitro->id) }}" class="btn  btn-danger eliminar">Eliminar</a>
            </td>
            
        </tr>
    @endforeach
    </tbody>
    </table>
        
</div>
