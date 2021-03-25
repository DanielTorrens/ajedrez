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
  		<li><a href="{{ route('jugadores.index') }}">Jugadores</a></li>
  		<li><a href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a></li>
		<li> {{ $jugador->nombre_jugador  }} </li>
	</ul>

        <form action="{{ route('jugadores.update',$jugador->id) }}" method="POST">
						
			<fieldset>
				<legend>
					Editando jugadores
				</legend>

        @csrf
	  	@method('PUT')

        <div class="form-group">
            <label for="titulo">Nombre del jugador</label>
            <input class="form-control" type="text" name="nombre_jugador" id="nombre_jugador" placeholder="nombre_jugador" value="{{ $jugador->nombre_jugador }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Apellidos del jugador</label>
                <input class="form-control" type="text" name="apellidos_jugador" id="apellidos_jugador" placeholder="apellidos_jugador" value="{{ $jugador->apellidos_jugador }}">
        </div>

        <div class="form-group">
            <label for="titulo">ELO</label>
            <input class="form-control" type="text" name="ELO" id="ELO" placeholder="ELO" value="{{ $jugador->ELO }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Título de jugador</label>
                <input class="form-control" type="text" name="titulo_jugador" id="titulo_jugador" placeholder="titulo_jugador" value="{{ $jugador->titulo_jugador }}">
        </div>
			   <div class="form-group">
                <label for="archivo">fecha_titulo</label>
                <input class="form-control" type="date" name="fecha_titulo" id="fecha_titulo" placeholder="fecha_titulo" value="{{ $jugador->fecha_titulo }}">
        </div>

        <div class="form-group">
            <label for="titulo">Nacionalidad del jugador</label>
            <input class="form-control" type="text" name="nacionalidad_jugador" id="nacionalidad_jugador" placeholder="nacionalidad_jugador" value="{{ $jugador->nacionalidad_jugador }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Email del jugador</label>
                <input class="form-control" type="text" name="email_jugador" id="email_jugador" placeholder="email_jugador" value="{{ $jugador->email_jugador }}">
        </div>
			
		<div class="form-group">
                <label for="archivo">Teléfono del jugador</label>
                <input class="form-control" type="text" name="telefono_jugador" id="telefono_jugador" placeholder="telefono_jugador" value="{{ $jugador->telefono_jugador }}">
        </div>
			
		<div class="form-group">
            <label for="archivo">Club</label>
            <select class="form-control" name="club_id" id="club_id">
					@foreach ($clubs as $name=>$id)
					<option {{ $jugador->club_id==$id ? 'selected="selected"' : ""}} value="{{$id}}">
						{{$name}}
					</option>
				    @endforeach
			</select>
        </div>  
          
        <input type="submit" value="&#xf1d8" class="btn btn-primary fas fa-paper-plane">
        <a  href="{{ route('jugadores.index') }}"><input  type="onclick" value="&#xf30a" class="btn btn-outline-success float-right fas fa-long-arrow-alt-left"></a>
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