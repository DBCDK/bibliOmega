<?php
$params = $_SERVER['REQUEST_URI'];
drupal_goto('user/password_reset'.$params);
?>

