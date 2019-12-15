<?php 

function utils() {

  wp_enqueue_script('jquery-ui-accordion');
  wp_enqueue_script('custom-accordion', get_theme_file_uri('/js/modules/Accordion.js'), NULL, microtime(), true);
  wp_enqueue_script('main-javascript',  get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

  wp_register_style('jquery-custom-style',  get_stylesheet_directory_uri().'/css/jquery-ui-1.12.1/jquery-ui.css', array(), microtime(), false);
  wp_enqueue_style('jquery-custom-style');

  wp_enqueue_style('font-awesome',         '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('custom-google-fonts',  '//fonts.googleapis.com/css?family=Poppins&display=swap');
  wp_enqueue_style('main_styles',          get_stylesheet_uri(), NULL, microtime());

}

function features() {

  register_nav_menu('headerMenuLocation','Header Menu Location');
  register_nav_menu('footerMenuLocation','Footer Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('thumbnail', 290, 160, true);
  
}

function bs_no_redirect_404($redirect_url) {
    
  if (is_404()) {
    return false;
  }
  
  return $redirect_url;

}

function all_items($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    $query->set('posts_per_page', -1);
  }
}


function is_blog() {
  return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

add_action("pre_get_posts", "all_items");
add_action("wp_enqueue_scripts", "is_blog");
add_action("wp_enqueue_scripts", "utils");
add_action('after_setup_theme',  'features');
add_filter('redirect_canonical', 'bs_no_redirect_404');

