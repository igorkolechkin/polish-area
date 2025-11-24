<?php

add_action('wp_enqueue_scripts', function() {
	if (is_front_page()) {
		wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css?t=' . time());
		wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/home.js?t=' . time());
	} else if (is_page_template('page-templates/reviews.php')) {

	} else if (is_404()) {
		wp_enqueue_style('404', get_template_directory_uri() . '/assets/css/404/index.css?t=' . time());
	}
});