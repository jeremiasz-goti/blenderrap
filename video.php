<?php /* Template Name: Video */  ?>


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
              <div class="row news-single-title">
                <div class="col-sm-12 mt-2 single-top-title premiera-top-title">
                  <h1><?php the_title(); ?></h1>
                </div>

              </div>
              <div class="linia">
              </div>
              <div class="row premiera">
                <?php
                  $query = new WP_Query( array( 'category_name' => 'video' ) );
                  if( $query->have_posts()  ) { ?>
                    <?php
                    while(  $query->have_posts()  ) { ?>
                      <?php $query->the_post(); ?>

                          <a class="title-link" href="<?php the_permalink(); ?>"></a>
                          <div class="col-sm-6 mb-5 mt-1 premiera-obj">
                            <a href="<?php the_permalink(); ?>">
                            <div class="card">
                              <div class="card-img-wrap"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Zdjecie newsa">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6 mb-5 mt-1 premiera-obj">
                            <div class="card-block">
                              <h5 class="card-title news-list-title"><?php the_title(); ?></h5></a>
                            </div>
                          </div></a>


                      <?php }
                wp_reset_postdata(); ?>
                <?php } ?>
              </div>
          </div> <!-- end single post -->




        </div> <!-- end container -->






    </main>
  <!-- END OF MAIN CONTENT -->

  <?php get_footer(); ?>
