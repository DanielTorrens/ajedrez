<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('storage').'/imagenes/logo.png'}}" style="width: 24px; height: 24px;" type="image/png">
<script src="{{ asset('js/app.js') }}"></script><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">

        <form action="{{ route('partidas.store') }}" method="POST">

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
              
        <input type="submit" value="Enviar" class="btn btn-primary ">
        <a  href="{{ route('partidas.index') }}"><input  type="onclick" value="Volver" class="btn btn-outline-success float-right "></a>
        </form>
    </div>





















