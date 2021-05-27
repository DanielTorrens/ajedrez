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
					Creando partidas
				</legend>

            @csrf

  <div class="form-group">
            <label class="custom-field one">
            <input class="form-control" type="time" name="hora_inicio" id="hora_inicio" required> 
				<span  class="placeholder">Hora de inicio</span>
	  </label>
        </div>

        <div class="form-group">
                <label class="custom-field one">
                <input class="form-control" type="time" name="hora_final" id="hora_final" required>
					<span  class="placeholder">Hora final</span>
	  </label>
        </div>

        <div class="form-group">
             <label class="custom-field one">
            <input class="form-control" type="date" name="fecha_partida" id="fecha_partida" required> 
			<span  class="placeholder">Fecha de la partida</span>
	  </label>
        </div>

        <div class="form-group">
                 <label class="custom-field one">
                <input class="form-control" type="text" name="estado_partida" id="estado_partida" required>
			<span  class="placeholder">Estado de la partida</span>
	  </label>
		</div>
			
		<div class="form-group">
             <label class="custom-field one">	 Nombre del torneo
	  </label>
            <select class="form-control" name="torneo_id" id="torneo_id" required>
				<option></option>
					@foreach ($torneos as $name=>$id)
					<option {{ $partida->torneo_id==$id ? 'selected="selected"' : ""}} value="{{$id}}">
						{{$name}}
					</option>
				    @endforeach
			</select>
			
        </div>
			
		<div class="form-group">
              <label class="custom-field one">	  	Nombre del árbitro
	  </label>
            <select class="form-control" name="arbitro_id" id="arbitro_id" required>
				<option></option>
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
	
	body {
  width: 100vw;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-size: 16px;
}

*, *::before, *::after {
  box-sizing: border-box;
}

.custom-field {
  position: relative;
  font-size: 14px;
  padding-top: 20px;
  margin-bottom: 5px;
}

.custom-field input {
  border: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: #f2f2f2;
  padding: 12px;
  border-radius: 3px;
  width: 250px;
  outline: none;
  font-size: 14px;
}

.custom-field .placeholder {
  position: absolute;
  left: 12px;
  top: calc(50% + 10px);
  transform: translateY(-50%);
  color: #aaa;
  transition: 
    top 0.3s ease,
    color 0.3s ease,
    font-size 0.3s ease;
}

.custom-field input.dirty + .placeholder,
.custom-field input:valid + .placeholder,
.custom-field input:focus + .placeholder {
  top: 10px;
  font-size: 10px;
  color: #222;
}
	
	.custom-field.one input {
  background: none;
  border: 2px solid #ddd;
  transition: border-color 0.3s ease;
}

.custom-field.one input + .placeholder {
  left: 8px;
  padding: 0 5px;
}

.custom-field.one input.dirty,
.custom-field.one input:valid,
.custom-field.one input:focus {
  border-color: #222;
  transition-delay: 0.1s
}

.custom-field.one input.dirty + .placeholder,
.custom-field.one input:valid + .placeholder,
.custom-field.one input:focus + .placeholder {
  top: 20px;
  font-size: 10px;
  color: #222;
  background: #fff;
}
	#hora_inicio, #hora_final, #fecha_partida {
		 color: transparent;
	}
	
	#hora_inicio:valid, #hora_final:valid, #fecha_partida:valid {
		 color: black;
	}
</style>