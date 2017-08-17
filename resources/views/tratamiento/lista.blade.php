@extends('layouts.barraNavegacion')
@section('content')
	@foreach($tratamientos as $tratamiento)
		{{$tratamiento->nombre}}<br>
	@endforeach
@stop