<?php
define('ASSETS_URI', get_template_directory_uri() . '/assets/');
define('IMAGES_URL', get_template_directory_uri() . '/assets/images/');

require_once get_template_directory() . '/core/core-function.php';
require_once get_template_directory() . '/core/theme-functions.php';
require_once get_template_directory() . '/core/enqueue-assets.php';

require_once get_template_directory() . '/core/includes/register-post-types.php';

require_once get_template_directory() . '/core/ajax-queries.php';