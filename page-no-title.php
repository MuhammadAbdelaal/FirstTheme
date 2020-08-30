<?php

/**
 * Template Name: Page with No Title
 * this template to display a page with no title.
 */

get_header(); ?>

    <?php
    
    // wordpress posts loop to display posts and pages
    
    if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
            
            
            <p><?php the_content(); ?></p>
            
        
        <?php endwhile;
    
    endif;
    ?>
    


<?php get_footer(); ?>