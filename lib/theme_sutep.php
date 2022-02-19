<?php

function belfast_theme_setup(){

    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails', array('post', 'page'));
    load_theme_textdomain('belfast-textdomain', get_template_directory_uri(  ).'/languages' );
    add_image_size( 'post-image', 1920, 450, true );
    add_image_size( 'home-slidercaro-image', 400, 250, true );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "wp-block-styles" );
    add_theme_support( "html5" ) ;
    add_theme_support( "custom-logo") ;
    add_theme_support(  "custom-header") ;
    add_theme_support( "custom-background" ) ;
   
   register_nav_menus( array(
       'primary'=>__('Main Menu', 'belfast'),
   ) );
   

}
add_action( 'after_setup_theme', 'belfast_theme_setup' );