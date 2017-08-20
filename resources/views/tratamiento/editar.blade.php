@extends('layouts.barraNavegacion')
@section('content')
  <div class="row">
    <form class="col s12" action="{{ route('tratamiento.update',$tratamiento->id) }}" method="POST">
      {{ csrf_field() }}  
      {{ method_field('PUT') }}
      <div class="row">
        <div class="input-field col s6">
          <input  name="nombre" type="text" class="validate" value="{{$tratamiento->nombre}}">
          <label for="nombre">Nombre Tratamiento</label>
        </div>
        <div class="input-field col s6">
          <textarea name="descripcion" type="text" class="validate">{{$tratamiento->descripcion}}</textarea>
          <label for="descripcion">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="imagen" type="text" class="validate" value="{{$tratamiento->imagen}}">
          <label for="imagen">imagen</label>
        </div>
      </div>
      <button type="submit"  class="waves-effect waves-light btn">Registrar</button>
    </form>
    <form class="col s12" action="{{ route('tratamiento.destroy',$tratamiento->id) }}" method="POST">
      {{ csrf_field() }}  
      {{ method_field('DELETE') }}
      
      <button type="submit"  class="waves-effect waves-light btn red">Eliminar</button>
    </form> 
  </div>
@stop