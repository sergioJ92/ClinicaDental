
	@extends('layouts.barraAdmin')

	@section('barraAdminContent')	
	  <h1>soy el formulario de  editar usuario</h1>
	  <div class="row">
	    {!!Form::model($usuario, ['route'=> ['usuario.update',$usuario->id], 'method'=>'PUT'])!!}

	      @include('usuario.form.formulario')
	      <button type="submit"  class="waves-effect waves-light btn">Guardar</button>
	    {!!Form::close()!!}

	    {!!Form::model($usuario, ['route'=> ['usuario.destroy',$usuario->id], 'method'=>'DELETE'])!!}
	    	<button type="submit" class="waves-effect waves-light btn">Eliminar</button>
	    {!!Form::close()!!}
	    
	  </div>
	  <a href="{{'/usuario'}}" class="waves-effect waves-light btn">Cancelar</a>

	@stop
