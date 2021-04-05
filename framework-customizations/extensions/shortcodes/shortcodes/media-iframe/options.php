<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'map_iframe' => array(
	'label' => __('Iframe link', 'fw'),
	'type' => 'text'
    ),
    'ratio' => array(
	'type' => 'select',
	'label' => __('Aspect ratio', 'fw'),
	'choices' => array(
	    '1by1' => '1:1',
	    '4by3' => '4:3',
	    '16by9' => '16:9',
	    '21by9' => '21:9',
	)
    ),
);
