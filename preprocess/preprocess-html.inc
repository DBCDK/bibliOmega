<?php

/**
 * Override or insert variables into the page template for HTML output.
 */
function bibliomega_alpha_process_html(&$variables) {
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}
