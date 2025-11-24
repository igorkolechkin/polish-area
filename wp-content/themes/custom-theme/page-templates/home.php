<?php
/*
* Template Name: Home
* Template Post Type: page
*/

get_header(); ?>

  <main class="page-home">
    <?php
    get_template_part('pages-blocks/home/first-screen');
    get_template_part('pages-blocks/home/about');
    get_template_part('pages-blocks/home/utp');
    get_template_part('pages-blocks/home/employee');
    get_template_part('pages-blocks/home/reviews');
    get_template_part('pages-blocks/home/gallery');
    ?>
  </main>

<?php get_footer();