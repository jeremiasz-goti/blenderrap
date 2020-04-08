<?php get_header(); ?>

  <!-- MAIN CONTENT -->

    <main role="main">

	<!-- skrypt jQuery do usuwania komentarzy dodawanych w postach dopisac instrukcje warunkowa x >2 -->
	<script>
		jQuery(document).ready(function() {
			jQuery('.fb-comments').eq(0).remove();
		});

	</script>



      <!-- news -->


        <div class="container news news-single">

          <div class="main-news main-single">
			<div></div>
            <div class="linia2">

            </div>


            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <div class="row news-single-title">
                <div class="col-sm-12 mt-2 single-top-title">
                  <h1><?php the_title(); ?></h1>
                  <h5>Opublikowano: <?php the_time(); ?></h5>
				  <h5>Autor: <?php the_author(); ?></h5>

                </div>

              </div>


            <div class="row single-post-thumb">
              <div class="col-sm-12 col-lg-8 mt-1 single-content">
                <img class="img-responsive mx-auto d-block" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
				<div class="kontent-text">
					<?php the_content(); ?>
				  </div>

				  <div class="post-tags">
				  <?php the_tags( 'TAGI: ', ', ', '<br />' ); ?>

              </div>




              </div>
			  <div class="col-lg-4 mt-1 d-none d-lg-block post-sidebar">
				  <?php if(is_active_sidebar('sidebar')): ?>
				  	<?php dynamic_sidebar('sidebar'); ?>
				  <?php endif; ?>


				</div>

            </div>

			<div class="row post-tags">
              <div class="col-sm-12 col-md-8 mb-2 post-tags">


              </div>

            </div>
			<div class="row post-info">

              <div class="col-xs-6 col-sm-6 col-md-4 post-stats sharing">
                <?php if ( function_exists( 'sharing_display' ) ) { echo sharing_display(); } ?>
              </div>
			  <div class="col-xs-6 col-sm-6 col-md-4 post-stats ratings">
				  <h3 class="sharedaddy sd-title ratings-title">Oceń:</h3>
					  <?php if(function_exists('the_ratings')) { the_ratings(); } ?>


				</div>


            </div>


          </div> <!-- end single post -->


            <?php endwhile;
			?>
            <?php else : ?>
              <p><?php __('Brak postów'); ?></p>
            <?php endif; ?>


            <div class="linia recent-line">
              <h6>Powiązane:</h6>
            </div>

            <!-- powiazane posty -->
			<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

          	rp4wp_children();

	}
	// end while
} // end if
?>


            <div class="linia recent-line">
              <h6>Najnowsze newsy:</h6>
            </div>


            <!-- najnowsze posty -->
                  <div class="row recent-news"> <!-- recent row -->

                    <?php
                      $nowe = new WP_Query( array(
                        'posts_per_page' => 4,
                        ));
                    ?>

                    <?php if ( $nowe->have_posts() ) : ?>
                    <?php while ( $nowe->have_posts() ) : $nowe->the_post(); ?>
                    <!-- start kolumny -->
                    <div class="col-xs-6 col-sm-6 col-md-3">
                      <a href="<?php the_permalink(); ?>">
                      <div class="recent-news-obj">
                        <div class="card recent-card">
                          <div class="card-img-wrap"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                          </div>
                            <div class="card-block">
                              <h6 class="card-title recent-title"><b><?php the_title(); ?></b></h6></a>
                            </div></a>
                          </div>
                      </div>
                    </div>
                    <!-- koniec kolumny -->

                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>

                  <?php else : ?>
                    <p><?php __('Brak postów'); ?></p>
                  <?php endif; ?>
                </div> <!-- end recent row -->
              <div class="linia recent-line">
                <h6>Komentarze:</h6>
              </div>
				<div class="komentarze">
					<div class="fb-comments" data-numposts="10" data-width="100%"></div>
				</div>





        </div> <!-- end container -->






    </main>
  <!-- END OF MAIN CONTENT -->

  <?php get_footer(); ?>
