<?php

/**

*Template Name: About Page
*   
*@package WordPress
*@subpackage basquiat
*@since basquiat 1.0

**/

?>

<?php get_header();?>

    <main>
        
        <div class="aboutLoop">
    
<!--        the wordpress loop  -->
            <section class="synopsis">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title() ?></h2>        
                
            <?php the_content(); ?>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

<!--        end wordpress loop  -->
            
            </section>
        </div>
        
        
<?php dynamic_sidebar('bg1'); ?>
        
<section class="earlyYears">
    
<?php dynamic_sidebar('aboutTextOne'); ?>

</section>
        
<?php dynamic_sidebar('bg2'); ?>
        
<section class="commercialSuccess">
    
<?php dynamic_sidebar('aboutTextTwo'); ?>

</section>
        
<?php dynamic_sidebar('bg3'); ?>
        
<section class="personalProblems">
    
<?php dynamic_sidebar('aboutTextThree'); ?>

</section>
        
<?php dynamic_sidebar('bg4'); ?>
        
    </main>
    

<?php get_footer();?>