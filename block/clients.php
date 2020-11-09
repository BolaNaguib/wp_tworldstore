<!-- Swiper -->
<div class="swiper-container swiper-clients">
    <div class="swiper-wrapper">
        <?php if (have_rows('clients')) : ?>
            <?php while (have_rows('clients')) : the_row();
                //ACF Fields
                $image = get_sub_field('image');

            ?>
                <div class="swiper-slide">
                    <div class="filter-grayscale hover:filter-nograyscale transition duration-300 ease-in-out">
                        <img loading="lazy" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>



    </div>
    <!-- <div class="swiper-button-next swiper-clients-next"></div>
    <div class="swiper-button-prev swiper-clients-prev"></div> -->
</div>