@extends('layouts/app')
@section('content')
	<div class="banner">
		<img src="img/banner.jpg" alt="">
		
	</div>

	<div class="container">		
	      <!-- Example row of columns -->
	      <div class="row centro">
	        <div class="col-lg-4">
				<img class="img-radio" src="img/fondo_minimalismo.jpg" alt="" width="190" height="190">
	          	<h2>Minimalismo</h2>
	          	<p class="description">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          	<p><a class="btn btn-outline-info" href="#" role="button">View details &raquo;</a></p>
	        </div>
		       <div class="col-md-4">
				<img class="img-radio" src="img/fondo_antiguo.jpg" alt="" width="190" height="190">
		        <h2>Contemporaneo</h2>
		         	<p class="description">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		         	<p><a class="btn btn-outline-info" href="#" role="button">View details &raquo;</a></p>
		       </div>
	        <div class="col-md-4">
				<img class="img-radio" src="img/fondo_arq.jpg" alt="" width="190" height="190">
	         	<h2>Otro</h2>
	          	<p class="description">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo.</p>
	         	<p><a class="btn btn-outline-info" href="#" role="button">View details &raquo;</a></p>
	        </div>	        

	        <div>
	        	<br>
	        	<p><a href="#" class="btn btn-info">Ver más</a></p></div>
	      	</div>

   		<hr>

      	
   	<!-- /container -->
	</div>
@endsection