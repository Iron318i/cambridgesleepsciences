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
