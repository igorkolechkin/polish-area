<?php
$list = get_field('employee-list');
?>

<section class="employee__wrapper">
  <div class="container">
    <h2><?= get_field('employee-title') ?></h2>

    <p class="employee__subtitle text-center">
      <?= get_field('employee-subtitle') ?>
    </p>

    <?php if (is_array($list) && count($list) > 0) { ?>
      <div class="employee__list">
        <?php foreach ($list as $count => $item) { ?>
          <div class="employee__item">
            <?= wp_get_attachment_image($item['logo'], '', false, [
              'alt' => $item['name'] . ' ' . $item['position'],
              'class' => 'employee__item-image']);
            ?>
            <div class="employee__item-content">
              <p class="employee__item-name">
                <?= $item['name']; ?>
              </p>
              <p class="employee__item-position">
                <?= $item['position']; ?>
              </p>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>