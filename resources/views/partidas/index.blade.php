<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> {{--libreria datatable--}}
<cdn.datatables.net/plug-ins/1.10.15/integration/font-awesome/dataTables.fontAwesome.css>
	
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> {{--libreria datatable--}}
<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> {{--libreria bootstrap--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> {{--libreria sweetalert (alerta de borrado)--}}

<script> {{--pone a funcionar el datatable--}}

$(document).ready( function () {
    $('#containerTable').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "<i class='fas fa-search'></i>",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "<i class='fas fa-arrow-right'></i>",
            "previous": "<i class='fas fa-arrow-left'></i>"
        }},
    
    "responsive": true,
});	
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

@if (session('status')) {{--notification al insertar crear o eliminar jugador--}}
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success mt-3 mb-3" href="{{ route('partidas.create') }}">
         <i class="far fa-plus-square"></i>
    </a>

    <table id="containerTable" class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">hora_inicio</th>
        <th scope="col">hora_final</th>
		<th scope="col">Fecha partida</th>
        <th scope="col">Estado de la partida</th>
		<th scope="col">Nombre del torneo</th>
        <th scope="col">Nombre del árbitro</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($partidas as $partida)
        <tr>
            <td>
                {{ $partida->id }}
            </td>
            <td>
                {{ $partida->hora_inicio }}
            </td>   
			<td>
                {{ $partida->hora_final }}
            </td>  
			<td>
                {{ Carbon\Carbon::parse($partida->fecha_partida)->format("d-m-Y")  }}
            </td>
			<td>
                {{ $partida->estado_partida }}
            </td>
			<td>
                {{ $partida->torneo->nombre_torneo }}
            </td>  
			<td>
                {{ $partida->arbitro->nombre_arbitro }}
            </td>              
            <td>                
                <a href="{{ route('partidas.edit' , $partida->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                	<form class="formDelete" action="{{ route('partidas.destroy', $partida->id) }}"
                    data-action="{{ route('partidas.destroy',  $partida->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>            
        </tr>
    @endforeach
    </tbody>
    </table>     
</div>

