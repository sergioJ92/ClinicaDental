@extends('layouts.barraNavegacion')

@section('content')
	<div class="row">
    <form class="col s12" action="{{ url('tratamiento') }}" method="POST">
      {{ csrf_field() }}  
      <div class="row">
        <div class="input-field col s6">
          <input  name="nombre" type="text" class="validate">
          <label for="nombre">Nombre Tratamiento</label>
        </div>
        <div class="input-field col s6">
          <textarea name="descripcion" type="text" class="validate"></textarea>
          <label for="descripcion">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="imagen" type="text" class="validate">
          <label for="imagen">imagen</label>
        </div>
      </div>
      <button type="submit"  class="waves-effect waves-light btn">Registrar</button>
    </form> 
  </div>
@stop