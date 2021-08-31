<?php 





// calling style resource
function blogpost_resource(){

    // get themeversion
    $version=wp_get_theme()->get('Version');

    wp_register_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',array(),'5.13.0','all');
    wp_enqueue_style('fontawesome');

    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(),'4.4.1','all');
    wp_enqueue_style('bootstrap');

    wp_register_style('customcss',get_template_directory_uri() . '/assets/css/custom.css',array(),$version,'all');
    wp_enqueue_style('customcss');

    
}

add_action('wp_enqueue_scripts','blogpost_resource');

// calling js_script
function blogpost_script_resource(){

    wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1','true','all');
    wp_enqueue_script('jquery');

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0','true','all');
    wp_enqueue_script('popper');
    
    wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1','true','true','all');
    wp_enqueue_script('bootstrap');

    wp_register_script('customjs',get_template_directory_uri() . '/assets/js/custom.js',array(),'true','all');
    wp_enqueue_script('customjs');

    
}

add_action('wp_enqueue_scripts','blogpost_script_resource');

// add theme support
function blogpost_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','blogpost_theme_support');


// menu function
function blogpost_menu(){
    $location = array(
        'primary'=>__('header'),
        'footer'=>__('footer')
    );
    register_nav_menus($location);
}

add_action('init','blogpost_menu');



