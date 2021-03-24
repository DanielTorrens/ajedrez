@extends('components.layout')

@section('title')
	árbitros
@endsection
	
@section("content")

@push('styles')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> {{--libreria datatable--}} 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> {{--libreria bootstrap--}}
@endpush


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
         <i class="far fa-plus-square"></i>
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
                <a href="{{ route('arbitros.edit' , $arbitro->id) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                <form class="formDelete" action="{{ route('arbitros.destroy', $arbitro->id) }}"
                    data-action="{{ route('arbitros.destroy',  $arbitro->id) }}" method="POST">
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
@endsection

@push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> {{--libreria datatable--}}
  <script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>
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
});
</script>
@endpush