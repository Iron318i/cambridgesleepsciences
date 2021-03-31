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
		    'phone' => array(
			'label' => __('Phone', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '+1 (869) 469-8889'
		    ),
		    'fb' => array(
			'label' => __('Facebook link', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'tw' => array(
			'label' => __('Twitter link', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'pint' => array(
			'label' => __('Pinterest link', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'in' => array(
			'label' => __('LinkedIn link', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'gplus' => array(
			'label' => __('Google+ link', 'aesthetix'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'scl' => array(
			'label' => __('Secure Customer Login', 'aesthetix'),
			'type' => 'text',
			'value' => 'https://ebanking.ibanknevis.com/APP_UBX_PROD/'
		    ),
		)
	    ),
	)
    )
);
