<?php

//Including all resourses for the site
function sh_script_resourses() {
    
    //name, absolute path, dependencies, version, in_footer
        
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '#' , true);
    
     wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4' , true);
}
add_action('wp_enqueue_scripts', 'sh_script_resourses');

   
function sh_style_resourses() {
    
    //name, absolute path, dependencies, version, media
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '#' , 'all');
    
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css' );
    
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet' );
    
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet');
    

}
add_action('wp_enqueue_scripts', 'sh_style_resourses');

function add_scripts() {
    wp_register_script('custom_script', home_url() . '/wp-content/themes/theme-shiatsu/js/custom_script.js', array( 'jquery' ));
    wp_enqueue_script('custom_script');
    
}  
add_action( 'wp_enqueue_scripts', 'add_scripts' );


//Theme support
function sh_theme_setup() {
    
    //Featured Image Support
    add_theme_support('post-thumbnails');
    //different sizes
    //width, height, hard-or soft cropping(hard)
    add_image_size('small-thumbnail', 200, 160, true);
   // add_image_size('normal-thumbnail', 260, 340, true); // 320, 420
    add_image_size('normal-thumbnail', 300, 300, true);
    add_image_size('large-thumbnail', 580, 360, true);


    add_image_size('banner-image', 920, 510, true);
    /*add_image_size('banner-image', 920, 610, array('left', 'top'
    ));*/
    
    //Nav menus
    register_nav_menus(array(
        'primary' =>__('Primary Menu')
    ));
    
    //Post formats
    //add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme', 'sh_theme_setup');


//New file for customizing big landing page
require get_template_directory(). '/inc/customizer.php';


//Excerpt lenght control
function set_excerpt_length() {
    return 50;
}
add_filter('excerpt_length', 'set_excerpt_length');


//Widget locations
function sh_init_widgets($id) {
    
    
    /*footer widgets*/
     register_sidebar(array(
        'name' => 'footer-links1',
        'id'   => 'footer-links1',
        'before_widget' => '<div class="footer-list">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));  
     register_sidebar(array(
        'name' => 'footer-links2',
        'id'   => 'footer-links2',
        'before_widget' => '<div class="footer-list">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));  
     
    register_sidebar(array(
        'name' => 'social-links',
        'id'   => 'social-links',
        'before_widget' => '<div class="social-links">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
    
     register_sidebar(array(
        'name' => 'Testimonials',
        'id'   => 'testimonials',
        'before_widget' => '<div class="slide">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name' => 'references',
        'id'   => 'references',
        'before_widget' => '<div class="references-box">',
        'after_widget'  => '</i></div>',
        'before_title'  => '',
        'after_title'   => ''
    ));  
    
    
     /*Three-Image-Box widgets*/
     register_sidebar(array(
        'name' => 'Image-Box1',
        'id'   => 'image-box1',
        'before_widget' => '<div class="image-box">',
        'after_widget'  => '</div>'
    ));  
     register_sidebar(array(
        'name' => 'Image-Box2',
        'id'   => 'image-box2',
        'before_widget' => '<div class="image-box">',
        'after_widget'  => '</div>'
    ));  
     register_sidebar(array(
        'name' => 'Image-Box3',
        'id'   => 'image-box3',
        'before_widget' => '<div class="image-box">',
        'after_widget'  => '</div>'
    ));  
        
    /*Image-Boxes widgets*/
     register_sidebar(array(
        'name' => 'Image-big',
        'id'   => 'image-big',
        'before_widget' => '<div class="image-big">',
        'after_widget'  => '</div>'
    ));  
    
    /*Link-Box widgets*/
     register_sidebar(array(
        'name' => 'Link-Box',
        'id'   => 'link-box',
        'before_widget' => '<div class="link-box">',
        'after_widget'  => '</div>'
    ));  
    
     
    
     
}
add_action('widgets_init', 'sh_init_widgets');


//Custom Post Types
function sh_custom_post_types () {
    
    $labels = array(
        'name' => 'Front Page Posts',
        'singular_name' => 'Front Page Post',
        'add_new' => 'Add Front Page Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Front Page Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true 
    );
    register_post_type('front-page-posts', $args);
   
    $labels = array(
        'name' => 'Contact Posts',
        'singular_name' => 'Contact Post',
        'add_new' => 'Add Contact Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Contact Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true 
    );
    register_post_type('contact-posts', $args);
    
    $labels = array(
        'name' => 'Treatment Posts',
        'singular_name' => 'Treatment Post',
        'add_new' => 'Add Treatment Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Treatment Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true 
    );
    register_post_type('treatment-posts', $args); 
    
     $labels = array(
        'name' => 'Enterprise Posts',
        'singular_name' => 'Enterprise Post',
        'add_new' => 'Add Enterprise Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Enterprise Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true 
    );
    register_post_type('enterprise-posts', $args);
    
    $labels = array(
        'name' => 'About Posts',
        'singular_name' => 'About Post',
        'add_new' => 'Add About Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search About Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true 
    );
    register_post_type('about-posts', $args);
    
}
add_action('init', 'sh_custom_post_types');



//Custom Taxonomies
function sh_custom_taxonomies () {
    
//new custom taxonomy hierarchical for video-posts
    $labels = array(
        'name' => 'Treatment Categories',
        'singular_name' => 'Treatment Category',
        'search_items' => 'Search Treatment Category',
        'all_items' => 'All Treatment Categories',
        'parent_item' => 'Parent Treatment Category',
        'parent_item_colon' => 'Parent Treatment Category:',
        'edit_item' => 'Edit Treatment Category',
        'update_item' => 'Update Treatment Category',
        'add_new_item' => 'Add New Treatment Category',
        'new_item_name' => 'New Treatment Category Name',
        'menu_name' => ' Treatment Categories',
    );
    
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' =>'featured-image-sections' ),
    );
    register_taxonomy('treatment-category', array( 'treatment-posts'), $args);

    
}
add_action('init', 'sh_custom_taxonomies');
