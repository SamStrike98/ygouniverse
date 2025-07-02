<?php get_header(); ?>
<div class="container mx-auto py-10">




    <?php get_template_part('template-parts/page', 'banner'); ?>

    <?php get_template_part('template-parts/format', 'list'); ?>

    <div class="text-[#DFD0B8]">
        <p><?php the_content(); ?></p>
    </div>


</div>
<?php get_footer(); ?>