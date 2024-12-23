<?php
function blank_woocommerce_theme_setup() {
    // Add WooCommerce support
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'blank_woocommerce_theme_setup');