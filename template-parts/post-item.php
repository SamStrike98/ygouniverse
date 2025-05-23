<div class="border border-4 rounded-md w-full">
    <a href="<?php the_permalink(); ?>">
        <figure class="overflow-hidden h-[200px]">
            <img class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-100"
                src="<?php the_post_thumbnail_url(); ?>"
                alt="<?php the_title(); ?>" />
        </figure>
        <h3><?php the_title(); ?></h3>


        <p><?php the_category(); ?></p>
        <p><?php the_excerpt(); ?></p>

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
    </a>
</div>