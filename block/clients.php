<!-- Swiper -->
<div class="swiper-container swiper-clients swiper2">
    <div class="swiper-wrapper flex items-center">
        <?php if (have_rows('clients')) : ?>
            <?php while (have_rows('clients')) : the_row();
                //ACF Fields
                $image = get_sub_field('image');
                $cat_url = get_sub_field('cat_url');

            ?>
                <div class="swiper-slide">
                    <a class="filter-grayscale hover:filter-nograyscale transition duration-300 ease-in-out" href="<?php echo $cat_url; ?>">
                        <img loading="lazy" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>



    </div>
      <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination2 hidden"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-next2  hidden"></div>
        <div class="swiper-button-prev swiper-button-prev2  hidden"></div>
    <!-- <div class="swiper-button-next swiper-clients-next"></div>
    <div class="swiper-button-prev swiper-clients-prev"></div> -->
</div>