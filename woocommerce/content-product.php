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
$image = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'single-post-thumbnail');
// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('', $product); ?>>

	<a href="<?php echo get_permalink($id) ?>">
		<div class="bg-white rounded shadow-md relative  rounded-lg  shadow-lg  mt-4">
			<div class="absolute top-0 left-0 ml-4 -mt-2 z-10">
				<?php $created = strtotime($product->get_date_created());
				if ((time() - (60 * 60 * 24 * 30)) < $created) : ?>
					<span class=" px-2 py-1  bg-secondary text-white rounded text-xs mr-2"> New </span>
				<?php endif; ?>
				<?php if ($product->stock_status != "instock") : ?>
					<span class=" px-2 py-1  bg-black text-white rounded text-xs mr-2"> Out Of Stock </span>
				<?php endif; ?>
				<?php if ($product->sale_price != "") : ?>
					<span class=" px-2 py-1  bg-main text-white rounded text-xs mr-2"> Sale </span>

				<?php endif; ?>
			</div>
			<div class="relative  flex items-center justify-center overflow-hidden">
				<img class="relative w-full transform duration-500 hover:scale-110" src="<?php echo $image[0]; ?>" alt="">
			</div>
			<div class="text-secondary absolute top-0 right-0">
				<?php echo do_shortcode('[ti_wishlists_addtowishlist]') ?>

			</div>


			<div class="text-center">
				<span class="block text-main   py-2 font-semibold text-sm"><?php echo the_title(); ?></span>
				<?php if ($price_html = $product->get_price_html()) : ?>
					<span class="block  text-black text-xs font-regular  pb-2 leading-none"><?php echo $price_html; ?></span>
				<?php endif; ?>
			</div>
		</div>

		<!-- <span class="visible lg:hidden block px-3 py-2 font-semibold text-sm text-center text-main sm:text-sm"><?php echo the_title(); ?></span> -->

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