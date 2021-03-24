<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('storage').'/imagenes/logo.png'}}" style="width: 24px; height: 24px;" type="image/png">
<script src="{{ asset('js/app.js') }}"></script><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">

        <form action="{{ route('jugadores.store') }}" method="POST">

            @csrf

       <div class="form-group">
            <label for="titulo">Nombre del jugador</label>
            <input class="form-control" type="text" name="nombre_jugador" id="nombre_jugador" placeholder="nombre_jugador" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Apellidos del jugador</label>
                <input class="form-control" type="text" name="apellidos_jugador" id="apellidos_jugador" placeholder="apellidos_jugador" value="">
        </div>

        <div class="form-group">
            <label for="titulo">ELO</label>
            <input class="form-control" type="text" name="ELO" id="ELO" placeholder="ELO" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Título del jugador</label>
                <input class="form-control" type="text" name="titulo_jugador" id="titulo_jugador" placeholder="titulo_jugador" value="">
        </div>
			
		<div class="form-group">
                <label for="archivo">fecha_titulo</label>
                <input class="form-control" type="date" name="fecha_titulo" id="fecha_titulo" placeholder="fecha_titulo" value="">
        </div>

        <div class="form-group">
            <label for="titulo">Nacionalidad del jugador</label>
            <input class="form-control" type="text" name="nacionalidad_jugador" id="nacionalidad_jugador" placeholder="nacionalidad_jugador" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Email del jugador</label>
                <input class="form-control" type="text" name="email_jugador" id="email_jugador" placeholder="email_jugador" value="">
        </div>   
			
		<div class="form-group">
                <label for="archivo">Teléfono del jugador</label>
                <input class="form-control" type="text" name="telefono_jugador" id="telefono_jugador" placeholder="telefono_jugador" value="">
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
        </form>
    </div>