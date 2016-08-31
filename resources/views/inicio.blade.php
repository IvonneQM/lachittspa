<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{Html::style('css/normalize.min.css')}}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/blueimp-gallery.min.css')!!}
    {!!Html::style('css/bootstrap-image-gallery.min.css')!!}
    {!!Html::style('css/style-icomoon.css')!!}
    {!!Html::style('css/style.css')!!}
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">


</head>
<body>
<header>
    <div id="logo"><a><img alt="Logotipo de Lachitt SPA" src=""/></a></div>
    <div class="header-text"><p>Llámanos : 984187523XX</p></div>
    <div class="clearfix"></div>
    <div class="socials">
        <a href="http://www.fb.com/" class="facebook" title="Facebook" target="_blank"><span
                    class="font-icon-social-facebook"></span></a>
        <a href="http://www.twitter.com/" class="twitter" title="Twitter" target="_blank"><span
                    class="font-icon-social-twitter"></span></a>
    </div>
    <nav class="navbar navbar-default" id="navbar-responsive" role="navigation">
        <div class="container" id="contenedor">
            <div class="navbar-header" id="n">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul id="menu" class="nav navbar-nav">
                    <li id="menu-item-inicio"><a href="#">INICIO</a></li>
                    <li id="menu-item-empresa"><a href="#">NUESTRA EMPRESA</a></li>
                    <li id="menu-item-contacto"><a href="#">CONTACTO</a></li>
                </ul>
            </div>
        </div>

    </nav>
</header>
<section id="slider-section">
    <div id="slider-home" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img alt="Mantención de alcantarillados" src="images/slide/alcantarillado.png">
                <div class="carousel-caption">
                    <div class="slide">
                        <h3 class="slide-title">Mantención de Redes Domiciliarias</h3>
                        <p class="slide-description">Cotiza tu mantención</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="Pérdidas de agua" src="images/slide/goteo.png">
                <div class="carousel-caption">
                    <div class="slide">
                        <h3 class="slide-title">Pérdidas de Agua</h3>
                        <p class="slide-description">El goteo constante de una llave equivale a 80 litros de agua cada
                            24
                            horas</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#slider-home" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#slider-home" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>


</section>
<section class="advises-section">
    <span class="advise-title">CONSEJOS!!</span>
    <a href="#" class="advise-link">Véalo ahora!!</a>
    </div>
</section>
<section class="tools-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><a href="#">Equipos Tecnológicos</a></h2>
            </div>
            <article>
                <div class="col-lg-3 col-sm-6 centered">
                    <a href="#"><img alt="Hidrojet" src="images/tools/camaratelevisivacuadrado.png" class="img-circle"/></a>
                    <h3 class="tool-title">Hidrojet</h3>
                    <p class="tool-description center-block">Permite la limpieza, destape y desobstrucción de la red de
                        alcantarillados y
                        uniones
                        domiciliarias. Remueve la suciedad sin romper los ductos.</p>
                </div>
            </article>
            <article>
                <div class="col-lg-3 col-sm-6 centered">
                    <a href="#"><img alt="Geofono" src="images/tools/geofonocuadrado.png" class="img-circle "/></a>
                    <h3 class="tool-title">Geofono</h3>
                    <p class="tool-description center-block">Permite la amplificación del sonido que se produce como
                        consecuencia de
                        una fuga.Facilita la localización eficaz y precisa de la fuga.</p>
                </div>
            </article>
            <article>
                <div class="col-lg-3 col-sm-6 centered">
                    <a href="#"><img alt="Cámara Televisiva" src="images/tools/hidrojetcuadrado.png"
                                     class="img-circle"/></a>
                    <h3 class="tool-title">Cámara Televisiva</h3>
                    <p class="tool-description center-block">Permite la inspección de tuberías de manera rápida y
                        precisa, pudiendo de
                        esta forma detectar diversos problemas de fisura, obstrucción, rotura, entre otros. Detecta el
                        punto exacto
                        del problema.</p>
                </div>
            </article>
            <article>
                <div class="col-lg-3 col-sm-6 centered">
                    <a href="#"><img alt="Logger" src="images/tools/loggercuadrado.png" class="img-circle"/></a>
                    <h3 class="tool-title">Logger</h3>
                    <p class="tool-description center-block">Facilitan la detección de fugas en grandes extensiones de
                        tuberías. Permite hacer lecturas de sonido y almacenarlas para su posterior utilización.</p>
                </div>
            </article>
        </div>
    </div>
</section>
<section id="bottom-section">
    <div class="container">
        <div class="row">
            <article id="why-us-article">
                <div class="col-sm-4">
                    <h3 class="why-us-title">Porqué Nosotros?</h3>
                    <div class="why-us-description">
                        <ul>
                            <li><span class="icon-medal"></span>Servicio Profesional y Garantizado.</li>
                            <li><span class="icon-thumb-up"></span>Más de 5 Años de Experiencia en el Rubro.</li>
                            <li><span class="icon-truck2"></span>Técnicos Calificados en Terreno.</li>
                            <li><span class="icon-patch"></span>Evitamos Daños Innecesarios.</li>
                            <li><span class="icon-map2"></span>Atención Domiciliaria a Toda la Segunda Región.</li>
                            <li><span class="icon-clipboard"></span>Compromiso de Confianza y Transparencia.</li>
                            <li><span class="icon-security"></span>Preocupación por su Seguridad.</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article id="galleries-article">
                <div class="col-sm-4">
                    <h3 class="galleries-title">Galería Fotográfica</h3>
                    @include('gallery.gallery-bootstrap')
                </div>
            </article>
            <article id="clients-article">
                <div class="col-sm-4">

                    <h3 class="clients-title">Clientes</h3>
                    <div class="client">
                        <a href="#">
                            <h4 class="client-name">Cliente 1</h4>
                            <img alt="Cliente 1" src=""/>
                        </a>
                        <p class="client-testimonial"> Testimonio Cliente 1</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<footer>
    <div id="copyright">
        Todos los derechos reservados &copy; 2016 <span class="separator"> | </span>
        <a href="#"> Lachitt SPA </a>
    </div>

    <div id="developer">
        Desarrollado por
        <a href="http://www.computecsos.com"><img alt="Logo Computec SOS" src=""></a></div>


</footer>
{!!Html::script('js/jquery-2.2.0.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!! Html::script('js/bootstrap-gallery/jquery.blueimp-gallery.min.js') !!}
{!! Html::script('js/bootstrap-gallery/bootstrap-image-gallery.min.js')!!}
</body>
</html>

