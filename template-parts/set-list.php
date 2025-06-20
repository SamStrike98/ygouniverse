<?php

// Check rows exists.
if (have_rows('set_list')):
?>
    <div class="flex flex-col gap-5">
        <?php
        // Loop through rows.
        while (have_rows('set_list')) : the_row();

            // Load sub field value.
            $name = get_sub_field('name');
            $code = get_sub_field('code');
            $image = get_sub_field('image');
            $release_date = get_sub_field('release_date');
            $link_to_page = get_sub_field('link_to_page');
        ?>
            <div class="flex flex-row items-center gap-10">
                <div class="flex flex-col">
                    <h2><?php echo esc_html($name); ?></h2>
                    <p><?php echo esc_html($code); ?></p>
                    <p>Release Date: <?php echo esc_html($release_date); ?></p>
                </div>
                <?php
                if (!empty($image)): ?>
                    <figure class="overflow-hidden h-[200px] rounded-md">
                        <img class="object-cover h-full transition-transform duration-300 group-hover:scale-100 rounded-t-md" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                <?php endif; ?>

                <?php
                if ($link_to_page): ?>
                    <a class="button" href="<?php echo esc_url($link_to_page); ?>">More Details</a>
                <?php endif; ?>
            </div>
        <?php
        // End loop.
        endwhile;
        ?>
    </div>
<?php
// No value.
else :
// Do something...
endif;
