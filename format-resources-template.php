<?php
/* 
Template Name: Format Resources Template 
Template Post Type: format
*/
get_header(); ?>

<div class="container mx-auto py-10">
    <h2><?php the_title(); ?></h2>

    <?php

    // Check rows exists.
    if (have_rows('resources')):

        // Loop through rows.
        while (have_rows('resources')) : the_row();

            // Load sub field value.
            $name = get_sub_field('resource_name');
            $type = get_sub_field('resource_type');
            $link = get_sub_field('resource_link');
            $file = get_sub_field('resource_file');

            if ($type == "website"): ?>
                <?php
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>"><?php echo $name; ?></a>
                <?php endif;
            else:
                if ($file): ?>
                    <a href="<?php echo $file['url']; ?>" download><?php echo $name; ?></a>
    <?php endif;
            endif;
        // Do something, but make sure you escape the value if outputting directly...

        // End loop.
        endwhile;
    endif;
    ?>

</div>
<?php get_footer(); ?>