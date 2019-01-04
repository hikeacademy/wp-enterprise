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
			'default_value' => 'Como a gente pode te ajudar?',
		),
		array(
			'key' => 'field_5c24d3f40165e',
			'label' => 'Invite subtitle',
			'name' => 'startup_invite_subtitle',
			'type' => 'text',
			'default_value' => 'Diga-nos do que precisa.',
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
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		array(
			'key' => 'field_5c250b0b47099',
			'label' => 'Startup testimonial?',
			'name' => 'startup_testimonial',
			'type' => 'true_false',
			'message' => 'If this is a testimonial to be displayed in the startups landing page, make sure to check this.',
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

acf_add_local_field_group(array(
	'key' => 'group_5c2606832c38b',
	'title' => 'Question answer',
	'fields' => array(
		array(
			'key' => 'field_5c26068b86a16',
			'label' => 'Answer',
			'name' => 'question_answer',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5c2610b6ef3be',
			'label' => 'Startup question?',
			'name' => 'startup_question',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'questions',
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

acf_add_local_field_group(array(
	'key' => 'group_5c26253e18210',
	'title' => 'Partner logo',
	'fields' => array(
		array(
			'key' => 'field_5c262547922cc',
			'label' => 'Partner Logo image',
			'name' => 'partner_logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c2625711543a',
			'label' => 'Partner Logo image alt',
			'name' => 'partner_logo_alt',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'partners',
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

endif;
