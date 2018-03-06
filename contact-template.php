<?php

/**

*Template Name: Conact Page
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0

**/

?>

<?php get_header();?>

    <main>
        
        <div class="contactLoop">
    
<!--        the wordpress loop  -->
            <section class="contactUs">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title() ?></h2>
                
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

<!--        end wordpress loop  -->
            </section>
        </div>

        <?php dynamic_sidebar('bg7'); ?>
   
        <section class="contactForm">
            <?php dynamic_sidebar('Contact-Form'); ?>
        </section>

        <?php dynamic_sidebar('bg8'); ?>
        
        <section class="quote">
        <h3><?php dynamic_sidebar('quote'); ?></h3>
        </section>
        
        <?php dynamic_sidebar('bg9'); ?>
        
        <section class="socialMedia">
        <h2><?php dynamic_sidebar('socialMedia'); ?></h2>
        </section>
        
        <?php dynamic_sidebar('bg10'); ?>
        
    </main>
    

<?php get_footer();?>