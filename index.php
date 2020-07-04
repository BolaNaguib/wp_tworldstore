<?php get_header(); ?>
<!--  home page  -->

<!-- START container mx-auto -->
<div class='container mx-auto bg-white p-6'>
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