<?php
/* 
Template Name: Format About Template 
Template Post Type: format
*/
get_header(); ?>

<div class="container mx-auto py-10">
    <h2><?php the_title(); ?></h2>

    <?php the_field('description'); ?>
    <p>Event Date: <?php echo esc_html(get_field('format_date')); ?></p>

</div>
<?php get_footer(); ?>