<?php /* Template Name: Eventos */ ?>
<?php get_header(); $prefix = 'cmb2_pagevts_'; ?>

<section id="secc-titulo" class="tit-principal disInlineB">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
              <?php
              endwhile;
              endif;
              ?>
            </div>
        </div>
    </div>
</section>
<section id="secc-contenido" class="eventos disInlineB">
    <div class="container">
        <div class="row">

            <?php echo do_shortcode(get_post_meta( get_the_ID(), $prefix.'txt_shortpublicaciones', 1 )); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
