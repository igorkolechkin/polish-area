<?php
$args = [
	'post_type' => ['exercises'],
	'args'      => [
		'hierarchical' => true,
		'labels'       => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item'         => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Categories',
		],
		'show_in_rest' => true,
		'rewrite'      => [
			'slug'       => 'exercise-category',
			'with_front' => false,
		],
	]
];

register_taxonomy('exercises_cat', $args['post_type'], $args['args']);