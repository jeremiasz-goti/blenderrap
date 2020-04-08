<?php /* Template Name: Premiery */  ?>


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
                  <h1>Ostatnio dodane premiery</h1>
                </div>

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
                  $query = new WP_Query( array( 'category_name' => 'premiery' ) );
                  if( $query->have_posts()  ) { ?>
                    <?php
                    while(  $query->have_posts()  ) { ?>
                      <?php $query->the_post(); ?>

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


                      <?php }
                wp_reset_postdata(); ?>
                <?php } ?>
              </div>
          </div> <!-- end single post -->




        </div> <!-- end container -->






    </main>
  <!-- END OF MAIN CONTENT -->

  <?php get_footer(); ?>
