<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
	'type' => 'upload',
	'label' => __('Choose Image', 'fw'),
	'desc' => __('Either upload a new, or choose an existing image from your media library', 'fw')
    ),
    'img_class' => array(
	'type' => 'text',
	'label' => __('Image Class', 'fw'),
    ),
);

