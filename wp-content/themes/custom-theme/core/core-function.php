<?php
/**
 * Custom path to page templates
 */
function customPageTemplate($template) {
	if (is_page()) {
		$pageTemplateSlug = get_page_template_slug();

		if ($pageTemplateSlug) {
			$customTemplate = locate_template('pages/' . $pageTemplateSlug);

			if ($customTemplate) {
				return $customTemplate;
			}
		}
	}

	return $template;
}

add_filter('template_include', 'customPageTemplate');


/**
 * Add custom logo to site settings
 */
function custom_theme_setup(): void {
	add_theme_support('custom-logo', [
		'height' => 90,
		'width' => 290,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => ['site-title', 'site-description'],
		'unlink-homepage-logo' => true,
	]);

	register_nav_menus(['primary' => 'Основное']);
}

add_action('after_setup_theme', 'custom_theme_setup');


/**
 * Create nav menu tree
 */
function buildTree(array &$elements, $parentId = 0): array {
	$branch = [];

	foreach ($elements as &$element) {
		if ($element->menu_item_parent == $parentId) {
			$children = buildTree($elements, $element->ID);

			if ($children) {
				$element->child = $children;
			}

			$element->has_children = 1;
			$branch[$element->ID] = $element;

			unset($element);
		}
	}

	return $branch;
}


/**
 * Register additional options
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page([
		'page_title' => 'Настройки темы',
		'menu_title' => 'Настройки темы',
		'menu_slug' => 'theme-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	]);
}


/**
 * Add images to post-types
 */
add_theme_support('post-thumbnails');


/**
 * Set custom images size and deregister some default sizes
 */
add_filter('big_image_size_threshold', '__return_false');

add_filter('intermediate_image_sizes_advanced', function ($sizes) {
	unset($sizes['thumbnail']);
	unset($sizes['medium']);
	unset($sizes['1536x1536']);
	unset($sizes['2048x2048']);

	return $sizes;
});

add_action('after_setup_theme', function () {
	add_image_size('375', 375, 9999, false);
});