<?php /* Template Name: Eventos */ ?>
<?php get_header(); $prefix = 'cmb2_pageventos_'; ?>

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
            <?php
                $args = array(
                    'post_type' => 'page',
                    'orderby' => 'ASC',
                    'post_parent' => $post->ID,
                    'posts_per_page' => -1
                );
                $loopevts = new WP_Query( $args );
            ?>
            <?php
                if ( $loopevts->have_posts() ) :
                while ( $loopevts->have_posts() ) : $loopevts->the_post(); ?>
                <div class="col col-md-4 evento">
                    <article class="disInlineB">
                        <div class="col colimg col-md-12">
                            <div class="img-destacada disInlineB" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>)">

                            </div>
                        </div>
                        <div class="col colinfo col-md-12">
                            <div class="resumen-page disInlineB">
                                <div class="titulo disInlineB">
                                    <a href="<?php the_permalink(); ?>"><h2 class="title entry-title"><?php echo get_the_title(); ?></h2></a>
                                </div>
                                <div class="resumen disInlineB">
                                    <p><?php echo substr(strip_tags($post->post_content), 0, 125);?>...</p>
                                </div>
                                <div class="contbtn disInlineB">
                                    <a href="<?php the_permalink(); ?>" class="">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
                endwhile;
                endif;
                wp_reset_postdata();
                wp_reset_query();
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
