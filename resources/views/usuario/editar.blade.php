
	@extends('layouts.barraNavegacion')

	@section('content')	
	  <h1>soy el formulario de  editar usuario</h1>
	  <div class="row">
	    <form class="col s12" action="{{ route('usuario.update', $usuario->id) }}" method='POST'>
	      {{ method_field('PUT') }}
	      @include('usuario.form.formulario ')
	      
	    </form> 
	  </div>
	@stop
