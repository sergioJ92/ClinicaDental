<!doctype html>
	<head>
		{!! MaterializeCSS::include_full() !!}
		{!!Html::style('http://yourdomain.com/materialize-css/css/materialize.min.css')!!}
		{!!Html::style('//code.jquery.com/jquery-2.1.1.min.js')!!}
		{!!Html::style('http://yourdomain.com/materialize-css/js/materialize.min.js')!!}
		{!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
        
        <script type="text/javascript">
        	$(document).ready(function(){
        		$(".button-collapse").sideNav();
        		$(".dropdown-button").dropdown();
        	});
        	
        </script>
	</head>
	<body>
	  <header>
		<div class="navbar-fixed">
		<nav class="nav-extended light-blue darken-1">
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Clinica Dental</a>
		    </div>
	    	<div class="nav-wrapper">
	    	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li><a href="/">Home</a></li>
		        <li><a href="{{url('pacientes')}}">Pacientes</a></li>
		        <li><a href="{{url('personal')}}">Personal</a></li>
		        <li><a href="{{url('tratamiento')}}">Tratamientos</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="/">Home</a></li>
		        <li><a href="{{url('pacientes')}}">Pacientes</a></li>
		        <li><a href="{{url('personal')}}">Personal</a></li>
		        <li><a href="{{url('tratamiento')}}">Tratamientos</a></li>
		      </ul>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="personal">Iniciar sesion</a></li>
		        <li><a href="tratamientos">Registrar usuario</a></li>
		      </ul>
		    </div>

	    </nav>
	    </div>
	   </header>
	   <div class="container">

	   		<section style="padding-top: 8%;">
	    		@yield('content')
	   		</section>
	   	</div>

	</body>