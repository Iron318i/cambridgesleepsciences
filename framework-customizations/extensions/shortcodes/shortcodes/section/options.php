<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
	'label' => __('Section Title', 'fw'),
	'type' => 'text',
    ),
    'is_fullwidth' => array(
	'label' => __('Full Width', 'fw'),
	'type' => 'switch',
    ),
    'type' => array(
	'label' => __('Type', 'fw'),
	'type' => 'switch',
	'left-choice' => array(
	    'value' => 'section',
	    'label' => __('Section', '{domain}'),
	),
	'right-choice' => array(
	    'value' => 'div',
	    'label' => __('Div', '{domain}'),
	),
    ),
    'bgc' => array(
	'type' => 'select',
	'label' => __('Background Color', 'fw'),
	'choices' => array(
	    '' => 'None',
	    'bg-light-blue' => 'Light Blue',
	)
    ),
    'justify_content' => array(
	'type' => 'select',
	'label' => __('Justify content', 'fw'),
	'choices' => array(
	    '' => 'Center',
	    'justify-content-start' => 'Start',
	    'justify-content-end' => 'End',
	    'justify-content-around' => 'Around',
	    'justify-content-between' => 'Between',
	)
    ),
    'padding_top' => array(
	'label' => __('Top Padding size', 'fw'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'padding_bottom' => array(
	'label' => __('Padding Bottom', 'fw'),
	'type' => 'slider',
	'value' => 3,
	'properties' => array(
	    'min' => 0,
	    'max' => 5,
	    'step' => 1, // Set slider step. Always > 0. Could be fractional.
	),
    ),
    'background_image' => array(
	'label' => __('Background Image', 'fw'),
	'desc' => __('Please select the background image', 'fw'),
	'type' => 'background-image',
	'choices' => array(//	in future may will set predefined images
	)
    ),
    'custome_class' => array(
	'label' => __('Custome section class', 'fw'),
	'desc' => __('Insert Custome section class', 'fw'),
	'type' => 'text',
    ),
);
