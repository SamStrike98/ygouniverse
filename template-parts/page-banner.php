<?php
if (is_category() || is_tag()): ?>
    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full h-[350px] md:h-[400px] lg:h-[450px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">
        <h1 class=""><?php single_term_title(); ?></h1>
    </div>

<?php elseif (is_single()): ?>
    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full h-[400px] md:h-[450px] lg:h-[500px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]"
        style="background-image: url(<?php the_post_thumbnail_url(array(9999, 350)) ?>);">
        <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md min-h-[50px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-5 text-[#DFD0B8]">
            <h1 class=""><?php the_title(); ?></h1>
        </div>
    </div>

    <?php else:

    $image = get_field('banner_image');
    $title = get_field('banner_title');


    if (!empty($image)): ?>
        <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full h-[350px] md:h-[400px] lg:h-[450px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]"
            style="background-image: url(<?php echo esc_url($image['url']); ?>);">
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md min-h-[50px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-5 text-[#DFD0B8]">
                <h1 class=""><?php the_title(); ?></h1>
            </div>
        </div>

    <?php else: ?>
        <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full h-[350px] md:h-[400px] lg:h-[450px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8] text-center">
            <h1 class=""><?php the_title(); ?></h1>
        </div>

    <?php endif; ?>
<?php endif; ?>