<div class="input__wrapper">
  <?php if (isset($args['label'])) { ?>
    <label for="<?= $args['name']; ?>"
           class="input__label<?= isset($args['labelClass']) ? (' ' . $args['labelClass']) : ''; ?>">
      <?= $args['label']; ?>
    </label>
  <?php } ?>
  <input type="<?= $args['type'] ?? 'text' ?>"
      <?= isset($args['data-type']) ? ('data-type="' . $args['data-type'] . '"') : ''; ?>
         name="<?= $args['name']; ?>"
         id="<?= $args['name']; ?>"
         class="input valid-input<?= isset($args['inputClass']) ? (' ' . $args['inputClass']) : ''; ?>"
         placeholder="<?= $args['placeholder']; ?>"
  >
</div>