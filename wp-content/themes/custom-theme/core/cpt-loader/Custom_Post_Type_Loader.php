<?php
if (!class_exists('Custom_Post_Type_Loader')) {
	class Custom_Post_Type_Loader {
		public function __construct() {
			add_action('init', [$this, 'register_all']);
		}
		public function register_all() {
			$this->load_files(get_template_directory() . '/core/cpt-loader/taxonomies/');
			$this->load_files(get_template_directory() . '/core/cpt-loader/post-types/');
		}
		private function load_files($dir) {
			if (is_dir($dir)) {
				foreach (glob($dir . '*.php') as $file) {
					require_once $file;
				}
			}
		}
	}
}
