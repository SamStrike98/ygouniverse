<?php get_header();?>
<div class="container mx-auto py-10">
    <div class="min-h-[350px] flex flex-col justify-between">
        <div class="py-10">
            <h1 class="text-center underline decoration-[#6c7482]"><?php echo esc_html(get_field('welcome_message')); ?></h1>
            <h4 class="text-center"><?php echo esc_html(get_field('website_tag_line')); ?></h4>
        </div>

        <?php get_template_part('template-parts/frontpage', 'list'); ?>
    </div>

    <?php get_template_part('template-parts/posts', 'latest'); ?>

</div>
<?php get_footer(); ?>