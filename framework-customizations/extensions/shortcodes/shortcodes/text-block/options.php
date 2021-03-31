<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'justify_content' => array(
	'label' => __('Justify content', 'fw'),
	'type' => 'switch',
    ),
    'text' => array(
	'type' => 'wp-editor',
	'size' => 'large',
	'label' => __('Content', 'fw'),
	'desc' => __('Enter some content for this texblock', 'fw')
    ),
    'fsz' => array(
	'type' => 'select',
	'label' => __('Font Size', 'fw'),
	'choices' => array(
	    '' => '---',
	    'fsz-18' => '18px',
	    'fsz-16' => '16px',
	)
    ),
    'color' => array(
	'type' => 'select',
	'label' => __('Text color', 'fw'),
	'choices' => array(
	    '' => '---',
	    'text-blue' => 'Blue',
	    'text-cadet-blue' => 'Cadet Blue',
	    'text-black' => 'Black',
	)
    ),
    'mw' => array(
	'type' => 'text',
	'label' => __('Max Width', 'fw'),
	'desc' => __('Enter width in px', 'fw')
    ),
    'centered' => array(
	'type' => 'switch',
	'label' => __('Centered', 'fw'),
    ),
    'class' => array(
	'type' => 'text',
	'label' => __('Block class', 'fw'),
    ),
);
