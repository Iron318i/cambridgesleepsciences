<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image_hours' => array(
	'type' => 'upload',
	'label' => __('Hours Image 100x100 px', 'fw'),
    ),
    'hours' => array(
	'type' => 'text',
	'label' => __('Store Hours', 'fw'),
    ),
    'image_location' => array(
	'type' => 'upload',
	'label' => __('Location Image 100x100 px', 'fw'),
    ),
    'location' => array(
	'type' => 'wp-editor',
	'label' => __('Location', 'fw'),
    ),
);
