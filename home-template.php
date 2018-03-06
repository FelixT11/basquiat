<?php

/**

*Template Name: Home Page
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0

**/

?>

<?php get_header();?>

    <main>
        
        <div class="HomeLoop">
    
<!--        the wordpress loop  -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

<!--        end wordpress loop  -->
            
        </div>
        
    </main>
    

