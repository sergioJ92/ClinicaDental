
	@extends('layouts.barraNavegacion')

	<?php $menssage=Session::get('menssage') ?>

		@if(Session::has('message')){
			<div class="card-panel green lighten-4 green-text text-darken-4"><b>Success!</b> This alert box indicates a successful or positive action.</div>
		}
		@endif

	@section('content')	

	<h3>Usuarios registrados</h3>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Usuario</th>
				<th>Email</th>
				<th>Operacion</th>
			</tr>	
		</thead>			
			@foreach($usuarios as $usuario)
			<tbody>
				<tr>
					<th>{{$usuario->nombre}}</th>
					<th>{{$usuario->apellido}}</th>
					<th>{{$usuario->usuario}}</th>
					<th>{{$usuario->email}}</th>
					<th>
						<a href="/usuario/{{$usuario->id}}/edit">Editar</a>
						<a href="">Eliminar</a>
					</th>
				</tr>
			</tbody>
			@endforeach
	</table>
	@stop