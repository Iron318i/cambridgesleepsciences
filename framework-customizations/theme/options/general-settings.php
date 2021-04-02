<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
	'title' => __('General', 'unyson'),
	'type' => 'tab',
	'options' => array(
	    'header-box' => array(
		'title' => __('Contacts', 'cambridgesleepsciences'),
		'type' => 'box',
		'options' => array(
		    'css_yt' => array(
			'label' => __('CSS YouTube', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'css_in' => array(
			'label' => __('CSS LinkidIn', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'sh_yt' => array(
			'label' => __('SleepHub YouTube', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'sh_in' => array(
			'label' => __('SleepHub LinkidIn', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		)
	    ),
	)
    ),
    'headers-box' => array(
	'title' => __('Page headers', 'aesthetix'),
	'type' => 'box',
	'options' => array(
	    'ph_blog' => array(
		'type' => 'upload',
		'label' => __('News header', 'aesthetix'),
		'desc' => __('Choose Image 1920*375px', 'aesthetix')
	    ),
	)
    ),
);
