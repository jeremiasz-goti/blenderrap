<?php get_header(); ?>

  <!-- MAIN CONTENT -->

    <main role="main">

      <!-- main slider -->
      <div class="container first-container">




        <div class="slider-main">

          <?php
          echo do_shortcode('[smartslider3 slider=5]');
          ?>
        </div>


      <!-- news -->

        <div class="container-fluid news">
          <div class="main-news">
            <!-- start row -->
            <div class="row">

              <?php
                $partia1 = new WP_Query( array( 'posts_per_page' => 9 ) );
                if( $partia1->have_posts()  ) { ?>
                  <?php
                  while(  $partia1->have_posts()  ) { ?>
                    <?php $partia1->the_post(); ?>
                    <!-- start kolumny -->
                    <div class="col-sm-12 col-md-4 mb-5 mt-1">
                        <div class="news-obj">
                          <a href="<?php the_permalink(); ?>">
                          <div class="card">
                            <div class="card-img-wrap"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                            </div>
                              <div class="card-block">
                                <h4 class="card-title"><?php the_title(); ?></h4></a>
                                <div class="post-short">
                                  <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                              </div>
                            </div>
                            <i class="far fa-clock opublikowane"> <?php the_time(); ?></i>
                        </div>
                    </div>
                    <!-- koniec kolumny -->



                   <?php }
                  wp_reset_postdata(); ?>

                <?php } ?>

            </div>
            <!-- end row -->

  				<div class="car-title">
    			<h3 class="wyd">PREMIERY</h3>
				</div>

            <!-- koncerty block -->
            <div class="koncert">
              <div class="row">
                <div class="col-sm-12 mb-5">

                   <?php if ( have_posts() ) : ?>
				   <?php while ( have_posts() ) : the_post(); ?>

	               <?php endwhile; ?>
				   <?php echo do_shortcode ('[wcp-carousel id="31937"]') ?>
                   <?php endif; ?>



                </div>

              </div>




            </div>
            <!-- koncerty block -->

            <!-- start row -->
            <div class="row">

              <?php
                $partia2 = new WP_Query( array(
                  'posts_per_page' => 6,
                  'offset' => 9

                  ) );
                if( $partia2->have_posts()  ) { ?>
                  <?php
                  while(  $partia2->have_posts()  ) { ?>
                    <?php $partia2->the_post(); ?>
                    <!-- start kolumny -->
                    <div class="col-sm-12 col-md-4 mb-5 mt-1">
                        <div class="news-obj">
                          <a href="<?php the_permalink(); ?>">
                          <div class="card">
                            <div class="card-img-wrap"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                            </div>
                              <div class="card-block">
                                <h4 class="card-title"><?php the_title(); ?></h4></a>
                                <div class="post-short">
                                  <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                              </div>
                            </div>
                            <i class="far fa-clock opublikowane"> <?php the_time(); ?></i>
                        </div>
                    </div>
                    <!-- koniec kolumny -->
                  <?php }
                   wp_reset_postdata(); ?>

                 <?php } ?>

            </div>
            <!-- end row -->

  				<div class="car-title">
    			<h3 class="wyd">WYDARZENIA</h3>
				</div>

            <!-- premiery block -->
            <div class="premiery">
              <div class="row">
                <div class="col-sm-12 mb-5">
                  <?php if ( have_posts() ) : ?>
				   <?php while ( have_posts() ) : the_post(); ?>

	               <?php endwhile; ?>
				   <?php echo do_shortcode ('[wcp-carousel id="31932"]') ?>
                   <?php endif; ?>

              </div>




            </div>
            <!-- premiery block -->

            <?php
            echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="9" meta_key="" meta_value="" meta_compare="IN" meta_type="CHAR" meta_relation="AND" offset="15" scroll="false" transition_container_classes="row" progress_bar="true" progress_bar_color="ceee26" images_loaded="true" button_label="Więcej postów" button_loading_label="Ładuje..."]');
            ?>
            <?php
            echo do_shortcode('[smartslider3 slider=8]');
            ?>





          </div> <!-- end main-news/linia -->
        </div> <!-- end container -->





        </div>
    </main>
  <!-- END OF MAIN CONTENT -->

  <?php get_footer(); ?>
