<?php


/**
 * Add Actions
 */
add_action('after_setup_theme', 'addThemeSupports');
add_action('wp_enqueue_scripts', 'enqueueFrontEndAssets');


/**
 * Remove Actions
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/**
 * Tell WordPress our theme supports
 */
function addThemeSupports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


/**
 * Register navigation menus
 */
register_nav_menus([
    'primary' => __('Primary Navigation'),
    'secondary' => __('Secondary Navigation'),
]);


/**
 * Enqueue front end scripts & styles
 */
function enqueueFrontEndAssets()
{
    wp_enqueue_style('App', get_template_directory_uri() . '/dist/css/app.css', null, null, null);
    wp_enqueue_script('App', get_template_directory_uri() . '/dist/js/app.js', null, null, true);
}


/**
 * Register theme options page if ACF is enabled
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Theme Options');
}
