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


/*
* NEXT / PREVIOUS PRODUCT BUTTON
*/

function bbloomer_next_product()
{
    ob_start();
    echo '<div class="next-button rounded-full bg-white inline-block text-main hover:text-secondary transition duration-300 ease-in-out  fixed bottom-0 left-0 m-6 z-10">';
    // 'product_cat' will make sure to return next/prev from current category
    $next = previous_post_link('%link', '<svg  style="width:40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-arrow-circle-left fa-w-16"><path fill="currentColor" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm28.9-143.6L209.4 288H392c13.3 0 24-10.7 24-24v-16c0-13.3-10.7-24-24-24H209.4l75.5-72.4c9.7-9.3 9.9-24.8.4-34.3l-11-10.9c-9.4-9.4-24.6-9.4-33.9 0L107.7 239c-9.4 9.4-9.4 24.6 0 33.9l132.7 132.7c9.4 9.4 24.6 9.4 33.9 0l11-10.9c9.5-9.5 9.3-25-.4-34.3z" class=""></path></svg>', true, ' ', 'product_cat');
    echo $next;
    echo '</div>';
    return ob_get_clean();
}
add_shortcode('woo-prod-next', 'bbloomer_next_product');


function bbloomer_previous_product()
{
    ob_start();
    echo '<div class="previous-button rounded-full bg-white  inline-block text-main hover:text-secondary transition duration-300 ease-in-out  fixed bottom-0 right-0 m-6 z-10">';
    // 'product_cat' will make sure to return next/prev from current category
    $previous = next_post_link('%link', '<svg style="width:40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-arrow-circle-right fa-w-16"><path fill="currentColor" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z" class=""></path></svg>', true, ' ', 'product_cat');
    echo $previous;
    echo '</div>';
    return ob_get_clean();
}
add_shortcode('woo-prod-previous', 'bbloomer_previous_product');
