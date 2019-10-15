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
                    <div class="col-lg-4">
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
    <section class="talleres-fondo">
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
                     <div class="col-6 col-md-4 col-lg-3">
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
              <div id="carru-representativos" class="disInlineB" data-slick='{"dots": true}'>
                    <?php $vargruprep = get_post_meta( get_the_ID(), $prefix.'group_repre', true ); ?>
                    <?php foreach ($vargruprep as $value): ?>
                        <div>
                            <a href="<?php echo $value['txturlserv'] ?>">
                                <div class="continfo" style="background-image: url('<?php echo $value['imgserv'] ?>')">
                                    <div class="info">
                                        <?php echo wpautop( $value['txttitserv'] );  ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sección de footer-->

<?php get_footer(); ?>
