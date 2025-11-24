<?php
$firstList = get_field('about-list-1');
$secondList = get_field('about-list-2');
?>

<section class="about">
  <div class="container">
    <div class="about__title">
      <h2><?= get_field('about-title')?></h2>
    </div>
    <div class="about__text text-center">
      <?= get_field('about-text')?>
    </div>
    <div class="about__lists">
      <div class="about__list-wrapper">
        <p class="about__list-title"><?= get_field('about-list-1-title'); ?></p>
        <?php if (is_array($firstList) && count($firstList) > 0) { ?>
          <ul class="about__list">
            <?php foreach ($firstList as $item) { ?>
              <li class="about__list-item">
                <strong><?= $item['title']; ?></strong>
                <span><?= $item['text']; ?></span>
              </li>
            <?php } ?>
          </ul>
        <?php } ?>
      </div>

      <div class="about__list-wrapper">
        <p class="about__list-title"><?= get_field('about-list-2-title'); ?></p>
        <?php if (is_array($secondList) && count($secondList) > 0) { ?>
          <ul class="about__list">
            <?php foreach ($secondList as $item) { ?>
              <li class="about__list-item">
                <strong><?= $item['title']; ?></strong>
                <span><?= $item['text']; ?></span>
              </li>
            <?php } ?>
          </ul>
        <?php } ?>
      </div>
    </div>
  </div>
</section>