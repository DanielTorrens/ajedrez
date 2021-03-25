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
  		<li><a href="{{ route('torneos.index') }}">Torneos</a></li>
  		<li><a href="{{ route('torneos.create') }}">Crear</a></li>
	</ul>

        <form action="{{ route('torneos.store') }}" method="POST">
			
			<fieldset>
				<legend>
					Creaciรณn de torneos
				</legend>

            @csrf

        <div class="form-group">
            <label for="titulo">Nombre del torneo</label>
            <input class="form-control" type="text" name="nombre_torneo" id="nombre_torneo" placeholder="nombre_torneo" value=""> 
			</div>

        <div class="form-group">
            <label for="titulo">f_inicio</label>
            <input class="form-control" type="date" name="f_inicio" id="f_inicio" placeholder="f_inicio" value=""> 
        </div>
        <div class="form-group">
                <label for="archivo">f_final</label>
                <input class="form-control" type="date" name="f_final" id="f_final" placeholder="f_final" value="">
        </div>
              
        <input type="submit" value="&#xf1d8" class="btn btn-primary fas fa-paper-plane"/>
        <a  href="{{ route('torneos.index') }}"><input  type="onclick" value="&#xf30a" class="btn btn-outline-success float-right fas fa-long-arrow-alt-left"></a>
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