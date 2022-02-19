<?php
function belfast_theme_register_required_plugins(){

    $plugins = array(
        array(
            'name'=>__('Contact Form 7','belfast'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export','belfast'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
      
        array(
            'name'=>__('Advanced Custom Fields','belfast'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields: Font Awesome Field','belfast'),
            'slug'=> 'advanced-custom-fields-font-awesome',
            'required'=> true,
        ),
        
        array(
            'name'=>__('Advanced Custom Fields Pro','belfast'),
            'slug'=> 'advanced-custom-fields-pro',
            'source'=> get_stylesheet_directory().'/pre-plugin/advanced-custom-fields-pro.zip',
            'required'=> true,
        ),              
                                  

    );

    $config= array(
        'id'=> 'belfast-plugin-active',
        'menu'=> 'Belfast Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'belfast_theme_register_required_plugins' );