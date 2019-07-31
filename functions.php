<?php

# css load
function load_stylesheets()
    {
        wp_register_style('style', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
        wp_enqueue_style('style');
    }
add_action('wp_enqueue_scripts', 'load_stylesheets');

// js load
function loadjs() 
    {
        wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('customjs');
    }
add_action('wp_enqueue_scripts', 'loadjs');



# creating widgets
function create_widget($name, $id, $description) {
	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
// widgets 
create_widget("Page Sidebar", "page", "Displays on the side of the pages");
create_widget("Blog Sidebar", "blog", "Displays on the side of the blog section");



# enabling support for menu
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);



# enabling support for Post Thumbnails
add_theme_support('post-thumbnails');
add_image_size('smallest', 200, 112, true);
add_image_size('largest', 600, 338, true);



# set entry excerpt length
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

# filter the excerpt "read more" string.
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



# hide url form field
function wpadmin_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'wpadmin_remove_comment_url');



# if needed 
# ¿how to preload js? https://macarthur.me/posts/preloading-javascript-in-wordpress

?>