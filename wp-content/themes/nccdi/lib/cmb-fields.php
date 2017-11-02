<?php

namespace Roots\Sage\CMB;

add_action( 'cmb2_init', function() {

	$prefix = '_cdi_';

	$cmb_featured_image = new_cmb2_box( array(
		'id'           => $prefix . 'featured_image_settings',
		'title'        => 'Featured Image Settings',
		'object_types' => array( 'post' ),
		'context'      => 'side',
		'priority'     => 'low',
	) );

	$cmb_featured_image->add_field( array(
		// 'name' => 'Featured Image Alignment',
		'id' => $prefix . 'featured_image_alignment',
		'type' => 'select',
		'options' => array(
			'contained' => 'Default',
			'hero' => 'Full-Width',
			'none' => 'Hidden'
		)
	) );

});

// ACF Pro
if( function_exists('register_field_group') ):

	register_field_group(array (
		'key' => 'group_54b81a88ad87a',
		'title' => 'Weekly Wrapup Articles',
		'fields' => array (
			array (
				'key' => 'field_54b81a9977461',
				'label' => 'Posts to include',
				'name' => 'posts_to_include',
				'prefix' => '',
				'type' => 'relationship',
				'instructions' => 'Select articles to include in Weekly Wrapup email. Sends Fridays at 3pm.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => '',
				'taxonomy' => '',
				'filters' => array (
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				),
				'elements' => '',
				'max' => '',
				'return_format' => 'object',
				'min' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'weekly-wrapup',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));
endif;
