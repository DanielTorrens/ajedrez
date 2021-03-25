<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">
	
		<ul class="breadcrumb">
  		<li><a href="{{ route('partidas.index') }}">Partidas</a></li>
  		<li><a href="{{ route('partidas.create') }}">Crear</a></li>
	</ul>

        <form action="{{ route('partidas.store') }}" method="POST">
			
			<fieldset>
				<legend>
					Creación de jugadores
				</legend>

            @csrf

  <div class="form-group">
            <label for="titulo">Hora de inicio</label>
            <input class="form-control" type="time" name="hora_inicio" id="hora_inicio" placeholder="hora_inicio" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Hora final</label>
                <input class="form-control" type="time" name="hora_final" id="hora_final" placeholder="hora_final" value="">
        </div>

        <div class="form-group">
            <label for="titulo">Fecha de la partida</label>
            <input class="form-control" type="date" name="fecha_partida" id="fecha_partida" placeholder="fecha_partida" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Estado de la partida</label>
                <input class="form-control" type="text" name="estado_partida" id="estado_partida" placeholder="estado_partida" value="">
		</div>
			
		<div class="form-group">
            <label for="archivo">Nombre del torneo</label>
            <select class="form-control" name="torneo_id" id="torneo_id">
					@foreach ($torneos as $name=>$id)
					<option {{ $partida->torneo_id==$id ? 'selected="selected"' : ""}} value="{{$id}}">
						{{$name}}
					</option>
				    @endforeach
			</select>
        </div>
			
		<div class="form-group">
            <label for="archivo">Nombre del รกrbitro</label>
            <select class="form-control" name="arbitro_id" id="arbitro_id">
					@foreach ($arbitros as $name=>$id)
					<option {{ $partida->arbitro_id==$id ? 'selected="selected"' : ""}} value="{{$id}}">
						{{$name}}
					</option>
				    @endforeach
			</select>
        </div>  
              
         <input type="submit" value="&#xf1d8" class="btn btn-primary fas fa-paper-plane">
        <a  href="{{ route('partidas.index') }}"><input  type="onclick" value="&#xf30a" class="btn btn-outline-success float-right fas fa-long-arrow-alt-left"></a>
         </fieldset>
        </form>	
    </div>

<style>
		
    fieldset{
    	border: 1px groove #ddd !important;
    	padding: 0 1.4em 1.4em 1.4em !important;
    	margin: 0 0 1.5em 0 !important;
    	-webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend{
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
	
		ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
	ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
	ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
	ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
	ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
	
	
</style>