<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumYumsGallery - Coming Soon </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css" integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
</head>

<body class="bg-gray-100 font-body tracking-wide" <?php body_class() ?>>

    <!-- START topmenu -->
    <div class='topmenu bg-secondary'>
        <div class="container mx-auto ">
            <div class="flex justify-between  px-3 ">
                <div> <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden mx-auto hover:text-white outline-none nav-toggler" data-target="#navigation">
                        <i class="material-icons">menu</i>
                    </button>
                    <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">

                        <div class="lg:inline-flex lg:flex-row lg:mx-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto divide-x divide-white">
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>Home</span>
                            </a>
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>About</span>
                            </a>
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>Services</span>
                            </a>
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>Gallery</span>
                            </a>
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>Products</span>
                            </a>
                            <a href="#" class="lg:inline-flex lg:w-auto w-full px-3 py-2 text-white items-center justify-center hover:bg-main hover:text-white transition duration-300 ease-in-out text-xs">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>

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
            <nav class="flex items-center bg-white p-3 flex-wrap justify-between">
                <a href="#" class="p-2 mr-4 inline-flex items-center h-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-png.png" alt="yumyums">
                </a>
                <div class="w-auto h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative">
                    <input type="search" name="search" id="search" placeholder="Search" class="appearance-none w-full outline-none focus:outline-none active:outline-none" />
                    <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>


            </nav>
        </div>
    </div>
    <!-- END bg-white -->