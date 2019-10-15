<?php /* template Name: Eventos */ ?>
<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 margen-post single-post">
      <?php if(have_posts()): while (have_posts()) : the_post(); ?>
        <div class="disInlineB">
          <h2 class=""><?php the_title(); ?></h2>
          <div class="thumbnail">
            <?php the_post_thumbnail() ?>
          </div>
            <?php the_content(); ?>
        </div>
      <?php endwhile;
      else : ?>
        <article class="col-md-6 post">
          <div class="contenedor">
            <div class="info">
              <h2 class="titulo">El post que buscas no existe</h2>
              <div class="extracto">
                <p>Revisa que la URL que ingresaste es correcta</p>
              </div>
            </div>
          </div>
        </article>
                <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
