<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'devsneakers_theme_enqueue');

function devsneakers_theme_enqueue()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_filter('bloginfo', 'title_uppercase');
function title_uppercase($site_title)
{
    return strtoupper($site_title);
}



if (!function_exists('devsneakers_theme_register_nav_menu')) {

    function devsneakers_theme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'devsneakers_theme_register_nav_menu', 0);
}


function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'welcome-widgets-menus',
            'keywords'          => array('hero'),
        ));
    }
}

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}
