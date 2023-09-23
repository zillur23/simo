<?php

// function enqueue function for foerver
function simo_files() {

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Mooli&family=Ysabeau+Office:ital,wght@0,1;0,400;0,600;1,200&display=swap');
    
    // wp_enqueue_style('simo_main_style', get_stylesheet_uri());
    wp_enqueue_style('simo_index_style', get_template_directory_uri().'/build/index.css');
    wp_enqueue_style('simo_style_index_style', get_template_directory_uri().'/build/style-index.css');
    wp_enqueue_script('simo_script_style', get_template_directory_uri().'/build/index.js', NULL, '1.0',true);
    wp_enqueue_script('main_javascript',get_theme_file_uri('/src/index.js'),NULL, '1.0',true);
    
}

add_action( 'wp_enqueue_scripts', 'simo_files' );

// get the page title action

function simo_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','simo_features');