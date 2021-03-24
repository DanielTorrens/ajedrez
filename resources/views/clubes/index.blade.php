<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> {{--libreria datatable--}}
  
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

@if (session('status')) {{--notification al insertar crear o eliminar torneo--}}
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success mt-3 mb-3" href="{{ route('clubes.create') }}">
        <i class="far fa-plus-square"></i>
    </a>

    <table id="containerTable" class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre del club</th>
        <th scope="col">País de origen del club</th>
        <th scope="col">Email del club</th>
		<th scope="col">Teléfono del club</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($clubes as $club)
        <tr>
            <td>
                {{ $club->id }}
            </td>
            <td>

                {{ $club->nombre_club  }}
            </td>
            <td>
                {{ $club->pais_club }}
            </td>
            <td>
                {{ $club->email_club }}
            </td>
			  <td>
                {{ $club->telefono_club }}
            </td>
            
            <td>                
                <a href="{{ route('clubes.edit' , $club->id) }}" class="btn btn-info"> <i class="far fa-edit"></i> </a>
               <form class="formDelete" action="{{ route('clubes.destroy', $club->id) }}"
                    data-action="{{ route('clubes.destroy',  $club->id) }}" method="POST">
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
