<section class="reviews__wrapper">
  <div class="container">
    <h2><?= get_field('reviews-title'); ?></h2>

    <?php get_template_part('layouts/global/reviews-list', null, ['breakpoint' => 6]); ?>
  </div>
</section>