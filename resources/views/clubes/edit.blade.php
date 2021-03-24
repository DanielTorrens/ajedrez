<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="icon" href="{{ asset('storage').'/imagenes/logo.png'}}" style="width: 24px; height: 24px;" type="image/png">
<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="https://kit.fontawesome.com/5f07a4626a.js" crossorigin="anonymous"></script>

<style>
.container-fluid {
    width: 85%;
}
</style>
<div class="container-fluid" style="width:85%">

        <form action="{{ route('clubes.update',$club->id) }}" method="POST">

        @csrf
	  	@method('PUT')

       <div class="form-group">
            <label for="titulo">Nombre del club</label>
            <input class="form-control" type="text" name="nombre_club" id="nombre_club" placeholder="nombre_club" value="{{ $club->nombre_club }}"> 
        </div>

       <div class="form-group">
            <label for="titulo">País del club</label>
            <input class="form-control" type="text" name="pais_club" id="pais_club" placeholder="pais_club" value="{{ $club->pais_club }}"> 
        </div>

        <div class="form-group">
                <label for="archivo">Email del club</label>
                <input class="form-control" type="text" name="email_club" id="email_club" placeholder="email_club"num_socios value="{{ $club->email_club}}">
        </div>

        <div class="form-group">
            <label for="titulo">Teléfono del club</label>
            <input class="form-control" type="text" name="telefono_club" id="telefono_club" placeholder="telefono_club" value="{{ $club->telefono_club }}"> 
        </div>
			
        <input type="submit" value="&#xf1d8" class="btn btn-primary fas fa-paper-plane">
        <a  href="{{ route('clubes.index') }}"><input  type="onclick" value="&#xf30a" class="btn btn-outline-success float-right fas fa-long-arrow-alt-left"></a>
        </form>
    </div>