<?php get_header(); ?>
<div class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-5 my-8">
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