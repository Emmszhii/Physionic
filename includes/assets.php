<?php

function physionic__Assets() {
    wp_enqueue_style('physionic-style', get_template_directory_uri() . '/css/main.css', microtime());

    // wp_enqueue_style('fontAwesome-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css', microtime());
    
    // wp_enqueue_style('google-font-style', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap', microtime());
}

add_action('wp_enqueue_scripts', 'physionic__Assets');