@extends('layouts.barraNavegacion')
@section('content')
	<label>{{$tratamiento->nombre}}</label>
	<label>{{$tratamiento->descripcion}}</label>
	<label>{{$tratamiento->imagen}}</label>
	<img src="{{ url('tratamientos/'.$tratamiento->imagen)}}">
@stop