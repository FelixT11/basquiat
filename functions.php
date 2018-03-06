<?php register_nav_menus(array(
//    'main' => 'Main Menu',
    'left' => 'Left Menu',
    'right' => 'Right Menu',
    'home' => 'Home Menu',
    'container_class' => 'navMenu',
    'footer_menu' => 'Footer Menu',
    'sidebar_menu' => 'Sidear Menu',
));


// Register Sidebar 

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '<div class="widgetContainer">',
        'after_widget' => '</div>',
        'class' => '',
        'before_title' => '<h5 class="sidebarTitle">',
        'after_title' => '</h5>',
    ));


// Register Contact Form

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Contact-Form',
        'before_widget' => '',
        'after_widget' => '',
        'class' => 'contactForm',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Quote

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'quote',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Socialmedia

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'socialMedia',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Text

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'aboutTextOne',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Text

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'aboutTextTwo',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Text

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'aboutTextThree',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Art Gallery 1

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'artGallery1',
        'before_widget' => '',
        'after_widget' => '',
        'class' => 'portfolioWidget',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Art Gallery 2

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'artGallery2',
        'before_widget' => '',
        'after_widget' => '',
        'class' => 'portfolioWidget',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// Register Art Gallery 2

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'quote2',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 1

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg1',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 2

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg2',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 3

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg3',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 4

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg4',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 5

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg5',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

// Register Background Image 6

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg6',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


// Register Background Image 7

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg7',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


// Register Background Image 8

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg8',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));



// Register Background Image 9

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg9',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));



// Register Background Image 10

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'bg10',
        'before_widget' => '',
        'after_widget' => '',
        'class' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


// Register Sidebar 

if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'footer',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'class' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));


//Replace the excerpt "Read More" text by a link

function new_excerpt_more($more) {
    global $post;
  return '<br><a class="read-more" href="' . get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wpdocs_custom_excerpt_lenght( $lenght ) {
    return 20;
}
add_filter( 'excerpt_lenght', 'wpdocs_custom_excerpt_lenght', 999 );




function marchand_script_enqueue(){

    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/application.js', array(), true );
    
}

add_action( 'wp_enqueue_scripts', 'marchand_script_enqueue');




//Add Feature Image

add_theme_support( 'post-thumbnails' );
