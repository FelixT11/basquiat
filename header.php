<?php
    // declare $post global if used outside of the loop
    global $post;

    // check to see if the theme supports Featured Images, and one is set
    if (current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID )) {
            
        // specify desired image size in place of 'full'
        $page_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $page_bg_image_url = $page_bg_image[0]; // this returns just the URL of the image

    } else {
        // the fallback – our current active theme's default bg image
        $page_bg_image_url = get_background_image();
    }
?>

    <!DOCTYPE html>

    <html>

    <head>

        <title>Jean-Michel Basquiat</title>

        <link rel="icon" type="image" href="http://localhost/wp-content/uploads/2017/10/crown.png">

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/media-qu.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <?php wp_head() ?>
        
    </head>

    <body <?php body_class(); ?>>

        <header class="bg1" style="background-image: url('<?php echo $page_bg_image_url; ?>');">

            <div class="artistName">

                <input id="toggle-menu" type="checkbox">

                <label for="toggle-menu" class="menu-on"><i class="burger fa fa-bars"></i></label>

                <nav class="navLeft">

                    <?php wp_nav_menu(array('theme_location' => 'left')); ?>

                </nav>

                <div>
                
                <span><?php wp_nav_menu(array('theme_location' => 'home')); ?></span>
                    
                </div>    

                <nav class="navRight">

                    <?php wp_nav_menu(array('theme_location' => 'right')); ?>

                </nav>

            </div>

        </header>
