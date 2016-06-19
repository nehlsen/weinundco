<?php
/*
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
*/

add_action( 'wp_enqueue_scripts', 'weinundco_styles' );
function weinundco_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

?>
