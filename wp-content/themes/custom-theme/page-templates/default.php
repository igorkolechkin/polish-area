<?php
/*
* Template Name: Default
* Template Post Type: page
*/

get_header(); ?>

  <main class="default">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </main>

<?php get_footer();