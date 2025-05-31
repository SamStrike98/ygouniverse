<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body class="bg-[#222831]">
    <header class="bg-[#222831] h-[100px] pt-5">
        <nav class="flex flex-row justify-between container mx-auto">
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo home_url('/'); ?>"><span class="text-[#DFD0B8] font-ygo text-6xl"><?php bloginfo('name') ?></span></a>
            <?php }
            ?>

        </div>
        <div class="w-full flex flex-row justify-end">
        <?php wp_nav_menu(array(
            'theme_location' => 'ygouniverse_main_menu',
            'menu_class' => 'space-y-2', // Ensure spacing
            'container' => false, // Remove extra container div
            'items_wrap' => '<ul class="mt-3 flex flex-row text-[#DFD0B8] text-3xl font-ygo font-bold gap-8">%3$s</ul>',
        )); ?>
        </div>
    </nav>
    </header>
    <div class="min-h-[80vh] container mx-auto bg-[#222831]">