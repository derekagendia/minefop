<?php


function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//load js



function addjs()
{

    wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrapjs');
}

add_action('wp_enqueue_scripts', 'addjs');


add_theme_support( 'menus');

register_nav_menus(

    array(
        'top-menu' =>__('Top Menu', 'theme'),
    )
     
    );