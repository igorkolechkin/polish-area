<?php
/*
* Template Name: Reviews
* Template Post Type: page
*/

get_header(); ?>

	<main>
    <?php get_template_part('layouts/global/titling', null, [
      'title' => get_the_title(),
      'bg' => get_post_thumbnail_id()
    ]);?>

    <section class="reviews-page__list">
			<div class="container">
				<?php get_template_part('layouts/global/reviews-list'); ?>
			</div>
    </section>
	</main>

<?php get_footer();