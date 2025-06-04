<?php
function ygouniverse_enqueue_styles()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/output.css');
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
};

function ygouniverse_enqueue_scripts()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/src/main.js',true);
};


add_action('wp_enqueue_scripts', 'ygouniverse_enqueue_styles');
add_action('wp_enqueue_scripts', 'ygouniverse_enqueue_scripts');


register_nav_menus(
    array(
        'ygouniverse_main_menu' => 'Main Menu',
        'ygouniverse_footer_menu' => 'Footer Menu'
    )
);
add_theme_support('post-thumbnails');
add_theme_support('custom-logo', array('width' => 200, 'height' => 100, 'flex-height' => true, 'flex-width' => true));

function custom_excerpt_length($length)
{
    return 15; // Change this number to your desired word count
}
add_filter('excerpt_length', 'custom_excerpt_length');
