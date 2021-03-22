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

        <form action="{{ route('clubes.store') }}" method="POST">

            @csrf

        <div class="form-group">
            <label for="titulo">Nombre del club</label>
            <input class="form-control" type="text" name="nombre_club" id="nombre_club" placeholder="nombre_club" value=""> 
        </div>

       <div class="form-group">
            <label for="titulo">País del club</label>
            <input class="form-control" type="text" name="pais_club" id="pais_club" placeholder="pais_club" value=""> 
        </div>

        <div class="form-group">
                <label for="archivo">Email del club</label>
                <input class="form-control" type="text" name="email_club" id="email_club" placeholder="email_club"num_socios value="">
        </div>

        <div class="form-group">
            <label for="titulo">Teléfono del club</label>
            <input class="form-control" type="text" name="telefono_club" id="telefono_club" placeholder="telefono_club" value=""> 
        </div>
              
        <input type="submit" value="Enviar" class="btn btn-primary ">
        <a  href="{{ route('clubes.index') }}"><input  type="onclick" value="Volver" class="btn btn-outline-success float-right "></a>
        </form>
    </div>