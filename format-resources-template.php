<?php
/* 
Template Name: Format Resources Template 
Template Post Type: format
*/
get_header(); ?>

<div class="container mx-auto py-10">
    <h2 class="text-center"><?php the_title(); ?></h2>

    <?php

    // Check rows exists.
    if (have_rows('resources')): ?>


        <div class="flex flex-col gap-4">
            <?php
            // Loop through rows.
            while (have_rows('resources')) : the_row();

                // Load sub field value.
                $name = get_sub_field('resource_name');
                $type = get_sub_field('resource_type');
                $link = get_sub_field('resource_link');
                $file = get_sub_field('resource_file');
                ?>
                <div class="flex flex-row items-center gap-4 text-[#DFD0B8] text-2xl font-ygo h-[100px]">
                    <?php
                if ($type == "website"): ?>
                    <?php   
                    if ($link): ?>
                        <i class="fa-solid fa-file fa-xl"></i><a class="button" href="<?php echo esc_url($link); ?>"><?php echo $name; ?></a>
                    <?php endif;
                else:
                    if ($file): ?>
                        <i class="fa-solid fa-globe fa-xl"></i><a href="<?php echo $file['url']; ?>" download><?php echo $name; ?></a>
            <?php endif;
                endif; ?>
            </div>
            <?php 
            // Do something, but make sure you escape the value if outputting directly...

            // End loop.
            endwhile;
            ?>
        </div>
    <?php else: ?>
        <div>
            <p>No resources found...</p>
        </div>
    <?php endif; ?>

</div>
<?php get_footer(); ?>