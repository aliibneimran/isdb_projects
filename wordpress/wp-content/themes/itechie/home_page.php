<?php
/*
Template Name: Home_page
*/
get_header()
?>
<!-- navbar end -->
<div class="banner-area banner-area-3">
    <div class="banner-slider slider-control-round owl-carousel">
        <?php
        $query = new WP_Query(
            array(
                'post_type' => 'Sliders',
                //  'posts_per_page' => 3
            )
        );

        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div><?php the_post_thumbnail() ?></div>
        <?php } ?>
    </div>
</div>



<!-- footer area start -->
<?php get_footer() ?>