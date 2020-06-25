<?php

//Load CSS
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

//Load JavaScript
function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support( 'custom-logo' );

// Menus
register_nav_menus(
    array(
        'top-menu' => "Top Menu Location",
        'footer-menu' => "Footer Menu Location",

    )
);


//Custom Logo
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 100,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Find any image classes in content and add bootstrap responsive image classes
function force_responsive_img($content)
{
    return preg_replace('/(<img.*class="[\w\s-*]*)(".*>)/iu', '$1 img-fluid my-3 $2', $content);
}

add_filter('the_content', 'force_responsive_img');
