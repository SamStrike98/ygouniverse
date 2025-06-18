<?php

// Check rows exists.
if (have_rows('set_list')):

    // Loop through rows.
    while (have_rows('set_list')) : the_row();

        // Load sub field value.
        $name = get_sub_field('name');
        $code = get_sub_field('code');
        $image = get_sub_field('image');
        $release_date = get_sub_field('release_date');
        $link_to_page = get_sub_field('link_to_page');
        ?>
        <div>
            <h2><?php echo esc_html($name); ?></h2>
            <p><?php echo esc_html($code); ?></p>
            <?php
            if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <p>Release Date: <?php echo esc_html($release_date); ?></p>
            <?php
            if ($link_to_page): ?>
                <a class="button" href="<?php echo esc_url($link_to_page); ?>">More Details</a>
            <?php endif; ?>
        </div>
<?php
    // End loop.
    endwhile;

// No value.
else :
// Do something...
endif;
