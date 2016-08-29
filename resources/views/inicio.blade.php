<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {!!Html::style('css/normalize.min.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/style.css')!!}

    {!!Html::script('js/jquery-2.2.0.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
                <div class="carousel-caption slider-home-item">
                    <div class="slide">
                        <h3 class="slide-title">Mantención de alcantarillados</h3>
                        <p class="slide-description">Cotiza tu mantención</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="Pérdidas de agua" src="images/slide/goteo.png">
                <div class="carousel-caption">
                    <div class="slide">
                        <h3 class="slide-title">Pérdidas de agua</h3>
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
<section id="advises-section">
    <span class="advise-title">Consejos!!</span>
    <a href="#">Véalo ahora!!</a>
    </div>
</section>

<section id="tools-section">
    <h2><a href="#">Equipos tecnológicos</a></h2>
    <article>
        <a href="#"><img alt="Hidrojet" src=""/></a>
        <h3 class="tool-title">HIDROJET</h3>
        <p class="tool-description">Permite la limpieza, destape y desobstrucción de la red de alcantarillados y
            uniones
            domiciliarias. Remueve la suciedad sin romper los ductos.</p>
    </article>
    <article>
        <a href="#"><img alt="Geofono" src=""/></a>
        <h3 class="tool-title">GEÓFONO</h3>
        <p class="tool-description">Permite la amplificación del sonido que se produce como consecuencia de una
            fuga.<br/><br/>Facilita
            la localización eficaz y precisa de la fuga.</p>
    </article>
    <article>
        <a href="#"><img alt="Cámara Televisiva" src=""/></a>
        <h3 class="tool-title">CÁMARA TELEVISIVA</h3>
        <p class="tool-description">Permite la inspección de tuberías de manera rápida y precisa, pudiendo de esta forma
            detectar
            diversos problemas de fisura, obstrucción, rotura, entre otros.<br/><br/>Detecta el punto exacto
            del problema.</p>
    </article>
    <article>
        <a href="#"><img alt="Logger" src=""/></a>
        <h3 class="tool-title">LOGGER</h3>
        <p class="tool-description">Facilitan la detección de fugas en grandes extensiones de tuberías.<br/><br/>Permite
            hacer
            lecturas de sonido y almacenarlas para su posterior utilización.</p>
    </article>
</section>
<section id="bottom-section">
    <article id="why-us-article">
        <h3 class="why-us-title">Porqué Nosotros?</h3>
        <div class="why-us-description">
            <ul>
                <li>Panel de opciones del tema</li>
                <li>Responsive Design</li>
                <li>Slider destacado</li>
                <li>Barra lateral y logo personalizado/opción favicon</li>
                <li>Multiple Homepage Layouts</li>
                <li>Portfolio, Event/News Layout</li>
                <li>Animaciones css3</li>
                <li>Mucho más</li>
            </ul>
        </div>
    </article>
    <article id="galleries-article">
        <h3 class="galleries-title">Galería Fotográfica</h3>
        <div class="galleries-content">
            <a href="#"><img alt="Imagen 1" scr=""/></a>
            <a href="#"><img alt="Imagen 2" scr=""/></a>
            <a href="#"><img alt="Imagen 3" scr=""/></a>
        </div>
    </article>
    <article id="clients-article">
        <h3 class="clients-title">Galería Fotográfica</h3>
        <div class="client">
            <a href="#">
                <h4 class="client-name">Cliente 1</h4>
                <img alt="Cliente 1" src=""/>
            </a>
            <p class="client-testimonial"> Testimonio Cliente 1</p>
        </div>
    </article>
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
</body>
</html>

