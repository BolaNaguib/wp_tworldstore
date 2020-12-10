<!-- Hero Slider -->
<!-- Swiper -->
<section class="fw">
    <div class="swiper-container mb-4 ">

        <?php if (have_rows('slider')) : ?>
            <div class="swiper-wrapper ">

                <?php while (have_rows('slider')) : the_row();
                    $image = get_sub_field('image');
                    $url = get_sub_field('url');
                ?>
                    <div class="swiper-slide"><a href="<?php echo $url ?>">
                            <img src="<?php echo $image ? $image['url'] : 'https://via.placeholder.com/1232x500.png/f4f4f4/000' ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                        </a></div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>