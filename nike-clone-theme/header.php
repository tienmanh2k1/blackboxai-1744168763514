<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-sans'); ?>>
    <!-- Top Black Navigation Bar -->
    <div class="bg-black text-white text-xs py-1 px-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Help</a>
                <a href="#" class="hover:text-gray-300">Join Us</a>
                <a href="#" class="hover:text-gray-300">Sign In</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Nike Logo -->
                <div class="w-16">
                    <a href="<?php echo home_url(); ?>">
                        <svg viewBox="0 0 69 26" fill="currentColor">
                            <path d="M35.5 13.5c0-3.7-3-6.5-6.5-6.5s-6.5 3-6.5 6.5 3 6.5 6.5 6.5 6.5-3 6.5-6.5zm-6.5 4.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path>
                            <path d="M35.5 13.5c0-3.7-3-6.5-6.5-6.5s-6.5 3-6.5 6.5 3 6.5 6.5 6.5 6.5-3 6.5-6.5zm-6.5 4.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Main Menu -->
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="font-medium hover:text-gray-600">New & Featured</a>
                    <a href="#" class="font-medium hover:text-gray-600">Men</a>
                    <a href="#" class="font-medium hover:text-gray-600">Women</a>
                    <a href="#" class="font-medium hover:text-gray-600">Kids</a>
                    <a href="#" class="font-medium hover:text-gray-600">Sale</a>
                </nav>

                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                        <i class="fas fa-shopping-bag"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
