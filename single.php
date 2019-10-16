<?php get_header(); ?>

<section class="img-principal disInlineB" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>')">
	<h1><?php the_title() ;?></h1>
</section>
<section>
  <div class="container single-post">
  <div class="row">
    <div class="col-md-12">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="disInlineB">
        <?php the_content(); ?>
      </div>
      <?php
      endwhile;
      endif;
      ?>
    </div>
  </div>
</div>
</section>


<?php get_footer(); ?>
