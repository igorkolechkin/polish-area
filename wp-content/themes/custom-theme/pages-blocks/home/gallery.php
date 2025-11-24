<?php
$gallery = get_field('gallery');
$list = get_field('gallery-list');
?>

<section class="gallery__wrapper">
  <div class="container">
    <h2><?= get_field('gallery-title'); ?></h2>

    <div class="gallery__content">
      <?php
      $list = explode('/ ', $list);
      if (is_array($list) && count($list) > 1) { ?>
        <ul class="gallery__list">
          <?php foreach ($list as $item) { ?>
            <li class="gallery__list-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 78.369 78.369">
                <path d="M78.049 19.015 29.458 67.606a1.094 1.094 0 0 1-1.548 0L.32 40.015a1.094 1.094 0 0 1 0-1.547l6.704-6.704a1.095 1.095 0 0 1 1.548 0l20.113 20.112 41.113-41.113a1.095 1.095 0 0 1 1.548 0l6.703 6.704a1.094 1.094 0 0 1 0 1.548z" fill="#ffffff"/>
              </svg>
              <?= $item; ?>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>

			<?php if (is_array($gallery) && count($gallery) > 0) { ?>
        <div class="gallery swiper">
          <div class="swiper-wrapper">
						<?php foreach ($gallery as $image) { ?>
              <div class="gallery__item swiper-slide">
								<?= wp_get_attachment_image($image['id'], '', false, ['alt' => $image['alt']]); ?>
              </div>
						<?php } ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
			<?php } ?>
    </div>
  </div>
</section>