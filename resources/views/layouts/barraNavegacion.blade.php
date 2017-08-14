<!doctype html>
	<head>
		{!! MaterializeCSS::include_full() !!}

		{!!Html::style('http://yourdomain.com/materialize-css/css/materialize.min.css')!!}
		{!!Html::style('//code.jquery.com/jquery-2.1.1.min.js')!!}
		{!!Html::style('http://yourdomain.com/materialize-css/js/materialize.min.js')!!}
	</head>
	<body>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Clinica Dental</a>				
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="/">Home</a></li>
		        <li><a href="pacientes">Pacientes</a></li>
		        <li><a href="personal">Personal</a></li>
		        <li><a href="tratamientos">Tratamientos</a></li>
		      </ul>
		    </div>
	    </nav>

	    @yield('content')

	</body>