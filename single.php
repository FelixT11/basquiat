<?php get_header();?>

    <main>
        
        <div class="blogText">
    
<!--        the wordpress loop  -->
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="singlePost"><?php the_content(); ?></div>
            
            <p class="authorName"><?php the_author(); ?></p>
            
            <p class="publishingDate"><?php the_date(); ?></p>
            
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

<!--        end wordpress loop  -->
            
        </div>
        
    </main>

<?php get_footer();?>