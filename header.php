<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body class="bg-[#222831]">
    <header class="bg-[#222831] h-[100px] pt-5 ">
        <nav class="h-full flex flex-row justify-between container mx-auto">
            <div class="">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else { ?>
                    <a href="<?php echo home_url('/'); ?>"><span class="text-[#DFD0B8] font-ygo text-6xl"><?php bloginfo('name') ?></span></a>
                <?php }
                ?>

            </div>
            <div class="w-full hidden lg:flex flex-row justify-end">
                <?php wp_nav_menu(array(
                    'theme_location' => 'ygouniverse_main_menu',
                    'menu_class' => 'space-y-2', // Ensure spacing
                    'container' => false, // Remove extra container div
                    'items_wrap' => '<ul class="mt-3 flex flex-row text-[#DFD0B8] text-3xl font-ygo font-bold gap-8">%3$s</ul>',
                )); ?>
            </div>


            <div class="mobile_nav min-w-[350px] w-[40%] h-[100vh] hidden lg:hidden fixed top-0 right-0  bg-[#393E46] border-[#DFD0B8] border-6 rounded-md shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-8 text-[#DFD0B8]">
                <?php wp_nav_menu(array(
                    'theme_location' => 'ygouniverse_main_menu',
                    'menu_class' => 'space-y-2', // Ensure spacing
                    'container' => false, // Remove extra container div
                    'items_wrap' => '<ul class="z-5 w-full pt-[100px] flex flex-col items-center text-[#DFD0B8] text-2xl font-ygo font-bold gap-8">%3$s</ul>',
                )); ?>
            </div>
            <div class="hamburger_container py-15 px-5 lg:hidden z-10 absolute top-0 right-0">
                <div class="hamburger flex"><i class=" fa-solid fa-bars cursor-pointer text-[#DFD0B8] fa-2xl hover:text-[#948979] transition-colors"></i></div>
                <div class="cross hidden"><i class="fa-solid fa-xmark cursor-pointer text-[#DFD0B8] fa-2xl hover:text-[#948979] transition-colors"></i></div>
            </div>
        </nav>

    </header>
    <div class="min-h-[80vh] container mx-auto bg-[#222831]">