<?php

wp_enqueue_style( 'ucmp-style', plugin_dir_url(__FILE__) . '../../assets/dist/style.css' );
wp_enqueue_script( 'ucmp-script', plugin_dir_url(__FILE__) . '../../assets/dist/script.js', array('jquery'), '1.0', true );
    

