<?php
// ACF FIELDS 
$fb = get_field('facebook', 'option') ? get_field('facebook', 'option') : '#';
$ig = get_field('instagram', 'option') ? get_field('instagram', 'option') : '#';
$tw = get_field('twitter', 'option') ? get_field('twitter', 'option') : '#';
$li = get_field('linkedin', 'option') ? get_field('linkedin', 'option') : '#';

$col1_title = get_field('col1_title', 'option') ? get_field('col1_title', 'option') : 'About Us';
$col1_caption = get_field('col1_caption', 'option') ? get_field('col1_caption', 'option') : 'Proin suscipit luctus orci placerat eat fringilla. Donec hendrerit laoreet risus volutpat mauris. Sed enim bibendum eu forest for ever';
$col2_title = get_field('col2_title', 'option') ? get_field('col2_title', 'option') : 'Head Office';
$email = get_field('email', 'option') ? get_field('email', 'option') : 'admin@admin.com';
$location = get_field('location', 'option') ? get_field('location', 'option') : '154 Av the good, New York ';
$phone = get_field('phone', 'option') ? get_field('phone', 'option') : '01234567890';
$phone_display = get_field('phone_display', 'option') ? get_field('phone_display', 'option') : '01234567890';
$col3_title = get_field('col3_title', 'option') ? get_field('col3_title', 'option') : 'Links';

?>

<style>
    .modal {
        transition: opacity 0.25s ease;
        z-index: 50;
    }

    body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>


<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Login!</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="forminput">
                <?php echo do_shortcode('[loginform]') ?>
            </div>


            <!--Footer-->
            <!-- <div class="flex justify-end pt-2">
                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div> -->

        </div>
    </div>
</div>


<!-- <section class="relative px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 text-center md:text-left -mt-32 col-span-2">
    <div class="flex flex-col md:flex-row items-center justify-between bg-blue-300 px-12 py-10 rounded-lg shadow-lg">
        <div class="w-full md:w-2/3">
            <h2 class="text-3xl leading-tight font-bold">Need help?</h2>
            <p class="mt-2 md:max-w-md">Contact our Customer Support that is always ready to help you with any possible questions, problems or
                information.</p>
        </div>

        <div class="w-full md:w-1/3 md:text-right mt-6 md:mt-0">
            <a href="#" class="inline-block px-6 py-4 bg-blue-600 text-white rounded-lg">Go to Support</a>
        </div>
    </div>
</section> -->

</div>
<footer class="relative bg-white px-4  pt-12 pb-10 text-center sm:text-left">
    <div class="grid lg:grid-cols-4 sm:flex-row sm:flex-wrap container container-lg mx-auto px-6">

        <div class="">
            <h6 class="text-sm text-main font-bold uppercase"><?php echo $col1_title ?></h6>
            <p class="text-black mt-4">
                <?php echo $col1_caption ?>
            </p>
        </div>

        <div class="">
            <h6 class="text-sm text-main font-bold uppercase"><?php echo $col2_title ?></h6>
            <ul class='mt-4'>
                <li class="flex items-center mb-2">
                    <span class=" w-4 h-4 mr-2 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span> <span>
                        <?php echo $location ?>
                    </span>
                </li>
                <li class="flex items-center  mb-2">
                    <span class=" w-4 h-4 mr-2 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span> <span><?php echo $email ?></span>
                </li>
                <li class="flex items-center  mb-2">
                    <span class=" w-4 h-4 mr-2 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </span> <a href="tel:<?php echo $phone ?>"><?php echo $phone_display ?></a>
                </li>
            </ul>

        </div>

        <div class="">
            <h6 class="text-sm text-main font-bold uppercase"><?php echo $col3_title ?></h6>
            <ul class='mt-4'>
                <?php if (have_rows('links', 'option')) : ?>
                    <?php while (have_rows('links', 'option')) : the_row();
                        //ACF Fields
                        $page_link = get_sub_field('page_link') ? get_sub_field('page_link') : '#';
                        $page_title = get_sub_field('page_title') ? get_sub_field('page_title') : 'Home';
                    ?>
                        <li class="flex items-center mb-2">
                            <a class="text-current hover:text-main transition duration-300 ease-in-out" href="<?php echo $page_link ?>"><?php echo $page_title ?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div>
            <h6 class="text-sm text-main font-bold uppercase mb-4">Instagram Feed</h6>

            <?php
            echo do_shortcode('[instagram-feed]');
            ?>
        </div>

    </div>

    <div class="mt-16 container mx-auto px-6">
        <hr class="mb-8">
        <div class="flex items-center  justify-between">
            <div>
                <p class="text-sm text-gray-600">2020 © TworldStore. All rights reserved — Developed with <svg class='w-3 h-3 mx-1 inline-block' aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16">
                        <path fill="#f00" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path>
                    </svg>
                    By
                    <a href="https://inetwork-me.com/" class="text-gray-500 ml-1" rel="noopener noreferrer" target="_blank">Inetwork-ME</a> </p>

            </div>
            <div>
                <div class="text-right text-main">
                    <ul class="flex content-center justify-right">
                        <?php if ($fb) : ?>
                            <li>
                                <a href="<?php echo $fb; ?>" class="text-gray-600 hover:text-main transition duration-300 ease-in-out px-2 py-2 block">
                                    <svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($ig) : ?>
                            <li>
                                <a href="<?php echo $ig; ?>" class="text-gray-600 hover:text-main  transition duration-300 ease-in-out px-2 py-2 block">
                                    <svg style="max-height:20px; min-height:20px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="107135984368664" theme_color="#ad46a8">
</div>
<table class="fixed hidden"></table>





<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(".nav-toggler").each(function(_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function() {
                $(target).animate({
                    height: "toggle"
                });
            });
        });
    });

    function addClasstoUpload() {
        const upload = document.getElementById('wau_file_addon');
        if (upload) {
            upload.parentElement.classList.add('uploadContainer');
        }
    }

    addClasstoUpload();
</script>
<script>
    const tabOneBlock = document.getElementById('tabOneBlock');
    const tabTwoBlock = document.getElementById('tabTwoBlock');
    const tabThreeBlock = document.getElementById('tabThreeBlock');
    const tabOneForm = document.getElementById('tabOneForm');
    const tabTwoForm = document.getElementById('tabTwoForm');
    const tabThreeForm = document.getElementById('tabThreeForm');
    if (tabOneBlock) {
        tabOneBlock.addEventListener('click', function() {
            tabOneForm.style.display = "block";
            tabTwoForm.style.display = "none";
            tabThreeForm.style.display = "none";
        });
        tabTwoBlock.addEventListener('click', function() {
            tabOneForm.style.display = "none";
            tabTwoForm.style.display = "block";
            tabThreeForm.style.display = "none";
        });
        tabThreeBlock.addEventListener('click', function() {
            tabOneForm.style.display = "none";
            tabTwoForm.style.display = "none";
            tabThreeForm.style.display = "block";
        });
    }
</script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-clients', {
        // direction: getDirection(),
        autoplay: {
            delay: 1000,
        },
        slidesPerView: 6,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-clients-next',
            prevEl: '.swiper-clients-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 50,
            },
        }
        // on: {
        //     resize: function() {
        //         swiper.slidesPerView: 6,;
        //     }
        // }
    });

    // function getDirection() {
    //     var windowWidth = window.innerWidth;
    //     var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    //     return direction;
    // }
</script>
</body>

</html>