<?php

add_action('init', 'initialize_theme' );
function initialize_theme() { 
    /* Theme init scropts */
    add_action( 'wp_enqueue_scripts', 'plife_required_scripts' );
    /* After logout  */
    add_action('wp_logout','auto_redirect_after_logout');
}

function plife_required_scripts()
{
    /* theme init */
    wp_register_script('theme-init',get_stylesheet_directory_uri() .'/assets/js/theme-init.js', array ('jquery'),'1.0.0', false);
    wp_localize_script( 'theme-init', 'arg', array( 'is_mobile' => wp_is_mobile())); 
    wp_enqueue_script('theme-init');


     /* Swipper JS */
     wp_register_script('swipper-js',
     get_stylesheet_directory_uri() .'/assets/js/swiper-bundle.min.js', array ('jquery'),
     '1.0.0', false);
     wp_enqueue_script('swipper-js');
     wp_enqueue_style('amimate-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '4.1.1', 'all');
    /* Animate css */
    wp_enqueue_style('amimate-css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(),
        '4.1.1', 'all');
    /* Material Icons  */
    wp_enqueue_style( 'google-material-icons', get_stylesheet_directory_uri() . '/assets/css/google-material-icons.css', false );
    if(is_front_page())
    {
        wp_enqueue_style('home-page-custom', get_stylesheet_directory_uri() . '/assets/css/home-page-custom.css', array(),
            '1.0.0', 'all');
    }

}

function auto_redirect_after_logout(){
    wp_safe_redirect( home_url() );
    exit;
}