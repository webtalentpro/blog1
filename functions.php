<?php 


// enqueue scripts
require_once('lib/enqueue_scripts.php');

//theme sutup
require_once('lib/theme_sutep.php');

// widget file
require_once('lib/widgets.php');

require_once('lib/theme-options.php');

require_once('lib/plugin-activation.php');
require_once('lib/class-tgm-plugin-activation.php');







function post_excerpt_more($more){
    global $post;
    return '<br>';
}
add_action( 'excerpt_more', 'post_excerpt_more' );

function post_excerpt_length($length){
    return 15;
}
add_action( 'excerpt_length', 'post_excerpt_length');



// comment template placeholder text


function belfast_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'theme_text_domain' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Name',
                'comment form placeholder',
                ''
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder=" Website" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'belfast_comment_placeholders' );