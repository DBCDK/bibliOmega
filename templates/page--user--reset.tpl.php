<?php
$params = $_SERVER['QUERY_STRING'];

$path = base_path();
$params = $_SERVER['REQUEST_URI'];
$args = str_replace($path,'',$params);

drupal_goto('user/password_reset/'.$args);
?>

