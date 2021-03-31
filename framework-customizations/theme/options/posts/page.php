<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'page-header' => array(
	'type' => 'box',
	'options' => array(
	    'banner_enable' => array(
		'type' => 'switch',
		'value' => true,
		'label' => __('Enable Header', '{domain}'),
	    ),
	    'banner_heading' => array(
		'type' => 'text',
		'label' => __('Custom Heading', '{domain}'),
	    ),
	    'banner_sub_heading' => array(
		'type' => 'text',
		'label' => __('Sub Heading', '{domain}'),
	    ),
	    'mobile_header_img' => array(
		'type' => 'upload',
		'label' => __('Custom mobile header image', 'business_omnigen'),
		'desc' => __('Choose Image 768*400px or bigger', 'business_omnigen')
	    ),
	),
	'title' => __('Page Header', '{domain}'),
	'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
);
