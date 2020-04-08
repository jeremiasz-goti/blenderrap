<?php

// nav-walker
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// rejestracja menu
function br_theme_setup(){
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'blender-theme' ),
	'secondary' => __( 'Premiery menu'),
    ) );
  }

add_action('after_setup_theme', 'br_theme_setup');

// konfiguracja excerpt na glownej stronie
function set_excerpt_lenght(){
  return 17;
}
add_filter('excerpt_length', 'set_excerpt_lenght');
add_theme_support('post-thumbnails');

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



// sidebar
function bt_widg_init($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="post-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	
		register_sidebar(array(
		'name' => 'Sidebar2',
		'id' => 'sidebar2',
		'before_widget' => '<div class="news-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}
add_action ('widgets_init', 'bt_widg_init');
// SLIDER

// informacja o smart slider
function adminNotifications() {
  include_once(ABSPATH.'wp-admin/includes/plugin.php');
  if(!is_plugin_active('smart-slider-3/smart-slider-3.php')) {
    echo '<div id ="allert" class="error">';
    echo '<p>Smart Slider is required for this theme. </p>';
    echo '</div>';
  }

}

// usuniecie share od jetpack
function remove_jp_sharing() {
    if ( is_singular( 'post' ) && function_exists( 'sharing_display' ) ) {
        remove_filter( 'the_content', 'sharing_display', 19 );
        remove_filter( 'the_excerpt', 'sharing_display', 19 );
    }
}
add_action( 'loop_start', 'remove_jp_sharing' );
add_filter( 'rp4wp_append_content', '__return_false' );



add_action('admin_notices', 'adminNotifications');

// nawigacja postow
function blender_post_navigation(){
	if(is_single()){
?>
	<div class="arrowNav">
		<div class="arrowLeft">
			<?php next_post_link('%link', '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>', FALSE); ?>
		</div>
		<div class="arrowRight">
			<?php previous_post_link('%link', '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>', FALSE); ?>
		</div>
	</div>
<?php
}
}
add_action('wp_footer', 'blender_post_navigation');

add_filter('the_time', 'dynamictime');
function dynamictime() {
  global $post;
  $date = $post->post_date;
  $time = get_post_time('G', true, $post);
  $mytime = time() - $time;
  if($mytime > 0 && $mytime < 7*24*60*60)
    $mytimestamp = sprintf(__('%s temu'), human_time_diff($time));
  else
    $mytimestamp = date(get_option('date_format'), strtotime($date));
  return $mytimestamp;
}

//function exclude_category_home( $query ) {
//if ( $query->is_home ) {
//$query->set( 'cat', '-15' );
//}
//return $query;
//}
 
//add_filter( 'pre_get_posts', 'exclude_category_home' );


// menu konfiguracyjne
//require_once get_template_directory().'/templates/admin.php';
