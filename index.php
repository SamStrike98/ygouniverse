<?php get_header(); ?>
<div class="container mx-auto py-10">
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
<?php get_footer(); ?>