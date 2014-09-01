<?php

ini_set('memory_limit', '512M');

// Disable preprocessing of CSS and JS.
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;
$update_free_access = TRUE;

$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'kkk_db',
      'username' => 'root',
      'password' => 'root',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);