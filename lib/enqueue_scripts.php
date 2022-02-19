<?php

function belfast_css_js(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri(  ) );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(  ).'/assest/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ).'/assest/css/bootstrap.min.css', array(), '3.3.5', 'all');
    wp_enqueue_style( 'owl', get_template_directory_uri(  ).'/assest/css/owl.css', array(), '1.1.9', 'all');
    wp_enqueue_style( 'main-css', get_template_directory_uri(  ).'/assest/css/style.css', array(), '1.1.9', 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri(  ).'/assest/css/responsive.css', array(), '1.1.9', 'all');

    wp_enqueue_script('jquery' );
    wp_enqueue_script('bootstrap', get_template_directory_uri(  ).'/assest/js/bootstrap.min.js', array(), '1.1.9', true );
    wp_enqueue_script('owl', get_template_directory_uri(  ).'/assest/js/owl.carousel.min.js', array(), '1', true );
    wp_enqueue_script('wow', get_template_directory_uri(  ).'/assest/js/wow.js', array(), '1.0.1', true );
    wp_enqueue_script('script', get_template_directory_uri(  ).'/assest/js/script.js', array(), '1.1.9', true );

}
add_action( 'wp_enqueue_scripts', 'belfast_css_js');









