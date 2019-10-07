<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 margen-post single-post">
      <?php if(have_posts()): while (have_posts()) : the_post(); ?>
        <div class="disInlineB">
          <h2 class=""><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
      <?php
      endwhile;
      endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
