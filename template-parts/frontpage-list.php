<?php

// Check rows exists.
if (have_rows('front_page_list')):
?>
    <div class="min-h-[200px] grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 justify-items-center gap-3">
        <?php
        // Loop through rows.
        while (have_rows('front_page_list')) : the_row();

            // Load sub field value.
            $name = get_sub_field('name');
            $link = get_sub_field('link');
            // Do something, but make sure you escape the value if outputting directly...
        ?>


            <div class="bg-[#393E46] border-[#DFD0B8] border-6 rounded-md w-full flex flex-col justify-center items-center shadow-[inset_0px_0px_15px_6px_rgba(0,_0,_0,_0.8)] p-3 text-[#DFD0B8]"><a class="w-full h-full flex justify-center items-center text-center font-bold text-lg" href="<?php echo esc_attr(get_sub_field('link')); ?>"><?php echo acf_esc_html(get_sub_field('name')); ?></a></div>


        <?php

        // End loop.
        endwhile;
        ?>
    </div>
<?php
// No value.
else :
// Do something...
endif;
