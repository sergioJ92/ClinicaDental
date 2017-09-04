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
		<div class="row">
			<ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header"><i class="material-icons">home</i>Home</div>
			      <div class="collapsible-body"><span>
			      	<div class="collection">
			      		<a href="{{'/usuario/create'}}" class="collection-item">Crear Usuario</a>
				    	<a href="{{'/usuario/create'}}" class="collection-item">Alan</a>	
			      	</div>
			      </span></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">group</i>Usuarios</div>
			      <div class="collapsible-body"><span>
			      	<div class="collection">
			      		<a href="{{'/usuario/create'}}" class="collection-item">Crear Usuario</a>
				    	<a href="{{'/usuario/create'}}" class="collection-item">Alan</a>	
			      	</div>
			      </span></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">assignment</i>Tratamientos</div>
			      <div class="collapsible-body"><span>
			      	<div class="collection">
			      		<a href="{{'/usuario/create'}}" class="collection-item">Crear Usuario</a>
				    	<a href="{{'/usuario/create'}}" class="collection-item">Alan</a>	
			      	</div>
			      </span></div>
			    </li>
		  </ul>
		  </div>
		<div>
	    @yield('barraAdminContent')
	    </div>
	</body>