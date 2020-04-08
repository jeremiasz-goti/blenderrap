<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/gfx/blenderrap.png" />

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- import souce sans font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <!-- import oswald font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <!-- import bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- import custom css -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- import font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- facebook connect -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2';
  		fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	</script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script> -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

    <?php wp_head(); ?>

  </head>

  <body>

  <!-- NAVIGATION -->

    <!-- nav logo -->
    <div class="nawigacja" id="glowna-nawigacja">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
	  <a class="navbar-brand logo-mini" href="<?php bloginfo('url'); ?>"><img class="img-responsive mx-auto main-logo" src="<?php bloginfo('template_url'); ?>/gfx/logo-nav.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	    </button>

        <?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
		<div class="nav navbar-nav ml-auto">
        <div class="sm-menu">
 <a href="https://www.facebook.com/blenderrappl/" target="_blank">
		  <div class="sm-fb d-none d-lg-inline-block">			  
		  </div>
		  </a>
		  <a href="https://twitter.com/blender_art" target="_blank">
		  <div class="sm-tw d-none d-lg-inline-block">			  
		  </div>
		  </a>
		  <a href="https://www.instagram.com/blenderrap.pl/" target="_blank">
		  <div class="sm-ig d-none d-lg-inline-block">			  
		  </div>
		  </a>
		   <a href="https://www.youtube.com/user/BLENDERSTACJA" target="_blank">
		  <div class="sm-yt d-none d-lg-inline-block">			 
		  </div>
		  </a>	   
        </div>
        <div class="szukaj sm-menu">
		 	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(' / ');?>">
				<div>
					<label class="screen-reader-text" for="s">Szukaj:</label>
					<button type="submit" id="searchsubmit">
						<img class="img-responsive mx-auto sm-menu-icon" src="<?php bloginfo('template_url'); ?>/gfx/search-blender.png" alt="">
					</button>	
				</div>
			</form>
			          
        </div>
	  </div>
      </nav>
    </div>

  <!-- END OF NAVIGATION -->
	  			 
