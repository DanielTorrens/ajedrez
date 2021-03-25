@extends('components.layout')

@section('title')
	clubes
@endsection

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{--libreria jquery--}}
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> {{--libreria bootstrap--}}
	<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>	
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
			$('#nav-clubes').css('background-color','rgb(226, 226, 226)');
			$('#nav-clubes a').css('color','#5d4954');
});
</script>

@section("content")

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
@endsection