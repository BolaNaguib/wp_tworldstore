<?php

$column = get_field('columns') ? get_field('columns') : '3';
?>
<!-- START container mx-auto -->
<div class='container mx-auto bg-white '>

    <div class="grid grid-cols-2 gap-2 md:grid-cols-<?php echo $column ?> p-2 pb-0">
        <?php if (have_rows('categories')) : ?>
            <?php while (have_rows('categories')) : the_row();
                //ACF Fields
                $term = get_sub_field('category');
                $category_image = get_sub_field('category_image');
                $img = $category_image ? $category_image['url'] : 'https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg';
            ?>
                <a href="<?php echo get_term_link($term[0]->term_id) ?>" class="rounded text-white group  text-center bg-fixed bg-cover relative shadow-lg overflow-hidden">
                    <img class="object-cover h-full w-full group-hover:scale-125 transform transition duration-300 ease-in-out rounded overflow-hidden" src="<?php echo $img ?>" alt="<?php echo $category_image['alt'] ?>" title="<?php echo $category_image['title'] ?>">
                    <span class="text-small lg:text-l z-10 absolute left-0 bottom-0 ml-2 mb-2  text-white rounded p-2 px-4">
                        <?php echo $term[0]->name ?>

                    </span>

                </a>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>


    <div class="grid-cols-2 grid-cols-3 grid-cols-4 grid-cols-1  "></div>