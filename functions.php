<?php 
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function load_css(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
	wp_enqueue_style('fontawesome');


	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');

	wp_enqueue_style('fa-brands', get_template_directory_uri() . '/src/fonts/fa-brands-400.woff2', array(), false, 'all');
	wp_enqueue_style('fa-brands');
	wp_enqueue_style('fa-regular', get_template_directory_uri() . '/src/fonts/fa-regular-400.woff2', array(), false, 'all');
	wp_enqueue_style('fa-regular');
	wp_enqueue_style('fa-solid', get_template_directory_uri() . '/src/fonts/fa-solid-900.woff2', array(), false, 'all');
	wp_enqueue_style('fa-solid');
	
	wp_enqueue_style('Alata Regular', get_template_directory_uri() . '/src/fonts/Alata-Regular.woff2', array(), false, 'all');
	wp_enqueue_style('Alata Regular');
	wp_enqueue_style('Cinzel Bold', get_template_directory_uri() . '/src/fonts/Cinzel-Bold.woff2', array(), false, 'all');
	wp_enqueue_style('Cinzel Bold');
	wp_enqueue_style('Cinzel Regular', get_template_directory_uri() . '/src/fonts/Cinzel-Regular.woff2', array(), false, 'all');
	wp_enqueue_style('Cinzel Regular');
	wp_enqueue_style('DS', get_template_directory_uri() . '/src/fonts/DancingScript-VariableFont_wght.woff2', array(), false, 'all');
	wp_enqueue_style('DS');
	wp_enqueue_style('Raleway', get_template_directory_uri() . '/src/fonts/Raleway.woff2', array(), false, 'all');
	wp_enqueue_style('Raleway');
	



	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), 1.1, true);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'boostrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), 1.1, true);
	wp_enqueue_script('bootstrapjs');

	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array(), 1.0, true);
	wp_enqueue_script('mainjs');
	

	
}

add_action('wp_enqueue_scripts', 'load_css');

?>