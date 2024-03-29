<?php global $configG ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,
  user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <title> <?php wp_title(); ?> </title>
  <?php wp_head(); ?>
  <meta name="theme-color" content="#333">
  <meta name="msapplication-navbutton-color" content="#333">
  <meta name="apple-mobile-web-app-status-bar-style" content="#333">
</head>
<body <?php body_class(); ?> style="background-image: url(<?php echo $configG['med_imgfondobody']['url'] ?>)">
  <header>
<!--navbar y redes sociales-->
        <div class="redes-sociales col-xs-12"></div>
        <nav class="menu navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <div class="col col-md-2 infoh">
				          <a href="<?php echo get_site_url( ); ?>" class="navbar-brand">
					           <?php if ( $configG['img_logo_header']['url']): ?>
            						<img src="<?php echo $configG['img_logo_header']['url'] ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
					           <?php else: ?>
						         <?php echo get_bloginfo( 'name' ); ?>
					           <?php endif ?>
				          </a>
			     </div>
            <!--<a href="#" class="navbar-brand">Logotipo</a>-->
        <div class="col col-md-6 infoh colmenuh">
				<?php if ($configG['chk_act_menu']): ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-label="Menu de Navegacion">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbar">						
						<?php
	                        wp_nav_menu( array(
	                          'theme_location' => 'top_menu',
	                          'depth' => 4,
	                          'container' => false,
	                          'menu_class' => 'navbar-nav mr-auto',
	                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                          'walker'            => new wp_bootstrap_navwalker())
	                        );
	                      ?>
					</div>
				<?php endif ?>
			</div>



              <div class="my-3 col-12 col-sm-6 col-md-4 infoh">
                  <?php if ($configG['chk_buscaheader']): ?>
                  <?php get_search_form( ); ?>
                  <?php endif ?>
              </div>
          </div>
        </nav>
  </header>
