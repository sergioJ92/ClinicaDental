@extends('layouts.barraAdmin')

@section('barraAdminContent')
	@if(count($errors) > 0)
		<div style="color: green">
			<b>Success!  This alert box indicates a successful or positive action.</b>
			<ul> 
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
	@endif

	<div class="row">
		<h3>Formulario para crear nuevo usuario</h3>

	    <form class="col s12" action="{{ url('usuario') }}" method="POST">
	      @include('usuario.form.formulario')
	      <button type="submit"  class="waves-effect waves-light btn">Guardar</button>
	      <a href="{{'/usuario'}}" class="waves-effect waves-light btn">Cancelar</a>
	    </form> 
  	</div>
@stop