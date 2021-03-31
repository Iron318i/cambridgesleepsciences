<?php

/**
 * Declaring widgets
 *
 * @package Cambridge-Sleep-Sciences
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('widgets_init', 'cambridgesleepsciences_widgets_init');

if (!function_exists('cambridgesleepsciences_widgets_init')) {

    /**
     * Initializes themes widgets.
     */
    function cambridgesleepsciences_widgets_init() {
	register_sidebar(
		array(
		    'name' => __('Footer 1', 'cambridgesleepsciences'),
		    'id' => 'footer-1',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Footer 2', 'cambridgesleepsciences'),
		    'id' => 'footer-2',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Footer 3', 'cambridgesleepsciences'),
		    'id' => 'footer-3',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Footer 4', 'cambridgesleepsciences'),
		    'id' => 'footer-4',
		    'before_widget' => '<div class="widget">',
		    'after_widget' => '</div>',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
    }

} // End of function_exists( 'cambridgesleepsciences_widgets_init' ).
