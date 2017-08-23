@extends('layouts.barraNavegacion')

@section('content')
	<div class="row">
    <form class="col s12" action="{{ url('usuario') }}" method="POST">
      @include(usuario.form.formulario)
    </form> 
  </div>
@stop