<?php

    $name = get_sub_field('name');
    $code = get_sub_field('code');
    $image = get_sub_field('image');
    $release_date = get_sub_field('release_date');
    $link_to_page = get_sub_field('link_to_page');

?>


<div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3">
    <a class="w-full rounded-md" href="<?php echo esc_url($link_to_page); ?>">
        <figure class="overflow-hidden h-[200px] border-3 border-[#6c7482] rounded-md flex justify-center items-center">
            <?php if (!empty($image)): ?>
                <img class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-100 rounded-t-md"
                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php else: ?>
                <h3 class="text-center text-[#DFD0B8]"><?php echo esc_html($name); ?></h3>
            <?php endif; ?>
        </figure>
        <div class="bg-[#6c7482] rounded-md p-3 w-full">
            <h3 class="text-center text-[#DFD0B8]"><?php echo esc_html($name); ?></h3>


            <div>
                <p><?php echo esc_html($code); ?></p>
            </div>
            <div>
                <p>Release Date: <?php echo esc_html($release_date); ?></p>
            </div>

            <div>
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="badge badge-outline hover:bg-teal-500 hover:text-white transition-all">' . $tag->name . '</a> ';
                    }
                }
                ?>
            </div>
        </div>
    </a>
</div>