<?php

$settings_pages[] = [
    'menu_title'  => __( 'Cars Settings', 'wpfc-cars' ),
    'id'		  => 'cars-settings-page',
    'option_name' => 'General Settings',
    'position'    => 25,
    'parent'      => 'edit.php?post_type=car',
    'columns'     => 1,
    'tab_style'   => 'left',
    'icon_url'    => 'dashicons-admin-generic',
];

