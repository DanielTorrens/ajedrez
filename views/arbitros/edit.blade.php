<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('storage').'/imagenes/logo.png'}}" style="width: 24px; height: 24px;" type="image/png">
<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">

        <form action="{{ route('arbitros.update',$arbitro->id) }}" method="POST">

        @csrf
	  	@method('PUT')

        <div class="form-group">
            <label for="titulo">Nombre del árbitro</label>
            <input class="form-control" type="text" name="nombre_arbitro" id="nombre_arbitro" placeholder="nombre_arbitro" value="{{ $arbitro->nombre_arbitro }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Apellidos del árbitro</label>
                <input class="form-control" type="text" name="apellidos_arbitro" id="apellidos_arbitro" placeholder="apellidos_arbitro" value="{{ $arbitro->apellidos_arbitro }}">
        </div>

        <div class="form-group">
            <label for="titulo">Nacionalidad del árbitro</label>
            <input class="form-control" type="text" name="nacionalidad_arbitro" id="nacionalidad_arbitro" placeholder="nacionalidad_arbitro" value="{{ $arbitro->nacionalidad_arbitro }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Email del árbitro</label>
                <input class="form-control" type="text" name="email_arbitro" id="email_arbitro" placeholder="email_arbitro" value="{{ $arbitro->email_arbitro }}">
        </div>
			
		<div class="form-group">
                <label for="archivo">Teléfono del árbitro</label>
                <input class="form-control" type="text" name="telefono_arbitro" id="telefono_arbitro" placeholder="telefono_arbitro" value="{{ $arbitro->telefono_arbitro }}">
        </div>
       
        <input type="submit" value="Enviar" class="btn btn-primary ">
        <a  href="{{ route('arbitros.index') }}"><input  type="onclick" value="Volver" class="btn btn-outline-success float-right "></a>
        </form>
    </div>