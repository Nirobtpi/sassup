<?php
function saasup_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // menu bar 
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));
    // Register Fetures Post Type
    register_post_type('features', array(
        'labels' => array(
            'name' => 'Features Items',
            'add_new' => 'Add New Item',
            'add_new_item' => 'Add New Item',
            'edit_item' => 'Edit Item',
            'set_featured_image' => 'Add New Feture Image',
            'all_items' => 'View All Items'
        ),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
    // Register Pricing Post Type
    register_post_type('pricing', array(
        'labels' => array(
            'name' => 'Pricing Items',
            'add_new' => 'Add New Item',
            'add_new_item' => 'Add New Item',
            'edit_item' => 'Edit Item',
            'all_items' => 'View All Items'
        ),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cloud-saved',
        'supports' => array('title'),
    ));
    // Register Job Post Type 
    register_post_type('jobs', array(
        'labels'=>array(
            'name'=>'Job Post',
            'add_new'=>'Add New Job Post',
            'add_new_item'=>'Add New Job Item',
            'all_items'=>'View All Job',
            'edit_item'=>'Edit Job Post'
        ),
        'public' => true,
        'supports' => array('title'),
        'menu_position'=>5,
        'menu_icon'=> 'dashicons-spotify'
    ));
    // Register Job Post Type 
    register_post_type('social', array(
        'labels'=>array(
            'name'=>'Intergrations Social Icon',
            'add_new'=>'Add New Job Post',
            'add_new_item'=>'Add New Item',
            'all_items'=>'View All',
            'edit_item'=>'Edit Post'
        ),
        'public' => true,
        'supports' => array('title'),
        'menu_position'=>5,
        'menu_icon'=> 'dashicons-spotify'
    ));
};
add_action('after_setup_theme', 'saasup_theme_support');

// saasup css js 
function saassup_css_js()
{
    // css 
    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_register_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_register_style('style', get_stylesheet_uri());

    wp_enqueue_style('fontawesome');
    wp_enqueue_style('aos');
    wp_enqueue_style('owl-theme');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main-style');
    wp_enqueue_style('responsive-style');
    wp_enqueue_style('style');


    // js 
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_register_script('poper', get_template_directory_uri() . '/assets/js/popper.min.js');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_register_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
    wp_register_script('counter', get_template_directory_uri() . '/assets/js/countMe.min.js');
    wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
    wp_register_script('scriptmy', get_template_directory_uri() . '/assets/js/scripts.js');

    wp_enqueue_script('main-js');
    wp_enqueue_script('poper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('carousel');
    wp_enqueue_script('aos');
    wp_enqueue_script('counter');
    wp_enqueue_script('magnific-popup');
    wp_enqueue_script('scriptmy');
};
add_action('wp_enqueue_scripts', 'saassup_css_js');

function saasup_widgets()
{
    // siderbar register 
    register_sidebar(array(
        'id' => 'blog_siderbar',
        'name' => 'Blog Sidebar',
        'description' => 'Add Your Blog Widgets',
        'before_widget' => '<hr><div class="dynamic_sidebar saasup_%2$s"',
        'after_widget' => '</div>',

    ));
    register_sidebar(array(
        'id' => 'footer_widget_1',
        'name' => 'Footer Widget 1',
        'description' => 'Set Your Footer Widget',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_2',
        'name' => 'Footer Widget 2',
        'description' => 'Set Your Footer Widget',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_3',
        'name' => 'Footer Widget 3',
        'description' => 'Set Your Footer Widget',
        'before_widget' => '<div class="downlod_area">',
        'after_widget' => '</div>'
    ));
}
add_action('after_setup_theme', 'saasup_widgets');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

require_once('inc/codestar-framework/codestar-framework.php');
// require_once('inc/codestar-framework/samples/admin-options.php');
require_once('inc/codestar-framework/options.php');
