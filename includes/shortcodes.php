<?php

function most_redes_sociales() {
	ob_start();
	global $configG;
	?>
	<div id="redes-sociales" class="redes-sociales disInlineB">
		<?php if ($configG['url_social_facebook']!= ""): ?>
			<a href="<?php echo $chefdeco['url_social_facebook'] ?>" target="_blank" class="icon-button facebook"><i class="icofont-facebook"></i><span></span></a>
		<?php endif ?>
		<?php if ($configG['url_social_twitter']!= ""): ?>
			<a href="<?php echo $chefdeco['url_social_twitter'] ?>" target="_blank" class="icon-button twitter"><i class="icofont-twitter"></i><span></span></a>
		<?php endif ?>
		<?php if ($configG['url_social_pinterest']!= ""): ?>
			<a href="<?php echo $chefdeco['url_social_pinterest'] ?>" target="_blank" class="icon-button pinterest"><i class="icofont-pinterest"></i><span></span></a>
		<?php endif ?>
		<?php if ($configG['url_social_youtube']!= ""): ?>
			<a href="<?php echo $chefdeco['url_social_youtube'] ?>" target="_blank" class="icon-button youtube"><i class="icofont-youtube"></i><span></span></a>
		<?php endif ?>
		<?php if ($configG['url_social_instagram']!= ""): ?>
			<a href="<?php echo $chefdeco['url_social_instagram'] ?>" target="_blank" class="icon-button instagram"><i class="icofont-instagram"></i><span></span></a>
		<?php endif ?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode('redes_sociales', 'most_redes_sociales');


function funcshort_bloquesContenido($atts) {
	ob_start();
	global $post;

	// Valores recibidos
	$atts = shortcode_atts(
		array(
			'nume' => '',
			'tipo' => '',
			'padre' => '',
		),$atts
	);

	$tipost = 'post';
	$numart = 8;
	$codpad = 0;

	if ($atts['nume']) {
		$numart = $atts['nume'];
	}
	if ($atts['tipo']) {
		$tipost = $atts['tipo'];
	}
	if ($atts['padre']) {
		$codpad = $atts['padre'];
	}

	$args = array(
		'post_type' => $tipost,
		'orderby' => 'ASC',
		'post_parent' => $codpad,
		'posts_per_page' => $numart,
		'paged' => get_query_var('paged')
	);

	$loopEvents = new WP_Query( $args );

	if ( $loopEvents->have_posts() ) :
    while ( $loopEvents->have_posts() ) : $loopEvents->the_post(); ?>

		<div class="col col-md-4 col-lg-3 evento">
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
	// Wordpress Pagination
		$big = 999999999; // need an unlikely integer
		$links = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $loopEvents->max_num_pages,
			'prev_text'    => '<',
			'next_text'    => '>',
			'type' => 'array'
		) );
		if(!empty($links)){ ?>
			<div class="disInlineB contpagi">
				<ul class="paginado">
					<?php
					foreach($links as $link){
					?>
					<li><?php echo $link; ?></li>
					<?php
					}
					wp_reset_query(); wp_reset_postdata();?>
				</ul>
			</div>
		<?php }
	wp_reset_postdata();
	wp_reset_query();

	return ob_get_clean();
}
add_shortcode('short_bloquesContenido', 'funcshort_bloquesContenido');
