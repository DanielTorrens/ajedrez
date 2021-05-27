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
  		<li><a href="{{ route('clubes.index') }}">Clubes</a></li>
  		<li><a href="{{ route('clubes.edit', $club->id) }}">Editar</a></li>
		<li> {{ $club->nombre_club  }} </li>
	</ul>

        <form action="{{ route('clubes.update',$club->id) }}" method="POST">
			
			<fieldset>
				<legend>
					 Editando clubes
				</legend>

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
      	</fieldset>
        </form>
    </div>

<style>
		
    fieldset{
    	border: 8px groove #ddd !important;
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