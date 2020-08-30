<?php

function first_script_enqueue() {
    
    // inculde our custom css file
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/first.css', array(), '1.0.0', 'all');

    // inculde our custom css file
    wp_enqueue_script( "customjs", get_template_directory_uri() . '/js/first.js', array(), '1.0.0', true);

}

add_action("wp_enqueue_scripts", "first_script_enqueue");