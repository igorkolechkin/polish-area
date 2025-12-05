<?php
$args = [
	'menu_icon'    => 'dashicons-text-page',
	'has_archive'  => true,
	'public'       => true,
	'show_in_rest' => true,
	'labels'       => [
		'name'               => 'Exercise',
		'singular_name'      => 'Exercise',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Added new Exercise',
		'edit_item'          => 'Change Exercise',
		'new_item'           => 'New Exercise',
		'view_item'          => 'View Exercise',
		'search_items'       => 'Search Exercises',
		'not_found'          => 'No Exercises found',
		'not_found_in_trash' => 'No Exercises found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Exercises',
	],
	'rewrite'     => ['slug' => 'exercises', 'with_front' => false],
	'supports'    => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'post-formats'],
	'taxonomies'  => ['exercises_cat']
];

register_post_type('exercises', $args);