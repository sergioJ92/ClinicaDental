@extends('layouts.barraNavegacion')

@section('content')
	<div class="row">
  @if(count($errors) > 0)
    <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
  @endif
    <form class="col s12" action="{{ url('tratamiento') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}  
      <div class="row">
        <div class="input-field col s12 l10">
          <input  name="nombre" type="text" class="validate">
          <label for="nombre">Nombre Tratamiento</label>
        </div>
        <div class="input-field col s12 l10">
          <textarea name="descripcion" type="text" class="validate"></textarea>
          <label for="descripcion">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l10">
          <input name="imagen" type="file" class="validate">
          <label for="imagen">Imagen</label>
        </div>
      </div>
      <button type="submit"  class="waves-effect waves-light btn">Registrar</button>
    </form> 
  </div>
@stop