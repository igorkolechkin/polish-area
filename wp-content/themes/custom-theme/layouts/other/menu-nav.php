<?php
$className = $args['menuClass'];
$menuName = $args['menuName'];

if (has_nav_menu($menuName)) {
  $object = get_nav_menu_locations();
  $menuArr = wp_get_nav_menu_items(wp_get_nav_menu_object($object[$menuName]));
  $menu = buildTree($menuArr); ?>

  <nav class="<?= $className; ?>__nav">
    <ul class="<?= $className; ?>__menu">
      <?php foreach ($menu as $item) {
        if (!empty($item)) { ?>
          <li class="<?= $className; ?>__menu-item">
            <a href="<?= $item->url; ?>" class="<?= $className; ?>__menu-link">
              <?= $item->title; ?>
            </a>

            <?php if (!empty($item->child)) { ?>
              <span class="<?= $className; ?>__menu-toggle"></span>

              <ul class="<?= $className; ?>__submenu">
                <?php foreach ($item->child as $subitem) { ?>
                  <li class="<?= $className; ?>__submenu-item">
                    <a href="<?= $subitem->url; ?>" class="<?= $className; ?>__submenu-link">
                      <?= $subitem->title; ?>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            <?php } ?>
          </li>
        <?php }
      } ?>
    </ul>
  </nav>

<?php }
