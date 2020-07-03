<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
$id = $product->get_id();
// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('bg-white rounded shadow-md relative overflow-hidden  rounded-lg  shadow-lg', $product); ?>>

	<a href="<?php echo get_permalink($id) ?>">

		<div class="relative  flex items-center justify-center">
			<img class="relative w-full transform duration-500 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/assets/img/lantern.jpg" alt="">
		</div>
		<div class="absolute bottom-0 w-full text-white px-2 pb-2 mt-6">
			<!-- <span class="block opacity-75 -mb-1">Category</span> -->
			<div class="flex justify-between">
				<span class="block bg-secondary rounded-full px-3 py-2 font-semibold text-sm"><?php echo the_title(); ?></span>
				<?php if ($price_html = $product->get_price_html()) : ?>
				<span class="block bg-main rounded-full text-white text-xs font-regular px-3 py-2 leading-none flex items-center price"><?php echo $price_html; ?></span>
			<?php endif; ?>
			</div>
		</div>
	</a>





	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action('woocommerce_before_shop_loop_item');

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action('woocommerce_before_shop_loop_item_title');

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action('woocommerce_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action('woocommerce_after_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action('woocommerce_after_shop_loop_item');
	?>
</li>