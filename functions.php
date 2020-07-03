<?php
// Add WooCommerce support
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


// if (is_shop()) {
//     add_filter('woocommerce_enqueue_styles', '__return_false');
// }

/**
 * Added Different navbr classes
 */
add_filter('woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs');
function jk_woocommerce_breadcrumbs()
{
    return array(
        'delimiter'   => ' &#47; ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb bg-main rounded p-6" itemprop="breadcrumb">',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => _x('Home', 'breadcrumb', 'woocommerce'),
    );
}

function add_enqueue_styles()
{
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');
    wp_enqueue_style('material_icons',  'https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css');
    // wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.min.css', 1);
}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 10);
