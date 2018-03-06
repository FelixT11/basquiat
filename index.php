<?php get_header();?>

<main>

    <section class="blog">

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php get_sidebar();  ?>
        </div>

        <!-- Use any element to open the sidenav -->
        <span class="burgerMenu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

        
        <?php get_sidebar();  ?>
                 
    
        <!--        the wordpress loop  -->



        <div class="mainBlog">
            <?php 
        if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
        ?>
            <div class="col-4 col-m-6 col-s-12">
                <article>

                    <div class="blogArticle">
                        <div class='blogContainer col-m-12'>
                            <h1 class="blogTitle">
                                <?php the_title(); ?>
                            </h1>
                            <!--
            <div class="content">
                <?php the_content(); ?>
            </div>
    -->
                            <div class="content">
                                <?php the_excerpt(); ?> </div>

                        </div>

                    </div>
                

                </article>
            </div>
            <?php 
        endwhile;
        else: 
        ?>
            <p>
                <?php _e('Sorry, this page does not exist.'); ?>
            </p>
            <?php endif; ?>
        </div>
    </section>

    <!--        end wordpress loop  -->


</main>


<?php get_footer();?>
