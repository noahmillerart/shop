<?php
function noah_studio_shop_setup() {
    
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'noah_studio_shop_setup');

function noah_studio_shop_enqueue_styles() {
    
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'noah_studio_shop_enqueue_styles');
