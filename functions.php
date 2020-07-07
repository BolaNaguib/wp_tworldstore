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
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap');
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

/**
 * @snippet       Add input field to products - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

// -----------------------------------------
// 1. Show custom input field above Add to Cart

add_action('woocommerce_before_add_to_cart_button', 'bbloomer_product_add_on', 9);

function bbloomer_product_add_on()
{
    $value = isset($_POST['custom_text_add_on']) ? sanitize_text_field($_POST['_custom_text_add_on']) : '';
    echo '<div><label>Custom Text Add-On <abbr class="required" title="required">*</abbr></label><p><input name="custom_text_add_on" value="' . $value . '"></p></div>';
}

// -----------------------------------------
// 2. Throw error if custom input field empty

add_filter('woocommerce_add_to_cart_validation', 'bbloomer_product_add_on_validation', 10, 3);

function bbloomer_product_add_on_validation($passed, $product_id, $qty)
{
    if (isset($_POST['custom_text_add_on']) && sanitize_text_field($_POST['custom_text_add_on']) == '') {
        wc_add_notice('Custom Text Add-On is a required field', 'error');
        $passed = false;
    }
    return $passed;
}

// -----------------------------------------
// 3. Save custom input field value into cart item data

add_filter('woocommerce_add_cart_item_data', 'bbloomer_product_add_on_cart_item_data', 10, 2);

function bbloomer_product_add_on_cart_item_data($cart_item, $product_id)
{
    if (isset($_POST['custom_text_add_on'])) {
        $cart_item['custom_text_add_on'] = sanitize_text_field($_POST['custom_text_add_on']);
    }
    return $cart_item;
}

// -----------------------------------------
// 4. Display custom input field value @ Cart

add_filter('woocommerce_get_item_data', 'bbloomer_product_add_on_display_cart', 10, 2);

function bbloomer_product_add_on_display_cart($data, $cart_item)
{
    if (isset($cart_item['custom_text_add_on'])) {
        $data[] = array(
            'name' => 'Custom Text Add-On',
            'value' => sanitize_text_field($cart_item['custom_text_add_on'])
        );
    }
    return $data;
}

// -----------------------------------------
// 5. Save custom input field value into order item meta

add_action('woocommerce_add_order_item_meta', 'bbloomer_product_add_on_order_item_meta', 10, 2);

function bbloomer_product_add_on_order_item_meta($item_id, $values)
{
    if (!empty($values['custom_text_add_on'])) {
        wc_add_order_item_meta($item_id, 'Custom Text Add-On', $values['custom_text_add_on'], true);
    }
}

// -----------------------------------------
// 6. Display custom input field value into order table

add_filter('woocommerce_order_item_product', 'bbloomer_product_add_on_display_order', 10, 2);

function bbloomer_product_add_on_display_order($cart_item, $order_item)
{
    if (isset($order_item['custom_text_add_on'])) {
        $cart_item['custom_text_add_on'] = $order_item['custom_text_add_on'];
    }
    return $cart_item;
}

// -----------------------------------------
// 7. Display custom input field value into order emails

add_filter('woocommerce_email_order_meta_fields', 'bbloomer_product_add_on_display_emails');

function bbloomer_product_add_on_display_emails($fields)
{
    $fields['custom_text_add_on'] = 'Custom Text Add-On';
    return $fields;
}


/**
 * @snippet       Plus Minus Quantity Buttons @ WooCommerce Single Product Page
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

// -------------
// 1. Show Buttons

// add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_plus');

function bbloomer_display_quantity_plus()
{
    echo '<button type="button" class="plus bg-secondary px-3 text-white hover:bg-main" >+</button></div>';
}

// add_action('woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus');

function bbloomer_display_quantity_minus()
{
    echo '<div class="inline-block float-left mr-4 border border-secondary" ><button type="button" class="minus  bg-secondary px-3 text-white hover:bg-main" >-</button>';
}

// Note: to place minus @ left and plus @ right replace above add_actions with:
add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_minus');
add_action('woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_plus');



// -------------
// 2. Trigger jQuery script

add_action('wp_footer', 'bbloomer_add_cart_quantity_plus_minus');

function bbloomer_add_cart_quantity_plus_minus()
{
    // Only run this on the single product page
    if (!is_product()) return;
?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $('form.cart').on('click', 'button.plus, button.minus', function() {

                // Get current quantity values
                var qty = $(this).closest('form.cart').find('.qty');
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr('max'));
                var min = parseFloat(qty.attr('min'));
                var step = parseFloat(qty.attr('step'));

                // Change the value if plus or minus
                if ($(this).is('.plus')) {
                    if (max && (max <= val)) {
                        qty.val(max);
                    } else {
                        qty.val(val + step);
                    }
                } else {
                    if (min && (min >= val)) {
                        qty.val(min);
                    } else if (val > 1) {
                        qty.val(val - step);
                    }
                }

            });

        });
    </script>
    <style>
        .single-product div.product form.cart .quantity {
            float: none !important;
            margin: 0 !important;
            display: inline-block;
        }

        .woocommerce .quantity .qty {
            width: 40px;
            padding-left: 15px;
            text-align: center;
        }
    </style>
<?php
}

/*********************************************
 *               ACF Theme Settings           *
 **********************************************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}

/*********************************************
 *               Blocks Styling               *
 **********************************************/
function am_enqueue_admin_styles()
{
    wp_enqueue_style('uikit_css',  'https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css');
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap');
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.css');

    wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles');

/**
 * Custom block category
 */

function my_blocks_plugin_block_categories($categories)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'custom_blocks',
                'title' => __('Custom Blocks', 'mydomain'),
                // 'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter('block_categories', 'my_blocks_plugin_block_categories', 10, 2);

/*********************************************
 *               Adding Blocks                *
 **********************************************/
add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
        add_guttenberg_block('products');
        add_guttenberg_block('categories');
        add_guttenberg_block('contactform');
    }
}

function add_guttenberg_block($blockname)
{
    // register card block
    acf_register_block(array(
        'name'                => $blockname,
        'title'                => __($blockname),
        'description'        => __('A custom block.'),
        'render_callback'    => 'section_block_callback',
        'category'            => 'custom_blocks',
        'icon'                => 'admin-comments',
        // 'keywords'            => array($block_name),
    ));
}

/*********************************************
 *               Blocks Callback              *
 **********************************************/
function section_block_callback($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("block/{$slug}.php"))) {
        include(get_theme_file_path("block/{$slug}.php"));
    }
}
