		  {{ csrf_field() }}  
	      {{ method_field('PUT') }}
	      <div class="row">
	        <div class="input-field col s6">
	          <input name="nombre" id="nombre" type="text" class="validate" value="{{$usuario -> nombre}}">
	          <label for="nombre">Nombre</label>
	        </div>
	        <div class="input-field col s6">
	          <input name="apellido" id="apellido" type="text" class="validate" value="{{$usuario->apellido}}">
	          <label for="apellido">Apellido</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input name ="usuario" id="usuario" type="text" class="validate" value="{{$usuario->usuario}}">
	          <label for="usuario">Usuario</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input name="password" id="password" type="password" class="validate" value="{{$usuario->password}}">
	          <label for="password">Contraseña</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="password" class="validate" value="{{$usuario->password}}">
	          <label for="password">Repetir Contraseña</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input name="email" id="email" type="email" class="validate" value="{{$usuario->email}}">
	          <label for="email">Email</label>
	        </div>
	      </div>
	      <button type="submit"  class="waves-effect waves-light btn">Registrar</button>