<?php get_header(); ?>

<div class="container mx-auto py-10">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <article class="">

                <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md h-[500px] w-full h-[200px] flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]"
                    style="background-image: url(<?php the_post_thumbnail_url(array(9999, 350)) ?>);">
                    <h1 class=""><?php the_title(); ?></h1>
                </div>

                <div class="my-10 bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] px-10 py-10 text-[#DFD0B8]">
                    <div class="">
                        <div class="mb-5">
                            <p class="text-white"><?php the_author(); ?> - <?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                    <h4 class=""><?php the_category(); ?></h4>
                    <div class="p-15"><?php the_content(); ?></div>
                </div>
            </article>


    <?php endwhile;
    endif; ?>


</div>
<?php
if (comments_open() || get_comments_number()) {
    comments_template();
}
?>

<?php get_template_part('template-parts/social', 'items'); ?>
</div>

<?php get_footer(); ?>