<?php
$params = $_SERVER['QUERY_STRING'];
drupal_goto('user/password_reset'.$_SERVER['REQUEST_URI']);
?>

