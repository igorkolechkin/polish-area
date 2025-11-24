<?php
/**
 * Render navigation
 */
function renderNavMenu($menuName, $className): void {
	get_template_part('layouts/other/menu-nav', null,
		['menuName' => $menuName, 'menuClass' => $className]);
}


/**
 * Get posts list
 */

function getPosts($cat, $count = -1, $page = 0): array {
	return get_posts([
		'post_status' => 'publish',
		'category_name' => $cat,
		'post_type' => 'post',
		'posts_per_page' => $count,
		'order' => 'DESC',
		'paged' => $page,
	]);
}


/**
 * Get logo url
 */
function getCustomLogoUrl() {
	$custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
	return $custom_logo__url[0];
}