<?php get_header(); ?>
<div class="container mx-auto py-10">
    <div class="h-[300px] flex flex-col justify-between">
        <div>
            <h1 class="text-center">Welcome to YGO Universe</h1>
            <h3 class="text-center">All Things Yu-Gi-Oh!</h3>
        </div>


        <div class="h-[200px] grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 justify-items-center gap-3">
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">Format Guides</div>
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">Product Guides</div>
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">Anime</div>
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">News</div>
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">Tournaments</div>
            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">Master Duel</div>
        </div>
    </div>

    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">
        <h3>Latest Posts:</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-4">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/post', 'item'); ?>
                <?php endwhile; ?>
        </div>

    <?php else: ?>
        <p>No Posts Found</p>
    <?php endif; ?>
    </div>

    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">
        <h3>Newsletter:</h3>

    </div>



</div>
<?php get_footer(); ?>