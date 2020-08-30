<?php 

/**
 * This template displays the main blog page that has the posts
 */

get_header(); ?>

    <?php
    
    // wordpress posts loop to display posts and pages

    if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
            
            <h3><?php the_title(); ?></h3>

            <!-- post meta -->
            <small>Posted on: <?php the_time('F j, Y')?> at <?php the_time('g:i a')?> 
                <br>
                <?php the_category(); ?>
            </small>
            <!-- end of post meta -->
            
            <!-- Featured Image -->
            <div class="thumbnail-image">
                <?php the_post_thumbnail(); ?>
            </div>
            <!-- End of Featured Image -->

            <p><?php the_content(); ?></p>
            
        
        <?php endwhile;
    
    endif;
    ?>
    


<?php get_footer(); ?>