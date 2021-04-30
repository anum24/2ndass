<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

    function enqueue_parent_styles() {
       wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
       wp_enqueue_style( 'child', get_stylesheet_directory_uri().'/style.css', array('parent-style'));
    }
?>