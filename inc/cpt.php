<?php

add_action('init', 'register_qectheme_post_type');

function register_qectheme_post_type() {
    /* Каталог */
    register_post_type('testimonial', array(
	'label' => 'Testimonials',
	'labels' => array(
	    'name' => 'Testimonials',
	    'singular_name' => 'Testimonial',
	    'project_name' => 'Testimonials',
	    'all_items' => 'All Testimonials',
	    'add_new' => 'Add Testimonial',
	    'add_new_item' => 'Add new Testimonial',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Testimonial',
	    'new_item' => 'New Testimonial',
	),
	'description' => '',
	'public' => false,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'show_in_menu' => true,
	'exclude_from_search' => true,
	'capability_type' => 'post',
	'supports' => array('title', 'editor'),
	'hierarchical' => false,
	'query_var' => true,
    ));
}
