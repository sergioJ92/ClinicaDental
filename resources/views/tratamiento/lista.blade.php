@extends('layouts.barraNavegacion')
@section('content')
	@foreach($tratamientos as $tratamiento)
		{{$tratamiento->nombre}}
		<a href="{{url('tratamiento/'.$tratamiento->id)}}">mostrar</a>
		<a href="{{route('tratamiento.edit',$tratamiento->id)}}">editar</a>
		<br>
	@endforeach
@stop