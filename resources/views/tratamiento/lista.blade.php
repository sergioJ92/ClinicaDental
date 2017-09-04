@extends('layouts.barraNavegacion')
@section('content')
	<a href="{{route('tratamiento.create')}}" class="btn teal lighten-3">Crear nuevo</a><br>
	<div class="row">
	@foreach($tratamientos as $tratamiento)
		
        <div class="col s12 m12 l6">
          <div class="card">
	            <div class="card-content">
	              <span class="card-title">{{$tratamiento->nombre}}</span>
	              <p>{{$tratamiento->descripcion}}</p>
	            </div>
	            <div class="card-image">
	              <img src="{{ url('tratamientos/'.$tratamiento->imagen)}}" height="100%" width="100%">
	              
	            </div>
	            <div class="card-action">
	              <a href="{{url('tratamiento/'.$tratamiento->id)}}">Mostrar</a>
	              <a href="{{route('tratamiento.edit',$tratamiento->id)}}">Editar</a>
	            </div>
	          </div>
	    </div>
	    
	@endforeach
	</div>
	{!! $tratamientos->render() !!}
@stop