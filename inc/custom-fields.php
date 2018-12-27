<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c24d340453dc',
	'title' => 'Startup Invite (above footer)',
	'fields' => array(
		array(
			'key' => 'field_5c24d3530165b',
			'label' => 'Invite title',
			'name' => 'startup_invite_title',
			'type' => 'text',
			'default_value' => 'Lorem ipsum?',
		),
		array(
			'key' => 'field_5c24d3f40165e',
			'label' => 'Invite subtitle',
			'name' => 'startup_invite_subtitle',
			'type' => 'text',
			'default_value' => 'Lorem ipsum dolor sit amet.',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'startup-template.php',
			),
		),
	),
));

acf_add_local_field_group(array(
	'key' => 'group_5c24cf5217d78',
	'title' => 'Student Invite (above footer)',
	'fields' => array(
		array(
			'key' => 'field_5c24cf67f116f',
			'label' => 'Invite Title',
			'name' => 'student_invite_title',
			'type' => 'text',
			'default_value' => 'E aí, você vem?',
		),
		array(
			'key' => 'field_5c24cfe9f1170',
			'label' => 'Invite subtitle',
			'name' => 'student_invite_subtitle',
			'type' => 'text',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'student-template.php',
			),
		),
	),
));
acf_add_local_field_group(array(
	'key' => 'group_5c2509c9c6a98',
	'title' => 'Testimonial',
	'fields' => array(
		array(
			'key' => 'field_5c2509d947095',
			'label' => 'Author name',
			'name' => 'author_name',
			'type' => 'text',
		),
		array(
			'key' => 'field_5c250a8247096',
			'label' => 'Author role/location',
			'name' => 'author_role',
			'type' => 'text',
		),
		array(
			'key' => 'field_5c250a9247097',
			'label' => 'Testimonial',
			'name' => 'testimonial',
			'type' => 'textarea',
			'rows' => 4,
		),
		array(
			'key' => 'field_5c250aa547098',
			'label' => 'Author photo',
			'name' => 'author_photo',
			'type' => 'image',
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
		),
		array(
			'key' => 'field_5c250b0b47099',
			'label' => 'Startup testimonial?',
			'name' => 'startup_testimonial',
			'type' => 'true_false',
			'instructions' => 'If this is a testimonial to be displayed in the startups landing page, make sure to check this.',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonials',
			),
		),
	),
));

endif;