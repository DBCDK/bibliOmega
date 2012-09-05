<?php
/**
 * @file
 * Bibliotek.dk theme implementation to display a pop-up help page.
 *
 * Copy this file to the active theme's '/templates' folder
 */
?>
  <div id="wrap-right">
    <div id="wrap-left">

      <div<?php print $attributes; ?>>
        <?php if (isset($page['header'])) : ?>
          <div id="zone-header" class="zone zone-header clearfix container-24">
          <?php print render($page['header']['header']['branding']); ?>
          </div>
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
