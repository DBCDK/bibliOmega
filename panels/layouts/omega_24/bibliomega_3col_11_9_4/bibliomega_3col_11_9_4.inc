<?php

/**
 * Implements hook_panels_layouts().
 */
function bibliomega_bibliomega_3col_11_9_4_panels_layouts() {
  $items['bibliomega_3col_11_9_4'] = array(
    'title' => t('Three column 11-9-4'),
    'category' => t('bibliOmega: 24 column grid'),
    'icon' => 'bibliomega_3col_11_9_4.png',
    'theme' => 'bibliomega_3col_11_9_4',
    'admin css' => '../bibliomega_panels_24.css',
    'regions' => array(
      'left' => t('Left side'),
      'middle' => t('Middle column'),
      'right' => t('Right side'),
    ),
  );

  return $items;
}
