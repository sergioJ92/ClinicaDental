<!doctype html>
	<head>
		{!! MaterializeCSS::include_full() !!}
        <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <script type="text/javascript">
        	$(document).ready(function(){
        		$(".button-collapse").sideNav();
        		$(".dropdown-button").dropdown();
        	});
        	
        </script>
	</head>
	<body>
		<nav class="nav-extended">
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Clinica Dental</a>
		      
		    </div>
	    	<div class="nav-wrapper">
	    	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li><a href="/">Home</a></li>
		        <li><a href="pacientes">Pacientes</a></li>
		        <li><a href="personal">Personal</a></li>
		        <li><a href="tratamientos">Tratamientos</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="/">Home</a></li>
		        <li><a href="pacientes">Pacientes</a></li>
		        <li><a href="personal">Personal</a></li>
		        <li><a href="tratamientos">Tratamientos</a></li>
		      </ul>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="personal">Iniciar sesion</a></li>
		        <li><a href="tratamientos">Registrar usuario</a></li>
		      </ul>
		    </div>

	    </nav>
	    @yield('content')

	</body>