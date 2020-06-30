<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumYumsGallery - Coming Soon </title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
</head>

<body class="bg-gray-100 ">
    <!-- START topmenu -->
    <div class='topmenu bg-white p-3 '>
        <div class="container mx-auto">
            test
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



    <nav class="flex items-center bg-gray-800 p-3 flex-wrap">
        <a href="#" class="p-2 mr-4 inline-flex items-center">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current text-white h-8 w-8 mr-2">
                <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" />
            </svg>
            <span class="text-xl text-white font-bold uppercase tracking-wide">Talwind CSS</span>
        </a>
        <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler" data-target="#navigation">
            <i class="material-icons">menu</i>
        </button>
        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
            <div class="lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto">
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Home</span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>About</span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Services</span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Gallery</span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Products</span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded text-gray-400 items-center justify-center hover:bg-gray-900 hover:text-white">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
        <div class="w-auto h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative">
            <input type="search" name="search" id="search" placeholder="Search" class="appearance-none w-full outline-none focus:outline-none active:outline-none" />
            <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>

    </nav>