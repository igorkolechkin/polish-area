<?php
$args = [
	'menu_icon'    => 'dashicons-text-page',
	'has_archive'  => true,
	'public'       => true,
	'show_in_rest' => true,
	'labels'       => [
		'name'               => 'Статья',
		'singular_name'      => 'Статья',
		'add_new'            => 'Добавить новую Статью',
		'add_new_item'       => 'Добавить новую Статью',
		'edit_item'          => 'Исправить Статью',
		'new_item'           => 'Новая Статья',
		'view_item'          => 'Обзор Статьи',
		'search_items'       => 'Поиск Статьи',
		'not_found'          => 'Не найдена Статья',
		'not_found_in_trash' => 'Нет статья в корзине',
		'parent_item_colon'  => '',
		'menu_name'          => 'Статьи'
	],
	'rewrite'     => ['slug' => 'articles', 'with_front' => false],
	'supports'    => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'post-formats'],
	'taxonomies'  => ['article_cat']
];

register_post_type('articles', $args);