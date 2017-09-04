
	@extends('layouts.barraAdmin')

		@if(Session::has('mensaje')){
			<div style="color: green">
				<b>Success!  This alert box indicates a successful or positive action.</b> 
				{{Session::get('mensaje')}}
			</div>
		}
		@endif

	@section('barraAdminContent')	
	<p>Tabla de usuarios creados de la institucion</p>
	<a href="{{ url('usuario/create') }}" class="waves-effect warves-light btn" method="GET">Crear usuario</a>
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
					</th>
				</tr>
			</tbody>
			@endforeach
	</table>
	@stop