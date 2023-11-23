<?php 

function theme_files(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'custom-icon', get_template_directory_uri().'/assets/css/custom-icon.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri().'/assets/css/nice-select.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl.min', get_template_directory_uri().'/assets/css/owl.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick.min', get_template_directory_uri().'/assets/css/slick.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'itech_style', get_stylesheet_uri() );



    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'fontawesome', get_template_directory_uri().'/assets/js/fontawesome.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri().'/assets/js/nice-select.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri().'/assets/js/magnific.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'imageload', get_template_directory_uri().'/assets/js/imageload.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri().'/assets/js/tweenmax.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri().'/assets/js/waypoint.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri().'/assets/js/counterup.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true );

}
add_action('wp_enqueue_scripts', 'theme_files');

function itech_theme_supports(){
    //for loading theme textdomain
    load_theme_textdomain( 'mytheme', get_template_directory().'/languages' );

    //for generate automated feed links on head
    add_theme_support( 'automatic-feed-links');
     //for adding automatic title tag
     add_theme_support( 'title-tag');

     //for post thumbnails
     add_theme_support( 'post-thumbnails');

     //for menu register
     register_nav_menus(array(
        'main-menu' => __( 'Header Menu', 'itech' ),
        'footer-menu' => __( 'Footer Menu', 'itech' )
    ));
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )); 
    add_theme_support('customize-selective-refresh-widgets');

    //for custom logo
    // add_theme_support(array(
    //     'height' => 250,
    //     'width' => 250,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // ));

}
add_action( 'after_setup_theme', 'itech_theme_supports' );

//for widgets
function register_widgets(){
    register_sidebar(array(
        "name" => __("Footer 1","itech"),
        "id" => "footer_1",
        "description" => __("A widget area location to the right side in footer","itech"),
        "before_widget" => '<div class="col-lg-3 col-md-6" widget widget_about details>',
        "after_widget" => '</div>',
        "before_title" => '<h4 class="widget-title>',
        "after_title" => '</h4">',
    ));
    register_sidebar(array(
        "name" => __("Footer 2","itech"),
        "id" => "footer_2",
        "description" => __("A widget area location to the right side in footer","itech"),
        "before_widget" => '<div class="col-lg-3 col-md-6 widget widget_nav_menu">',
        "after_widget" => '</div>',
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4">',
    ));
    // register_sidebar(array(
    //     "name" => __("Footer 3","itech"),
    //     "id" => "footer_3",
    //     "description" => __("A widget area location to the right side in footer","itech"),
    //     "before_widget" => '<div class="col-lg-3 col-md-6">',
    //     "after_widget" => '</div>',
    //     "before_title" => '<h4>',
    //     "after_title" => '</h4">',
    // ));
    register_sidebar(array(
        "name" => __("Footer 4","itech"),
        "id" => "footer_4",
        "description" => __("A widget area location to the right side in footer","itech"),
        "before_widget" => '<div class="col-lg-3 col-md-6 widget widget_subscribe">',
        "after_widget" => '</div>',
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4">',
    ));
    register_sidebar(array(
        "name" => __("Search","itech"),
        "id" => "search",
        "description" => __("A widget area location to the right sidebar","itech"),
        "before_widget" => '<div class="sidebar-item search-form">',
        "after_widget" => '</div>', 
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4">',
    ));
    register_sidebar(array(
        "name" => __("Catagory","itech"),
        "id" => "catagory",
        "description" => __("A widget area location to the right sidebar","itech"),
        "before_widget" => '<div class="catagory-items">',
        "after_widget" => '</div>', 
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4">',
    ));
    register_sidebar(array(
        "name" => __("Tag","itech"),
        "id" => "tag",
        "description" => __("A widget area location to the right sidebar","itech"),
        "before_widget" => '<div class="tagcloud">',
        "after_widget" => '</div>', 
        "before_title" => '<h4 class="widget-title">',
        "after_title" => '</h4">',
    ));
}
 add_action( 'widgets_init', 'register_widgets' );

 //for custom post
function create_custom_post_type() {
    register_post_type( 'Sliders',
     array(
        'labels' => array(
            'name' => __( 'Sliders' ),
            'singular_name' => __( 'Slider' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
        )
    );
    register_post_type( 'Service',
    array(
       'labels' => array(
           'name' => __( 'Service' ),
           'singular_name' => __( 'Service' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
    register_post_type( 'Features',
    array(
       'labels' => array(
           'name' => __( 'Features' ),
           'singular_name' => __( 'Features' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
    register_post_type( 'Portfolio',
    array(
       'labels' => array(
           'name' => __( 'Portfolio' ),
           'singular_name' => __( 'Portfolio' )
       ),
       'public' => true,
       'has_archive' => true,
       'supports' => array( 'title', 'editor', 'custom-fields','thumbnail','page-attributes' )
       )
    );
   
    }
    add_action( 'init', 'create_custom_post_type' );

    
    function short_content(){
        $txt = get_the_excerpt();
        $txt = substr($txt, 0, 200);
        $txt .= '...';
        echo $txt;
    }
    flush_rewrite_rules(false)


?>