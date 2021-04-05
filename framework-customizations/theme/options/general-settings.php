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
			'label' => __('CSS YouTube', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'css_in' => array(
			'label' => __('CSS LinkidIn', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'sh_yt' => array(
			'label' => __('SleepHub YouTube', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'sh_in' => array(
			'label' => __('SleepHub LinkidIn', 'cambridgesleepsciences'),
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
		'desc' => __('Choose Image 1920*375px', 'cambridgesleepsciences')
	    ),
	)
    ),
    'cta-box' => array(
	'title' => __('CTA Block', 'aesthetix'),
	'type' => 'box',
	'options' => array(
	    'cta_img_1' => array(
		'type' => 'upload',
		'label' => __('Block image', 'cambridgesleepsciences'),
		'desc' => __('Choose Image 502*310px', 'cambridgesleepsciences')
	    ),
	    'cta_heading_1' => array(
		'type' => 'text',
		'label' => __('Heading', 'cambridgesleepsciences'),
	    ),
	    'cta_desc_1' => array(
		'type' => 'textarea',
		'label' => __('Description', 'cambridgesleepsciences'),
	    ),
	    'cta_link_1' => array(
		'type' => 'text',
		'label' => __('Link', 'cambridgesleepsciences'),
	    ),
	    'cta_img_2' => array(
		'type' => 'upload',
		'label' => __('Block image', 'cambridgesleepsciences'),
		'desc' => __('Choose Image 502*310px', 'cambridgesleepsciences')
	    ),
	    'cta_heading_2' => array(
		'type' => 'text',
		'label' => __('Heading', 'cambridgesleepsciences'),
	    ),
	    'cta_desc_2' => array(
		'type' => 'textarea',
		'label' => __('Description', 'cambridgesleepsciences'),
	    ),
	    'cta_link_2' => array(
		'type' => 'text',
		'label' => __('Link', 'cambridgesleepsciences'),
	    ),
	)
    ),
);
