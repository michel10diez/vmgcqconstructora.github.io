@extends('layouts/app')
@section('content')	
	<div class="container">
		<!-- Button trigger modal -->
		<div class="ejemplos">
			<section class="posts col-md-9">
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="" src="img/fondo_antiguo.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Descubre ****, otra manera de crear</a>
					</h2>
					<p><span class="post-fecha">06 de Abril de 2017</span> por <span class="post-author">
						<a href="#">Michel Valencia</a>
					</span></p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit eaque, corporis vero tempore eum distinctio totam nisi exercitationem inventore at doloribus repellendus amet quibusdam aut.   <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
				  				Leer más ...
						</button>
					</p>
				</article>
			</section>
			<section class="posts col-md-9">
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="" src="img/fondo_arq.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Descubre ****, otra manera de crear</a>
					</h2>
					<p><span class="post-fecha">06 de Abril de 2017</span> por <span class="post-author">
						<a href="#">Michel Valencia</a>
					</span></p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit eaque, corporis vero tempore eum distinctio totam nisi exercitationem inventore at doloribus repellendus amet quibusdam aut.   <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
				  				Leer más ...
						</button>
					</p>
				</article>
			</section>		
		</div>
		
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Modal</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
		
@endsection