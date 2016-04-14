<?php
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_56a7a55157b76',
	'title' => 'Data Dashboard',
	'fields' => array (
		array (
			'key' => 'field_56bf7ba94a99e',
			'label' => 'Data Visualizations',
			'name' => 'data_visualizations',
			'type' => 'relationship',
			'instructions' => 'Select the data visualizations to appear in this section of the dashboard.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'data-viz',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
			),
			'elements' => '',
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
		array (
			'key' => 'field_56cc6fd37a092',
			'label' => 'Intro',
			'name' => 'intro',
			'type' => 'wysiwyg',
			'instructions' => 'Use this field for the introduction text.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'data',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

register_field_group(array (
	'id' => 'acf_data-viz',
	'title' => 'Data Viz',
	'fields' => array (
		array (
			'key' => 'field_5706a7b9330d2',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'select',
			'choices' => array (
				'false' => '(Select one)',
				'bar_chart' => 'Bar Chart',
				'pie_chart' => 'Pie Chart',
				'scatter_chart' => 'Scatter Chart',
				'table' => 'Table',
				'map' => 'CartoDB Map',
				'text' => 'Text / Image',
			),
			'default_value' => '',
			'allow_null' => 0,
			'multiple' => 0,
		),
		array (
			'key' => 'field_5706a82a330d3',
			'label' => 'Data Source',
			'name' => 'data_source',
			'type' => 'text',
			'instructions' => 'Paste sharable URL for Google Spreadsheet here.',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'bar_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'pie_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'scatter_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'table',
					),
				),
				'allorany' => 'any',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5706a8c7330d7',
			'label' => 'Options',
			'name' => 'options',
			'type' => 'textarea',
			'instructions' => 'Options for the chart in JavaScript object format.',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'bar_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'pie_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'scatter_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'table',
					),
				),
				'allorany' => 'any',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'formatting' => 'none',
		),
		array (
			'key' => 'field_5706a902330db',
			'label' => 'Columns',
			'name' => 'columns',
			'type' => 'textarea',
			'instructions' => 'Configurations for the view\'s columns in JavaScript object format.',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'bar_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'pie_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'scatter_chart',
					),
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'table',
					),
				),
				'allorany' => 'any',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'formatting' => 'none',
		),
		array (
			'key' => 'field_5706a945330df',
			'label' => 'CartoDB URL',
			'name' => 'cartodb_url',
			'type' => 'text',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'map',
					),
				),
				'allorany' => 'all',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5706a95e330e0',
			'label' => 'Static map image',
			'name' => 'static_map_image',
			'type' => 'image',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'map',
					),
				),
				'allorany' => 'all',
			),
			'save_format' => 'object',
			'preview_size' => 'medium',
			'library' => 'all',
		),
		array (
			'key' => 'field_5706a98e330e1',
			'label' => 'Data',
			'name' => 'text-based_data',
			'type' => 'wysiwyg',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_5706a7b9330d2',
						'operator' => '==',
						'value' => 'text',
					),
				),
				'allorany' => 'all',
			),
			'default_value' => '',
			'toolbar' => 'full',
			'media_upload' => 'yes',
		),
		array (
			'key' => 'field_5706a9d4330e2',
			'label' => 'Notes',
			'name' => 'description',
			'type' => 'wysiwyg',
			'default_value' => '',
			'toolbar' => 'basic',
			'media_upload' => 'no',
		),
		array (
			'key' => 'field_5706aa06330e3',
			'label' => 'Source',
			'name' => 'source',
			'type' => 'wysiwyg',
			'default_value' => '',
			'toolbar' => 'basic',
			'media_upload' => 'no',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'data-viz',
				'order_no' => 0,
				'group_no' => 0,
			),
		),
	),
	'options' => array (
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
		),
	),
	'menu_order' => 0,
));

endif;
