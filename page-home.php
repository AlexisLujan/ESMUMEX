<?php /* template Name: Pagina Inicio */ ?>
<?php get_header(); ?>


<!--Carousel para los banners-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="carousel slide" id="principal-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
                        <li data-target="#principal-carousel" data-slid-to="1"></li>
                        <!--<li data-target="#principal-carousel" data-slid-to="2"></li>-->
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner1.png" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner2.png" alt="">
                        </div>
                        <!--
              <div class="carousel-item">
                <img src="img/carousel3.jpg" width="1200" alt="">
              </div>
              -->
                    </div>

                    <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Sección de los eventos-->
<section>
    <div class="container">
        <!--sección de servicios y eventos-->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-title text-center">
                    <h1>Eventos Anuales</h1>
                    <p>Estos son algunos de los eventos y proyectos realizados por la ESMUMEX anualmente
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>ANIVERSARIO DE LA TRADICIONAL CALLEJONEADA (Febrero)</h3>
                            <p>
                                vento que se lleva a cabo todos los domingos del año en punto de las 6:00 p.m. en el teatro del calvario. Programa dirigido a todo el público en general. Un espacio abierto para todas las personas que desean dar a conocer su talento ya sea a través del arte (canto, baile, danza, poesía etc.) En esta ocasión se presentó el mariachi “los potrillos de Aguascalientes”.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>CASCABELEO PRIMAVERAL (Abril)</h3>
                            <p>
                                Evento dirigido a todos los niños en su mes. Se presenta un musical en vivo con todos los talleres de la ESMUMEX. Lo recaudado en esta ocasión fue dos pares de calcetines por persona y esto fue entregado al DIF para los niños desamparados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>FIESTA NACIONAL DEL MARIACHI, SU CHARRERIA Y DANZA (Septiembre)</h3>
                            <p>
                                Viernes: Por la avenida 20 de Noviembre se llevó a cabo el tradicional desfile con 12 carros alegóricos conformado por danzas y grupos de mariachis. Sábado y domingo: Se llevan a cabo en el teatro Ricardo castro 4 galas de mariachis, donde participan grupos de diferentes Estados de la república mexicana. Domingo: Se llevó a cabo la clausura de la 11va fiesta nacional del mariachi en la plaza de Armas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>ANIVERSARIO DE LA ESCUELA DE LA MUSICA MEXICANA (Noviembre)</h3>
                            <p>
                                Se lleva a cabo el último fin de semana del mes de Noviembre.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>POR UNA ALEGRE NAVIDAD (Diciembre)</h3>
                            <p>
                                Se presenta un musical en vivo con los grupos de la ESMUMEX. Esta ocasión se pidió una prenda invernal por persona, para ser entregado a la señora Tere Álvarez del Castillo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-area">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-music fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h3>Texto de prueba</h3>
                            <p>
                                Evento dirigido a todos los niños en su mes. Se presenta un musical en vivo con todos los talleres de la ESMUMEX. Lo recaudado en esta ocasión fue dos pares de calcetines por persona y esto fue entregado al DIF para los niños desamparados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--sección de talleres impartidos-->
<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-title text-center">
                    <h1>Servicios</h1>
                    <p>Estos son algunos nuestros talleres impartidos.
                    </p>
                </div>
            </div>
        </div>
        <!--nivel 1-->
        <div class="row">
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/guitarra.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div>
                        <h3 class="talleres-titulo">Guitarra</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/violin.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Violín</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/canto-y-vocalizacion.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Canto y vocalización</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/mariachi.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Mariachi</h3>

                    </div>
                </div>
            </div>
        </div>
        <!--nivel 2-->
        <div class="row">
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/saxofon.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Saxofón</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/clarinete.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Clarinete</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/piano.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Piano</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/banda.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Banda</h3>

                    </div>
                </div>
            </div>
        </div>
        <!--nivel 3-->
        <div class="row">
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/flauta-transversal.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Flauta transversal</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/danza-folklorica.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Danza folklórica infantil y juvenil</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/acordeon.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Acordeón</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/bajo-sexto.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Bajo sexto</h3>

                    </div>
                </div>
            </div>
        </div>
        <!--nivel 4-->
        <div class="row">
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/bajo-electrico.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Bajo eléctrico</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/trompeta.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Trompeta</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/bateria.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Batería</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/mandolina.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Mandolina</h3>

                    </div>
                </div>
            </div>
        </div>
        <!--nivel 5-->
        <div class="row">
            <div class="col-md-3">
                <div class="talleres">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/talleres/teatro.png" class="card-img-top img-fluid" alt="">
                    </a>
                    <div class="">
                        <h3 class="talleres-titulo">Teatro</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Sección de grupos representativos-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-title text-center">
                    <h1>Grupos representativos</h1>
                    <p>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                <div class="carousel slide" id="grupos-representativos-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#grupos-representativos-carousel" data-slid-to="0" class="active"></li>
                        <li data-target="#grupos-representativos-carousel" data-slid-to="1"></li>
                        <li data-target="#principal-carousel" data-slid-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption d-block p-2 bg-dark text-white">
                                <h4>Titulo de la imagen</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                </p>
                            </div>
                            <img class="float-left rounded img-thumbnail img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Fotos/DSCN4895.jpg" width="1400px" alt="">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-block p-2 bg-dark text-white">
                                <h4>Titulo de la imagen</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                </p>
                            </div>
                            <img class="float-left rounded img-thumbnail img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Fotos/IMG-20190121-WA0101.jpg" width="1400px" alt="">
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption d-block p-2 bg-dark text-white">
                                <h4>Titulo de la imagen</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                </p>
                            </div>
                            <img class="float-left rounded img-thumbnail img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Fotos/DSCN4928.jpg" width="1400" alt="">
                        </div>

                    </div>

                    <a href="#grupos-representativos-carousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a href="#grupos-representativos-carousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sección de footer-->

<?php get_footer(); ?>
