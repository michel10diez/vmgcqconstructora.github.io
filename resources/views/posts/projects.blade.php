@extends('layouts/app')
@section('content')
    <section class="main container">
		<div class="row">
			<section class="posts col-md-9">				
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="" src="img/fondo_minimalismo.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Descubre ****, otra manera de diseñar</a>
					</h2>
					<p><span class="post-fecha">06 de Abril de 2017</span> por <span class="post-author">
						<a href="#">Michel Valencia</a>
					</span></p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit eaque, corporis vero tempore eum distinctio totam nisi exercitationem inventore at doloribus repellendus amet quibusdam aut. Aut quos, ab blanditiis.
					</p>
					<div class="contenedor-botones">
						<a href="#" class="btn-primary">Leer Mas</a>
						
					</div>
				</article>
			</section>
			<aside class="col-md-3 hidden-xs hiddem-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="#" class="list-group-item active">Construcción</a>
					<a href="#" class="list-group-item">Diseños</a>
					<a href="#" class="list-group-item">Interiorismo</a>
								
				</div>
				<h4>Articulos</h4>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Industría</h4>
					<p href="" class="plist-group-item-text">Diseños</p>
				</a>
			</aside>
		</div>
	</section>
@endsection