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
		    'sh_fb' => array(
			'label' => __('SleepHub Facebook', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => 'https://www.facebook.com/MySleepHub'
		    ),
		    'sh_in' => array(
			'label' => __('SleepHub LinkidIn', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => 'https://www.linkedin.com/company/cambridge-sleep-sciences-ltd'
		    ),
		    'sh_insta' => array(
			'label' => __('SleepHub Instagram', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => 'https://www.instagram.com/mysleephub'
		    ),
		    'sh_tw' => array(
			'label' => __('SleepHub Twitter', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => 'https://twitter.com/My_SleepHub'
		    ),
		    'sh_yt' => array(
			'label' => __('SleepHub YouTube', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '#'
		    ),
		    'address' => array(
			'label' => __('Address', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => '115b Innovation Drive<br> Milton, England OX14 4RZ, GB'
		    ),
		    'email' => array(
			'label' => __('Email', 'cambridgesleepsciences'),
			'type' => 'text',
			'value' => 'hello@cambridgesleepsciences.com'
		    ),
		    'gtag_js' => array(
			'label' => __('Global site tag (gtag.js) - Google Analytics'),
			'type' => 'textarea',
		    ),
		)
	    ),
	    'headers-box' => array(
		'title' => __('Page headers', 'cambridgesleepsciences'),
		'type' => 'box',
		'options' => array(
		    'ph_blog' => array(
			'type' => 'upload',
			'label' => __('News header', 'cambridgesleepsciences'),
			'desc' => __('Choose Image 1920*375px', 'cambridgesleepsciences')
		    ),
		)
	    ),
	    'cta-box' => array(
		'title' => __('CTA Block', 'cambridgesleepsciences'),
		'type' => 'box',
		'options' => array(
		    'cta-blocks' => array(
			'type' => 'addable-popup',
			'label' => __('Block', 'cambridgesleepsciences'),
			'size' => 'large',
			'popup-options' => array(
			    'cta_img' => array(
				'type' => 'upload',
				'label' => __('Block image', 'cambridgesleepsciences'),
				'desc' => __('Choose Image 502*310px', 'cambridgesleepsciences')
			    ),
			    'cta_heading' => array(
				'type' => 'text',
				'label' => __('Heading', 'cambridgesleepsciences'),
			    ),
			    'cta_desc' => array(
				'type' => 'textarea',
				'label' => __('Description', 'cambridgesleepsciences'),
			    ),
			    'cta_link' => array(
				'label' => __('Link', 'cambridgesleepsciences'),
				'type' => 'multi-select',
				'population' => 'posts',
				'source' => 'page',
				'limit' => 1
			    ),
			),
			'limit' => 0, // limit the number of boxes that can be added
			'add-button-text' => __('Add', 'cambridgesleepsciences'),
			'sortable' => true,
			'template' => '{{- cta_heading }}', // box title
		    ),
		)
	    ),
	)
    ),
);
