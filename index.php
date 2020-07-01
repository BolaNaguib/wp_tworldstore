<?php get_header(); ?>
<!--  home page  -->


<!-- START section -->
<div class='section py-10 relative'>
    <div class="absolute top-0 left-0 -z-0 grid-indigo w-16 h-16 md:w-40 md:h-64 md:ml-0 md:mt-10 " style="z-index: -1;   background-image: radial-gradient(#dedede 2px, transparent 2px);
    background-size: 16px 16px;"></div>
    <div class="absolute bottom-0 right-0 -z-0 grid-indigo w-16 h-16 md:w-40 md:h-64 md:ml-0 md:mb-10 " style="z-index: -1;   background-image: radial-gradient(#dedede 2px, transparent 2px);
    background-size: 16px 16px;"></div>
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <a href="#" class=" text-xl lg:text-2xl bg-main inline-block px-4 py-1 mb-4 text-white rounded hover:bg-secondary transition duration-300 ease-in-out ">Category Name</a>
        <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="bg-white rounded shadow-md relative overflow-hidden  rounded-lg  shadow-lg">
                    <a href="">

                        <div class="relative  flex items-center justify-center">
                            <img class="relative w-full transform duration-500 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/assets/img/lantern.jpg" alt="">
                        </div>
                        <div class="absolute bottom-0 w-full text-white px-2 pb-2 mt-6">
                            <!-- <span class="block opacity-75 -mb-1">Category</span> -->
                            <div class="flex justify-between">
                                <span class="block bg-secondary rounded-full px-3 py-2 font-semibold text-sm">Sky Lantern</span>
                                <span class="block bg-main rounded-full text-white text-xs font-regular px-3 py-2 leading-none flex items-center">$36.00</span>
                            </div>
                        </div>
                    </a>

                </div>
            <?php endfor ?>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</div>
<!-- END section -->





<!-- START section -->
<!-- <div class='section my-10'>
    <!-- <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24" style="    background-image: radial-gradient(#5a67d8 2px, transparent 2px);
    background-size: 16px 16px;"></div> 
<div class='container mx-auto px-4'>
    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
        <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="shadow-md bg-white rounded  overflow-hidden ">
                <div class=" overflow-hidden h-60 ">
                    <img class="transform duration-500 hover:scale-110" src="<?php echo get_template_directory_uri() ?>/assets/img/lantern.jpg" alt="">

                </div>
                <div class="p-4">
                    <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Sky Lantern</a>

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
                    <hr>
                    <div class="flex justify-between items-center">
                        <span class="font-light text-gray-600">mar 10, 2019</span>
                        <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Design</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>
</div> -->
<!-- END section -->


<?php get_footer(); ?>