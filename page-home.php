<?php /* template Name: Pagina Inicio */ ?>
<?php     get_header(); $prefix = 'cmb2_paghome_'; ?>

<!--Carousel para los banners-->
    <section id="secchslider" class="disInlineB">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <?php $files = get_post_meta( get_the_ID(), $prefix.'sliderprincipal', 1 ); ?>




                    <div class="sliderHome disInlineB">

                        <?php  foreach ( (array) $files as $attachment_id => $attachment_url ): ?>
                            <div>
                                <img src="<?php echo $attachment_url; ?>" alt="TEXTO CUALQUIERA">
                            </div>

                        <?php endforeach ?>
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
                        <?php echo wpautop( get_post_meta( get_the_ID(), $prefix.'wsg_txtdescevtanual', true ) ); ?>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php $vargrupevtanuales = get_post_meta( get_the_ID(), $prefix.'group_evtanuales', true ); ?>

                <?php foreach ($vargrupevtanuales as $value): ?>
                    <div class="col-md-4">
                        <div class="service-area">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="fa fa-music fa-2x"></i>
                                </div>
                                <div class="media-body">
                                    <h3><?php echo $value['txttitanual']; ?> </h3>
                                    <p>
                                        <?php echo $value['wsg_descevtanual']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </section>
    <!--sección de talleres impartidos-->
    <section>
         <div class="container">

             <div class="row">
                 <div class="col-md-12">
                     <div class="section-heading-title text-center">
                         <?php echo wpautop( get_post_meta( get_the_ID(), $prefix.'wsg_txtdescservs', true ) ); ?>
                     </div>
                 </div>
             </div>
             <!--nivel 1-->
             <div class="row">

                 <?php $vargrupservs = get_post_meta( get_the_ID(), $prefix.'group_servs', true ); ?>

                 <?php foreach ($vargrupservs as $value): ?>
                     <div class="col-md-3">
                         <div class="talleres">
                             <a href="<?php echo $value['txturlserv'] ?>">
                                 <img src="<?php echo $value['imgserv'] ?>" class="card-img-top img-fluid" alt="SERVICIO">
                             </a>
                             <div>
                                 <h3 class="talleres-titulo"><?php echo $value['txttitserv'] ?></h3>

                             </div>
                         </div>
                     </div>
                 <?php endforeach ?>
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
