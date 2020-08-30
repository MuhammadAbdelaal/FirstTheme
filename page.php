<?php 

/**
 * This is the default template that displayes all pages other than
 * the index.php template that displays blog posts by default
 */

get_header(); ?>

    <?php
    
    // wordpress posts loop to display posts and pages
    
    if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
            
            <h3><?php the_title(); ?></h3>
            
            <p><?php the_content(); ?></p>
            
        
        <?php endwhile;
    
    endif;
    ?>
    


<?php get_footer(); ?>