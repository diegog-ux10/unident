<?php

require_once get_template_directory() . "/inc/class-wp-bootstrap-navwalker.php";

function load_scripts(){
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array() , '5.1.3', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array() , '', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu',
        'footer_meni' => 'Footer Menu'
    )
);