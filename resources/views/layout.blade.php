<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

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
    <div class="row">
        <div class="col-xs-5 col-sm-3 asdf">
            <a>
                <img src="images/logo-lachitt.png" alt="Logotipo de Lachitt SPA" id="logo-md"/>
            </a>
        </div>
        <div class="col-xs-6 col-xs-offset-1 col-sm-3 col-sm-offset-6  col-md-3  col-md-offset-6 col-lg-2 col-lg-offset-7 asd">
            <p>icon: 984187523XX</p>
            <div class="socials">
                <a href="http://www.fb.com/" class="facebook" title="Facebook" target="_blank">
                    <span class="icon-thumb-up"></span>
                </a>
                <a href="http://www.twitter.com/" class="twitter" title="Twitter" target="_blank">
                    <span class="icon-thumb-up"></span>
                </a>
            </div>
        </div>
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
@yield('section-customized')

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