<?php
$args = [
	'post_type' => ['article_cat'],
	'args'      => [
		'labels'  => [
			'name'              => 'Category',
			'singular_name'     => 'Categories',
			'search_items'      => 'Search Categories',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add new Category',
			'new_item_name'     => 'New Category name',
			'menu_name'         => 'Categories',
		],
		'rewrite' => [
			'slug'       => 'articles',
			'with_front' => false
		]
	]
];

register_taxonomy('article_cat', $args['post_type'], $args);