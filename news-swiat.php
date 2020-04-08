<?php /* Template Name: News-Swiat */  ?>


<?php get_header(); ?>

<!-- MAIN CONTENT -->

<main role="main">



  <!-- NEWS SPIS -->

  <div class="container news news-single">
    <div class="main-news main-single">
      <div>
      </div>
      <div class="linia">
      </div>
      <div class="row np">

        <div class="col-sm-12 col-lg-8">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args=array(
             'post_type'=>'post',
             'cat' => 11,
             'posts_per_page' => 10,
             'paged'=>$paged
          );
          $temp = $wp_query;
          $wp_query= null;
          $wp_query = new WP_Query($args);

          /* PageNavi at Top */

          if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <div class="row np-row">

                            <a class="title-link" href="<?php the_permalink(); ?>">
                            <div class="col-sm-12 col-lg-5 mt-3 np-obj np-img">
                              <a href="<?php the_permalink(); ?>">
                              <div class="card">
                                <div class="card-img-wrap"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-12 col-lg-7 mt-3 np-obj np-opis">
                              <div class="card-block">
                                <h4 class="card-title np-title"><?php the_title(); ?></h4>
                                <h5 class="np-short">
                                  <?php the_excerpt(); ?>
                                </h5>
								  <h6>
									  <i class="far fa-clock opublikowane"> <?php the_time(); ?></i>
								  </h6></a>
                              </div>
                            </div></a>

                          </div>
          <?php
          endwhile; endif;
          ?>

                </div>
                <div class="col-lg-4 mt-3 d-none d-lg-block news-sidebar">
                  <?php if(is_active_sidebar('sidebar2')): ?>
                    <?php dynamic_sidebar('sidebar2'); ?>
                  <?php endif; ?>

                </div>
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



        </div>
      </main>
      <!-- END OF MAIN CONTENT -->

      <?php get_footer(); ?>
