<?php
/**
 * @file
 * Template file for bibdk_help_menu
 */
?>
<ul id="user-help-menu">
<?php foreach ($links as $link) { ?>
  <li>
    <?php print l($link['title'], $link['href'], $link); ?>
  </li>
<?php } ?>
</ul>
