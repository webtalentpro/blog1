<?php


function belfast_theme_opt() {

    // Check function exists.
    if( function_exists('acf_add_options_sub_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme options Settings', 'belfast'),
            'menu_title'  => __('Theme options', 'belfast'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Header options', 'belfast'),
            'menu_title'  => __('Header', 'belfast'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('About Page', 'belfast'),
            'menu_title'  => __('About page', 'belfast'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Contact page', 'belfast'),
            'menu_title'  => __('Contact page', 'belfast'),
            'parent_slug' => $parent['menu_slug'],
        ));

           // Add sub page.
         $child = acf_add_options_sub_page(array(
        'page_title'  => __('Footer options', 'belfast'),
        'menu_title'  => __('Footer', 'belfast'),
        'parent_slug' => $parent['menu_slug'],


));
    }
}

add_action('acf/init', 'belfast_theme_opt');



















