<?php
$title = get_field('fs-title');
$bg = get_field('fs-bg');
?>

<section class="first-screen color-white">
  <?php if ($bg) {
    echo wp_get_attachment_image($bg, '', false, ['alt' => $title, 'class' => 'bg-image']);
  } ?>

  <div class="container">
    <div class="first-screen__content">
      <h1><?= $title ?></h1>

      <p class="first-screen__subtitle">
        <?= get_field('fs-subtitle'); ?>
      </p>

      <a href="#call-us" class="first-screen__btn btn-hover">
        <?= pll__('call-to-us'); ?>
      </a>
    </div>
  </div>
</section>