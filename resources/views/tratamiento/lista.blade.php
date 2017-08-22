@extends('layouts.barraNavegacion')
@section('content')
	<a href="{{route('tratamiento.create')}}" class="btn">Crear nuevo</a><br>
	@foreach($tratamientos as $tratamiento)
		{{$tratamiento->nombre}}
		<a href="{{url('tratamiento/'.$tratamiento->id)}}">mostrar</a>
		<a href="{{route('tratamiento.edit',$tratamiento->id)}}">editar</a>
		<br>
	@endforeach
	{!! $tratamientos->render() !!}
@stop