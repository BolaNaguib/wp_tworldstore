<?php if (!is_front_page()) : ?>
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description') ?></title>

<?php endif; ?>
<meta name="title" content=" <?php the_field('meta_title'); ?> " />
<meta name="description" content=" <?php the_field('meta_description'); ?> " />
<meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />