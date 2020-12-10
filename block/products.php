<?php
// ACF FIELDS 
$block_name = get_field('block_name') ? get_field('block_name') : 'Category';
$term = get_field('products_category');

?>
<!-- START section -->
<div class='section py-10 relative'>
    <div class="absolute top-0 left-0 -z-0 grid-indigo w-16 h-16 md:w-40 md:h-64 md:ml-0 md:mt-10 " style="z-index: -1;   background-image: radial-gradient(#dedede 2px, transparent 2px);
    background-size: 16px 16px;"></div>
    <div class="absolute bottom-0 right-0 -z-0 grid-indigo w-16 h-16 md:w-40 md:h-64 md:ml-0 md:mb-10 " style="z-index: -1;   background-image: radial-gradient(#dedede 2px, transparent 2px);
    background-size: 16px 16px;"></div>
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <a href="#" class=" text-xl lg:text-2xl bg-main inline-block px-4 py-1 mb-4 text-white rounded hover:bg-secondary transition duration-300 ease-in-out ">
            <?php echo $block_name ?></a>


        <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
            <?php

            if ($term) :
                $query = new WP_Query(array(
                    'post_type' => 'product',
                    'product_cat' => $term->slug,
                ));
            else :
                $query = new WP_Query(array(
                    'post_type' => 'product',
                ));
            endif;

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php global $product;
                    $url = get_permalink($product->id);
                    $name = get_the_title($product->id);
                    $id = $product->get_id();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'single-post-thumbnail');
                    ?>

                    <div <?php wc_product_class('', $product); ?>>

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




                    </div>


                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>


            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</div>
<!-- END section -->