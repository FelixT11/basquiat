<?php

/**

*Template Name: Portfolio Page
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0

**/

?>

<?php get_header();?>

    <main>
        
        <div class="portfolioLoop">
    
<!--        the wordpress loop  -->
            <section class="portfolio">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
                
 

            <?php dynamic_sidebar('artGallery1'); ?>

    
<!--        end wordpress loop  -->
            </section>
        </div>
        
<?php dynamic_sidebar('bg5'); ?>  
        
<section class="quote">

    <?php dynamic_sidebar('quote2'); ?>
    
</section>
        
<?php dynamic_sidebar('bg6'); ?> 

<section class="portfolio">
    
<?php dynamic_sidebar('artGallery2'); ?>

</section>
        
    </main>
    

<?php get_footer();?>