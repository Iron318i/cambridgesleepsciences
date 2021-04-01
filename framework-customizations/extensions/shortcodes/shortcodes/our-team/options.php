<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'persons' => array(
	'type' => 'addable-popup',
	'label' => __('Person', '{domain}'),
	'size' => 'large',
	'popup-options' => array(
	    'image' => array(
		'type' => 'upload',
		'label' => __('Image 502x362px', 'fw'),
		'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
	    ),
	    'heading' => array(
		'type' => 'text',
		'label' => __('Name', 'fw'),
	    ),
	    'position' => array(
		'type' => 'text',
		'label' => __('Position', 'fw'),
	    ),
	    'descriprion' => array(
		'type' => 'textarea',
		'size' => 'large',
		'label' => __('Description', 'fw'),
	    ),
	),
	'limit' => 0, // limit the number of boxes that can be added
	'add-button-text' => __('Add', '{domain}'),
	'sortable' => true,
	'template' => '{{- heading }}', // box title
    ),
);

