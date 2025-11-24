<?php
$title = get_field('utp-title');
$bg = get_field('utp-bg');
$list = get_field('utp-list');
?>

<section class="utp__wrapper">
	<?php if ($bg) {
		echo wp_get_attachment_image($bg, '', false, ['alt' => $title, 'class' => 'bg-image sdf']);
	} ?>

	<div class="container">
		<h2><?= $title; ?></h2>

    <?php if (is_array($list) && count($list) > 0) { ?>
      <ul class="utp__list">
        <?php foreach ($list as $item) { ?>
          <li class="utp__item">
						<strong><?= $item['title']; ?></strong>
            <span class="utp__item-text">
              <?= $item['text']; ?>
            </span>
            <div class="utp__item-icon">
              <?= $item['icon']; ?>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php }?>

    <a href="#call-us" class="utp__btn btn-hover">
      <?= pll__('call-to-us'); ?>
    </a>
	</div>
</section>