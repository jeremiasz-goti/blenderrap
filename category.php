<?php get_header(); ?>

  <!-- MAIN CONTENT -->

    <main role="main">



      <!-- PREMIERY -->

        <div class="container news news-single">
          <div class="main-news main-single">
            <div>
            </div>
            <div class="linia">
            </div>
              <div class="row news-single-title">
                <div class="col-sm-12 mt-2 single-top-title premiera-top-title">
				<?php

					$current_cat_id = the_category_ID(false);
					echo '<h1> Premiery: ' . get_cat_name($current_cat_id) . '</h1>';
					?>
                </div>

              </div>
              <div class="linia">
              </div>
			  <nav class="navbar navbar-expand-md navbar-light premiery-menu align-content-center">
		<button class="navbar-toggler premiery-button" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	    </button>

        <?php
		wp_nav_menu( array(
			'theme_location'    => 'secondary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-2',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
      </nav>
              <div class="row premiera">
                <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
                          <!-- start kolumny -->
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <a href="<?php the_permalink(); ?>">
                            <div class="recent-news-obj">
                              <div class="card recent-card">
                                <div class="card-img-wrap premiery-img"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                                </div>
                                  <div class="card-block">
                                    <h6 class="card-title recent-title"><b><?php the_title(); ?></b></h6></a>
                                    <div class="list-short-premiery">
									<p><?php the_excerpt(); ?></p>
                                    </div>
                                  </a></div>

                                </div>
                            </div>
                          </div>
                          <!-- koniec kolumny -->
                          <?php
                          endwhile; endif;
                          ?>
              </div>
          </div> <!-- end single post -->
          <div class="row center-content paginacja">
            <div class="col-xs-12 d-flex justify-content-center mt-5 mb-3">
              <?php if (function_exists('wp_pagenavi')){wp_pagenavi();} ?>
            </div>

          </div>




        </div> <!-- end container -->

        <?php

    $wp_query = null;
    $wp_query = $temp;
    wp_reset_query();
    ?>




    </main>
  <!-- END OF MAIN CONTENT -->

  <?php get_footer(); ?>
