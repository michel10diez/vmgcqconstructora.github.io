
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font/flaticon.css') }}">
    <link href="css/carousel.css" rel="stylesheet">
    <style>
    	.invalid-feedback{
    		display: block;
    	}
    </style>

</head>
<body>
	<div id="app">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">Inicio/Empresa</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
				    <ul class="navbar-nav mr-auto">
					    <li class="nav-item active">
					        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
					    </li>
				        <li class="nav-item">
				        	<a class="nav-link" href="#">Features</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ url('/contact') }}">Contáctanos</a>
				      	</li>
				    </ul>
			    	<span class="navbar-text">
			      Navbar text with an inline element
			    	</span>
			  	</div>
			</div>	  	
		</nav>

		<div>			
			@yield('content')<!-- Contenido -->
		</div>
			<footer class="bg-info footer">
				<div class="container">								
					<div class="row container-fluid ">
				        <div class="col-sm-4 social">
				        	<strong>Ejemplo</strong>
				        </div>
				      	<div class="col-sm-4 social">
				    		
				    		<address>
				    			<strong>G.C.Q. Construcciones</strong><br>
				    			Calzada Ventura puente esq. Camelinas s/n<br>
				    			Zona sin Asignación de Nombre de Colonia<br>
				    			C.P. 58070<br>
				    			Morelia, Michoacán<br>
				    			
				    			<abbr title="Phone">Tel:</abbr> 443 000 0000
				    		</address>
				    	</div>
				    	<div class="col-sm-4 social">
				    		<a href="#"><i class="flaticon-facebook"></i></a>
				    		<a href="#"><i class="flaticon-twitter"></i></a>
				    		<a href="#"><i class="flaticon-instagram"></i></a>
				    	</div>
		    		</div>		    			
				</div>  
				<div  class="address">
				        <iframe  scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7513.321867649492!2d-101.1814892!3d19.6844659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de7d6194fa3%3A0x4b63d5e5686e0974!2sCentro+de+Convenciones+y+Exposiciones+de+Morelia!5e0!3m2!1ses!2smx!4v1518625271207" width="100%" height="400" style="border:0" allowfullscreen></iframe>
				    </div>
					<p class="centro">&copy; 2018 Company, Inc.</p>	     	
		    </footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
</body>
</html>