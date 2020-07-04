<?php get_header(); ?>
<!--  home page  -->

<!-- START container mx-auto -->
<div class='container mx-auto bg-white p-6'>

    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 p-2 pb-0">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="xx rounded text-white p-6 py-20 text-center bg-fixed bg-cover relative shadow-lg overflow-hidden" style=" 
    background: url('https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
">
                <h1 class="text-4xl z-10 relative"> <?php woocommerce_page_title(); ?> </h1>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </div>
        <?php endfor; ?>
    </div>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-2 p-2 pb-0">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <div class="xx rounded text-white p-6 py-20 text-center bg-fixed bg-cover relative shadow-lg overflow-hidden" style=" 
    background: url('https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
">
                <h1 class="text-4xl z-10 relative"> <?php woocommerce_page_title(); ?> </h1>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </div>
        <?php endfor; ?>
    </div>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-4 p-2 pb-0">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="xx rounded text-white p-6 py-20 text-center bg-fixed bg-cover relative shadow-lg overflow-hidden" style=" 
    background: url('https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
">
                <h1 class="text-4xl z-10 relative"> <?php woocommerce_page_title(); ?> </h1>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </div>
        <?php endfor; ?>
    </div>
    <?php include_once('block/products.php') ?>

    <?php if (have_posts()) : ?>
        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>
<!-- END container mx-auto -->






<?php get_footer(); ?>