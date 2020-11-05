<!-- START container mx-auto -->
<div class='container mx-auto bg-white '>

    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 p-2 pb-0">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <a href="#" class="rounded text-white group  text-center bg-fixed bg-cover relative shadow-lg overflow-hidden">
                <img class="object-cover h-full w-full group-hover:scale-125 transform transition duration-300 ease-in-out rounded overflow-hidden" src="https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg" alt="">
                <span class="text-small lg:text-l z-10 absolute left-0 bottom-0 ml-2 mb-2 xx text-white rounded p-2 px-4"> <?php woocommerce_page_title(); ?> </span>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </a>
        <?php endfor; ?>
    </div>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-2 p-2 pb-0">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <a href="#" class="rounded text-white group  text-center bg-fixed bg-cover relative shadow-lg overflow-hidden">
                <img class="object-cover h-full w-full group-hover:scale-125 transform transition duration-300 ease-in-out rounded overflow-hidden" src="https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg" alt="">
                <span class="text-small lg:text-l z-10 absolute left-0 bottom-0 ml-2 mb-2 xx text-white rounded p-2 px-4"> <?php woocommerce_page_title(); ?> </span>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </a>
        <?php endfor; ?>
    </div>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-4 p-2 pb-0">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <a href="#" class="rounded text-white group  text-center bg-fixed bg-cover relative shadow-lg overflow-hidden">
                <img class="object-cover h-full w-full group-hover:scale-125 transform transition duration-300 ease-in-out rounded overflow-hidden" src="https://www.inquirer.com/resizer/JmbnMe9pQTBvgUpraYaR6YBE5f8=/1400x932/smart/arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/KDHKAOOKANC2LHCOA3UNRVNQOE.jpg" alt="">
                <span class="text-small lg:text-l z-10 absolute left-0 bottom-0 ml-2 mb-2 xx text-white rounded p-2 px-4"> <?php woocommerce_page_title(); ?> </span>
                <p class="z-10 relative"><?php echo $queried_object->description ?></p>

            </a>
        <?php endfor; ?>
    </div>