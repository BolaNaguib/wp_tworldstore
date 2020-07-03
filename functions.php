<?php
// Add WooCommerce support
add_theme_support('woocommerce');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

function add_enqueue_styles()
{
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');
    wp_enqueue_style('material_icons',  'https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css');
    // wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);

}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 1);
