<?php

// loard required plugins
$filepath = plugin_dir_path( __DIR__ ) . '/vendor/autoload.php';

if (file_exists($filepath)) {
    require_once(plugin_dir_path( __DIR__ ) . '/vendor/autoload.php');
}  