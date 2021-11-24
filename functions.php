<?php 

function load_scripts(){
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array() , '', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_scripts');