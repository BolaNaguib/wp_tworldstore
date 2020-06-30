<?php get_header(); ?>
<!--  home page  -->


<!-- START section -->
<div class='section my-10'>
    <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24" style="    background-image: radial-gradient(#5a67d8 2px, transparent 2px);
    background-size: 16px 16px;"></div>
    <!-- START container -->
    <div class='container mx-auto px-4'>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="shadow-md bg-white rounded  overflow-hidden ">
                    <div class=" overflow-hidden h-60 ">
                        <img class="transform duration-500 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/assets/img/lantern.jpg" alt="">

                    </div>
                    <div class="p-4">
                        <span class="font-bold text-xl mb-2"> Sky Lantern</span>
                        <hr class="my-4">
                        <div class="grid grid-cols-2 gap-4 md:grid-cols-2">
                            <div>
                                <span class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Category</span>
                            </div>
                        </div>
                        <hr class="my-4">


                        <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
                            <p class="font-bold text-xl">65 $</p>
                            <button class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">Add
                                to cart</button>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
    <!-- END container -->
</div>
<!-- END section -->


<?php get_footer(); ?>