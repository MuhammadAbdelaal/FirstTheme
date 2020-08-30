<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Theme</title>
    <?php wp_head(); ?>
</head>

    <?php

        if( is_front_page()): //detect if this is the custom home page / the front page

            $first_body_classes = array('home-page', 'front-page'); //custom css classes

        endif;
    ?>

    <body <?php body_class( $first_body_classes); ?>>
    
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?> <!-- Display header menu -->
        
        <p>This is my header</p>
        
        <hr>
    