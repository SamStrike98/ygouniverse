<h2 class="text-center"><?php echo esc_html(get_field('type')); ?></h2>
<div class="flex flex-col gap-15">
    <?php
    if (have_rows('year_list')):
        while (have_rows('year_list')) : the_row();
    ?>


            <div class="gap-15">
                <h3 class="text-center my-5"><?php echo esc_html(get_sub_field('year')); ?></h3>
                <?php
                // Loop over sub repeater rows.
                if (have_rows('set_list')): ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-4">
                        <?php while (have_rows('set_list')) : the_row();

                            get_template_part('template-parts/set', 'item'); 

                        endwhile; ?>
                    </div>
                <?php endif;
                ?>
            </div>

    <?php
        endwhile;
    endif;
    ?>
</div>