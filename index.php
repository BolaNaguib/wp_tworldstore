<?php get_header(); ?>
<!--  home page  -->
<?php
$queried_object = get_queried_object();
?>
<!-- START container mx-auto bg-white -->
<div class='pb-6 mb-6'>
    <div class="xxx rounded text-white p-6 py-20 text-center bg-fixed bg-cover relative shadow-lg overflow-hidden" style=" 
    background: url('https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
">
        <h1 class="text-6xl z-10 relative"> <?php the_title(); ?> </h1>
        <p class="z-10 relative"><?php echo $queried_object->description ?></p>

    </div>
</div>
<!-- END container mx-auto bg-white -->


<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<!-- END container mx-auto -->


<!-- Swiper -->
<div class="swiper-container swiper-clients">
    <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 12; $i++) : ?>
            <div class="swiper-slide">
                <div class="filter-grayscale hover:filter-nograyscale transition duration-300 ease-in-out">
                    <img loading="lazy" src="https://navico-eg.com/wp-content/uploads/2020/10/Untitled-1-2.jpg" alt="">
                </div>
            </div>
        <?php endfor; ?>


    </div>
    <!-- <div class="swiper-button-next swiper-clients-next"></div>
    <div class="swiper-button-prev swiper-clients-prev"></div> -->
</div>




<?php get_footer(); ?>