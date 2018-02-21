@extends('layouts/app')
@section('content')
    <div><!--Podríamos agregar la clase banner class="banner"-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-info" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-info" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-info" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </div>
    <!-- Termina Carousel -->

    <div class="container">     
          <!-- Example row of columns -->
          <div class="row centro">
            <div class="col-lg-4">
                <img class="img-radio" src="img/fondo_minimalismo.jpg" alt="" width="190" height="190">
                <h2>Minimalismo</h2>
                <p class="description">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-outline-info" href="{{ url('/project') }}" role="button">Ver detalles &raquo;</a></p>
            </div>
               <div class="col-md-4">
                <img class="img-radio" src="img/fondo_antiguo.jpg" alt="" width="190" height="190">
                <h2>Contemporaneo</h2>
                    <p class="description">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-outline-info" href="{{ url('project-uno') }}" role="button">View details &raquo;</a></p>
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
        
    <!-- /container -->
    </div>
    <div class="servicios">
                <section>
                    <div class="row container-fluid">
                        <div class="col-md-3">
                            <img src="img/fondo_arq.jpg" alt="" width="390" height="200">
                        </div>
                        <div class="col-md-3">
                            <img src="img/fondo_antiguo.jpg" alt="" width="390" height="200">
                        </div>
                        <div class="col-md-3">
                            <img src="img/fondo_minimalismo.jpg" alt="" width="390" height="200">
                        </div>
                        <div class="col-md-3">
                            <img src="img/fondo_arq.jpg" alt="" width="390" height="200">
                        </div>
                    </div>
                </section>
            </div>
            <hr>
@endsection