<?php

/**
 * Cambridge-Sleep-Sciences enqueue scripts
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('cambridgesleepsciences_scripts')) {

    /**
     * Load theme's JavaScript and CSS sources.
     */
    function cambridgesleepsciences_scripts() {
	// Get the theme data.
	//https://fonts.google.com/share?selection.family=Cinzel:wght@400;500%7CRaleway:wght@300;400;700
	wp_enqueue_style('fonts-styles', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', [], null);
	$the_theme = wp_get_theme();
	$theme_version = $the_theme->get('Version');
	$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');

	wp_enqueue_style('cambridgesleepsciences-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

	$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('cambridgesleepsciences-scripts', get_template_directory_uri() . '/js/theme.js', array(), $js_version, true);
    }

} // End of if function_exists( 'cambridgesleepsciences_scripts' ).

add_action('wp_enqueue_scripts', 'cambridgesleepsciences_scripts');

add_action('wp_print_styles', 'deregister_styles', 100);

function deregister_styles() {
    wp_deregister_style('contact-form-7-bootstrap-style');
    wp_deregister_style('frontend_inline_style');
}
