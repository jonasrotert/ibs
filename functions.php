<?php
add_theme_support('post-thumbnails');
//set_post_thumbnail_size(150, 100);

// Include widgets.
require_once(get_template_directory() . '/includes/sidebars.php');

// Include shortcodes.
require_once(get_template_directory() . '/includes/shortcodes.php');
// Activate shortcodes.
add_action('init', 'register_shortcodes');

add_filter('widget_text', 'do_shortcode');

// Include breadcrumb function.
require_once(get_template_directory() . '/includes/breadcrumbs.php');

remove_filter('pre_user_description', 'wp_filter_kses');

add_filter('gallery_style', create_function('$a', 'return "<div class=\'gallery\'>";'));

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'Main', __( 'Primary Menu', 'ibs' ) );
}