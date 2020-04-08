<?php /* Template Name: Koncerty */  ?>


<?php get_header(); ?>

  <!-- MAIN CONTENT -->

    <main role="main">



      <!-- KONCERTY -->

        <div class="container news news-single">
          <div class="main-news main-single">
            <div>
            </div>
            <div class="linia">
            </div>
          
              <div class="row premiera">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args=array(
                   'post_type'=>'post',
                   'cat' => 453,
                   'posts_per_page' => 12,
                   'paged'=>$paged
                );
                $temp = $wp_query;
                $wp_query= null;
                $wp_query = new WP_Query($args);

                /* PageNavi at Top */

                if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <a href="<?php the_permalink(); ?>">
                            <div class="recent-news-obj">
                              <div class="card recent-card">
                                <div class="card-img-wrap premiery-img"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                                </div>
                                  <div class="card-block">
                                    <h6 class="card-title recent-title"><b><?php the_title(); ?></b></h6></a>
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
