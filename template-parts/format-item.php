<div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3">
    <a class="w-full rounded-md" href="<?php the_permalink(); ?>">
        <figure class="overflow-hidden h-[200px] border-3 border-[#6c7482] rounded-md flex justify-center items-center">
            <?php if (has_post_thumbnail()): ?>
                <img class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-100 rounded-t-md"
                    src="<?php the_post_thumbnail_url(); ?>"
                    alt="<?php the_title(); ?>" />
            <?php else: ?>
                <h3 class="text-center text-[#DFD0B8]"><?php the_title(); ?></h3>
            <?php endif; ?>
        </figure>
    </a>
</div>