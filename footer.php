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
<footer class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-12 pb-10 text-center sm:text-left">
    <div class="flex flex-col sm:flex-row sm:flex-wrap container mx-auto px-6">
        <!-- <div class="mt-12 sm:w-1/2 lg:w-2/5 lg:mt-0 lg:pl-12">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-png.png" alt="yumyums">

            </div>
        </div> -->
        <div class="sm:w-1/2 lg:w-1/5">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Company</h6>
            <ul class="mt-4">
                <li><a href="#">Resources</a></li>
                <li class="mt-2"><a href="#">Careers</a></li>
            </ul>
        </div>

        <div class="mt-8 sm:w-1/2 sm:mt-0 lg:w-1/5 lg:mt-0">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Legal</h6>
            <ul class="mt-4">
                <li class="mt-2"><a href="#">Privacy Policy</a></li>
                <li class="mt-2"><a href="#">Terms of Use</a></li>
                <li class="mt-2"><a href="#">Disclosures &amp; Licensing</a></li>
            </ul>
        </div>

        <div class="mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Contact</h6>
            <ul class="mt-4">
                <li><a href="#">hello@yumyumsgallery.com</a></li>
                <li class="mt-2"><a href="#">+010 239 89330 </a></li>
            </ul>
        </div>


    </div>

    <div class="mt-16 container mx-auto px-6">
        <hr class="mb-8">
        <div class="flex items-center  justify-between">
            <div>
                <p class="text-sm text-gray-600">2020 © yumyums. All rights reserved.</p>

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
                                <a href="<?php echo $ig; ?>" class="text-gray-600  transition duration-300 ease-in-out px-2 py-2 block">
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






<?php wp_footer(); ?>
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
        console.log('hello');
        const upload = document.getElementById('wau_file_addon').parentElement.classList.add('uploadContainer');
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
</script>
</body>

</html>