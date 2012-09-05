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
          <div id="zone-header" class="zone zone-header clearfix container-24">
            <?php print render($page['header']['header']['branding']); ?>
            <?php print render($page['header']['header']['help']); ?>
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
