<?php get_header(); global $post; ?>

<div class="clearfix"></div>

<section id="contbuscador" class="disInlineB">
	<div class="container">
		<div class="row">

			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); ?>
			<div class="resumen-post col col-md-12 col-sm-6 col-xs-12">
				<article class="disInlineB hentry">

					<div class="contImgz">
						<a href="<?php the_permalink(); ?>" rel="nofollow" target="_blank">
							<?php the_post_thumbnail('medium', array('class' => 'imgz')); ?>
						</a>
					</div>
					<div class="info-texto disInlineB entry entry-content">
						<div class="titulo disInlineB">
							<a href="<?php the_permalink(); ?>" target="_blank"><h3 class="title entry-title"><?php echo get_the_title(); ?></h3></a>
						</div>
						<div class="txt disInlineB">
							<p><?php echo substr(strip_tags($post->post_content), 0, 130);?>...</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<a href="<?php the_permalink(); ?>" target="_blank" class="btnNaranja btnBoxShadow">Leer más...</a>
				</article>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<div class="clearfix"></div>

<?php get_footer(); ?>
