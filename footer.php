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
        <p class="text-sm text-gray-600">2020 © yumyums. All rights reserved.</p>
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
</script>
</body>

</html>