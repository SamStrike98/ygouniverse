<div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3">
    <a class="w-full rounded-md" href="<?php the_permalink(); ?>">
        <figure class="overflow-hidden h-[200px] border-3 border-[#6c7482] rounded-md">
            <img class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-100 rounded-t-md"
                src="<?php the_post_thumbnail_url(); ?>"
                alt="<?php the_title(); ?>" />
        </figure>
        <!-- <div class="bg-[#393E46] w-full h-full px-3 pb-3"> -->
        <div class="bg-[#6c7482] rounded-md p-3 w-full">
            <h2 class="text-center text-[#DFD0B8]"><?php the_title(); ?></h3>


                <div class="bg-teal-500 text-white rounded-lg max-w-min px-2 text-center border-2 border-teal-700 font-semibold"><?php the_category(); ?></div>
                <div class="font-light text-[#DFD0B8]"><?php the_excerpt(); ?></div>

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
        <!-- </div> -->
    </a>
</div>