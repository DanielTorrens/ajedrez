@extends('components.layout')

@section('title')
	resultados
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
        			"emptyTable": "No hay informaciรณn",
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
			$('#nav-resultados').css('background-color','rgb(226, 226, 226)');
			$('#nav-resultados a').css('color','#5d4954');
});
</script>
	
@section("content")

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">


    <table id="containerTable" class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Partida</th>
	    <th scope="col">Torneo</th>
		<th scope="col">Color</th>
        <th scope="col">Resultado</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($jugadores_partidas as $jugador_partida)
        <tr>
            <td>
                {{ $jugador_partida->id }}
            </td>
            <td>
                {{ $jugador_partida->jugador->nombre_jugador }}
            </td>   
			<td>
                {{ $jugador_partida->partida->id }}
            </td> 
			<td>
                {{ $jugador_partida->partida->torneo->nombre_torneo }}
            </td> 
			<td>
                {{ $jugador_partida->color }}
            </td>
			<td>
                {{ $jugador_partida->resultado }}
            </td>  
			@csrf         
        </tr>
    @endforeach
    </tbody>
    </table>     
</div>
@endsection