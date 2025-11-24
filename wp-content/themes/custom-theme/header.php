<!doctype html>
<html lang="ru">

<head>
  <title><?= wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= IMAGES_URL; ?>favicon/apple-touch-icon.png">
  <link rel='shortcut icon' type='image/x-icon' href='<?= IMAGES_URL; ?>favicon/favicon.ico'>
  <link rel="icon" type="image/png" sizes="32x32" href="<?= IMAGES_URL; ?>favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= IMAGES_URL; ?>favicon/favicon-16x16.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
get_template_part('layouts/global/header/header'); ?>
