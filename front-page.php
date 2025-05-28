<?php get_header(); ?>
<div class="container mx-auto py-10">
    <div class="h-[350px] flex flex-col justify-between">
        <div class="">
            <h1 class="text-center underline decoration-[#6c7482]">Welcome to YGO Universe</h1>
            <h4 class="text-center">All Things Yu-Gi-Oh!</h4>
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

    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] px-3 py-10 text-[#DFD0B8]">
        <h3>Latest Posts:</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-6 w-full mt-10">
            <?php
            // WordPress loop to get 3 latest posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                    <?php get_template_part('template-parts/post', 'item'); ?>
            <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No recent posts found.</p>';
            endif;
            ?>
        </div>
    </div>

    <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]">
        <h3>Newsletter:</h3>

        <form>

            <div>
                <label>Email</label>
                <input>
            </div>

            <button>Sign Up</button>

        </form>
    </div>



</div>
<?php get_footer(); ?>