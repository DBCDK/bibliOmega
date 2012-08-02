<?php
/**
 * @file
 * Artesis Omega base theme implementation to display a help page.
 */
?>
  <div id="wrap-right">
    <div id="wrap-left">

      <div<?php print $attributes; ?>>
        <?php if (isset($page['header'])) : ?>
          <?php print render($page['header']['header']['branding']); ?>
          <?php print render($page['header']['header']['help']); ?>
        <?php endif; ?>

        <?php if (isset($page['content'])) : ?>
          <?php print render($page['content']); ?>
        <?php endif; ?>

        <?php if (isset($page['footer'])) : ?>
          <?php print render($page['footer']); ?>
        <?php endif; ?>

      </div>

    </div>
  </div>
