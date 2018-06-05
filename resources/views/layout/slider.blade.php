<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>Najciekawsze Artykuły</h2>
            <br>
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="{{URL::asset('/img/programowanie.jpeg')}}" alt="foto" width="800px;" height="400px;">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Kodowanie? Tylko nocą!</h1>
                                <p>Błąd! - O tym dowiedziałe się wczoraj :(</p>
                                <p><a class="btn btn-lg btn-default" href="#" role="button">Przeczytaj</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/technologie.jpeg')}}" alt="foto" width="800px;" height="400px;">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Gdzie ja jestem?</h1>
                                <p>VR - podbija polski rynek technologiczny</p>
                                <p><a class="btn btn-lg btn-default" href="#" role="button">Zajrzyj</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="{{URL::asset('/img/rozwoj.jpeg')}}" alt="foto" width="800px;" height="400px;">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Oczy są zwierciadłem duszy</h1>
                                <p>Potwierdzają to ostatnie badania naukowców</p>
                                <p><a class="btn btn-lg btn-default" href="#" role="button">Poznaj</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>