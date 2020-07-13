<!DOCTYPE html>
<html lang="en">

<?php
// ACF FIELDS
$logo = get_field('logo', 'options');
$header_custom_text = get_field('header_custom_text','options');
$fb = get_field('facebook','options');
$ig = get_field('instagram','options');
$header_js = get_field('header_js', 'options');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_template_part('common/seoheader'); ?>
    <?php wp_head(); ?>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

 
    <?php echo $header_js; ?>
</head>

<body <?php body_class('font-body tracking-wide'); ?> style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/shapes.svg');">

    <!-- START topmenu -->
    <div class='topmenu bg-main border-b'>
        <div class="container mx-auto ">
            <div class="grid grid-cols-3 gap-4  flex items-center">
                <div>
                    <span class="text-white mr-2"> <?php echo $header_custom_text ?> </span> 
                </div>
                <div class="text-center" > 
                <ul class="flex content-center justify-center">
                    <?php if($fb): ?>
                        <li>
                            <a href="<?php echo $fb; ?>" class="text-white px-2 py-2 block">
                            <svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-facebook-square fa-w-14"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path></svg> 
                           </a>
                        </li>
                        <?php endif; ?>
                        <?php if($ig): ?>
                        <li>
                            <a href="<?php echo $ig; ?>" class="text-white px-2 py-2 block">
                            <svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-twitter-square fa-w-14"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" class=""></path></svg>
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
           <div class="text-right">
           <ul class="flex content-center justify-end">
                        <?php global $woocommerce ?>
                        <li>
                            <a href="#" class="text-white px-2 py-2 block"><svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="far" data-icon="grin-hearts" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-grin-hearts fa-w-16">
                                    <path fill="currentColor" d="M353.6 304.6c-25.9 8.3-64.4 13.1-105.6 13.1s-79.6-4.8-105.6-13.1c-9.8-3.1-19.4 5.3-17.7 15.3 7.9 47.2 71.3 80 123.3 80s115.3-32.9 123.3-80c1.6-9.8-7.7-18.4-17.7-15.3zm-152.8-48.9c4.5 1.2 9.2-1.5 10.5-6l19.4-69.9c5.6-20.3-7.4-41.1-28.8-44.5-18.6-3-36.4 9.8-41.5 27.9l-2 7.1-7.1-1.9c-18.2-4.7-38.2 4.3-44.9 22-7.7 20.2 3.8 41.9 24.2 47.2l70.2 18.1zm188.8-65.3c-6.7-17.6-26.7-26.7-44.9-22l-7.1 1.9-2-7.1c-5-18.1-22.8-30.9-41.5-27.9-21.4 3.4-34.4 24.2-28.8 44.5l19.4 69.9c1.2 4.5 5.9 7.2 10.5 6l70.2-18.2c20.4-5.3 31.9-26.9 24.2-47.1zM248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200z" class=""></path>
                                </svg></a>
                        </li>
                        <li>
                            <a href="#" class="text-white px-2 py-2 block"><svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16">
                                    <path fill="currentColor" d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z" class=""></path>
                                </svg></a>
                        </li>
                        <li class="relative cartContainerx">
                            <a href="#" class="text-white px-2 py-2 block relative"><svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="gift" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-gift fa-w-16">
                                    <path fill="currentColor" d="M464 144h-39.3c9.5-13.4 15.3-29.9 15.3-48 0-44.1-33.4-80-74.5-80-42.3 0-66.8 25.4-109.5 95.8C213.3 41.4 188.8 16 146.5 16 105.4 16 72 51.9 72 96c0 18.1 5.8 34.6 15.3 48H48c-26.5 0-48 21.5-48 48v96c0 8.8 7.2 16 16 16h16v144c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304h16c8.8 0 16-7.2 16-16v-96c0-26.5-21.5-48-48-48zm-187.8-3.6c49.5-83.3 66-92.4 89.3-92.4 23.4 0 42.5 21.5 42.5 48s-19.1 48-42.5 48H274l2.2-3.6zM146.5 48c23.4 0 39.8 9.1 89.3 92.4l2.1 3.6h-91.5c-23.4 0-42.5-21.5-42.5-48 .1-26.5 19.2-48 42.6-48zM192 464H80c-8.8 0-16-7.2-16-16V304h128v160zm0-192H32v-80c0-8.8 7.2-16 16-16h144v96zm96 192h-64V176h64v288zm160-16c0 8.8-7.2 16-16 16H320V304h128v144zm32-176H320v-96h144c8.8 0 16 7.2 16 16v80z" class=""></path>
                                </svg> <span class="absolute bottom-0 right-0  bg-secondary text-xs w-4 h-4 text-center rounded-full mb-2">  <?php echo $woocommerce->cart->cart_contents_count ?></span></a>
                                <div class="cartContainer absolute right-0 z-50 bg-white top-0 mt-12 shadow border-md p-2 rounded" style="    width: 250px;">
                                <?php woocommerce_mini_cart() ?>

                                </div>
                            </li>

                    </ul>
           </div>
                   
            </div>
        </div>
    </div>
    
    <!-- END topmenu -->
    <style>
        @media (min-width: 1024px) {
            .top-navbar {
                display: inline-flex !important;
            }
        }
    </style>


    <!-- START bg-white -->
    <div class='bg-white'>
        <div class="container mx-auto">
            <nav class="flex items-center bg-white px-3 flex-wrap justify-between">
                <a href="#" class="p-2 mr-4 inline-flex items-center h-auto">
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title'] ?>">
                </a>
                <div>
                    <div class="flex justify-between  px-3 ">
                        <div> <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden mx-auto hover:text-white outline-none nav-toggler" data-target="#navigation">
                                <i class="material-icons">menu</i>
                            </button>
                            <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">


                                <ul class="lg:inline-flex lg:flex-row lg:mx-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto 
                                divide-x divide-gray-200">
                                <?php if (have_rows('menu','options')) : ?>                                    
                                <?php while (have_rows('menu','options')) : the_row(); 
                                //ACF Fields
                                $page_title = get_sub_field('page_title');
                                $page_link = get_sub_field('page_link'); ?>

                                    <li class="hoverable ">
                                        <a href="<?php echo $page_link; ?>" class="text-xl lg:inline-flex lg:w-auto w-full px-4 py-10 text-main items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                            <span><?php echo $page_title; ?></span>
                                        </a>
                                        <?php if (have_rows('sub_menu')) : ?>
                                        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-main">
                                            <div class="container mx-auto w-full flex flex-wrap justify-between mx-2 divide-x divide-white">
                                                 
                                                    <?php while (have_rows('sub_menu')) : the_row(); 
                                                    //ACF Fields
                                                    
                                                    ?>
                                                    
                                                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/4  border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                                    <?php 
                                                    $term = get_sub_field('main_category');
                                                    if( $term ): ?>
                                                    <?php echo var_dump($term) ?>
                                                        <div class="flex items-center">
                                                            <?php echo $term; ?>
                                                            <h3 class="font-bold text-xl text-white text-bold mb-2">
                                                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                                                <?php echo $term->name ;?> sssss
                                                                </a></h3>
                                                        </div>
                                                        <?php endif; ?>
                                                    
                                                        <ul>
                                                        <?php $postx = get_sub_field('sub_category');
                                                                    if ($postx) : ?>
                                                                    
                                                                        <?php foreach ($postx as $post) : // variable must be called $post (IMPORTANT) 
                                                                        ?>
                                                                        
                                                                            <?php setup_postdata($post); ?>
                                                            <li>
                                                                <a href="<?php echo esc_url( get_term_link( $post ) ); ?>" class="text-white text-sm"><?php echo $post->name ?> </a>
                                                            </li>
                                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  
                                                                            ?>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                         
                                                        </ul>
                                                    </ul>
                                                    
                                                    <?php endwhile; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </li>
                                    <?php endwhile; ?>
                                        <?php endif; ?>
                                  

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <form method="get" action="<?php echo home_url('/'); ?>" role="search">

                    <div class="w-auto h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative">

                        <input placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" type="search" id="search" class="appearance-none w-full outline-none focus:outline-none active:outline-none" />
                        <input type="hidden" name="post_type" value="product" />
                        <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>


            </nav>
        </div>
    </div>
    <!-- END bg-white -->


    <div class="container relative  mx-auto p-6 shadow bg-white" style="z-index: ">