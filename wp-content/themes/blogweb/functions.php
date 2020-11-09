<?php

//adds dyn. title tag support-so that wordpress does it dynamically
add_theme_support('title_tag');

/*STEP1- Enqueing the CDN and js and booststrap and fonawesome dynamically using wordpress and php */
/*For CSS, fontawesome and bootstrap4 loading*/
function followandrew_register_styles(){
    $version = wp_get_theme()->get('Version'); /*dynamically getting the version*/

    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array('followandrew-bootstrap'), $version, 'all'); 
    wp_enqueue_style('followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('followandrew-fontawesome',  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles' ); /*Registering the  scripts*/

/*for js and jquery loading*/
function followandrew_register_scripts(){
    wp_enqueue_script('followandrew-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1',true);
    wp_enqueue_script('followandrew-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0',true);
    wp_enqueue_script('followandrew-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1',true);
    wp_enqueue_script('followandrew-main', get_template_directory_uri() ."/assets/js/main.js", array(), '1.0',true);
}

add_action('wp_enqueue_scripts', 'followandrew_register_scripts');



?>