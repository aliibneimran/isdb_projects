<?php get_header() ?>
<!-- navbar end -->

<!-- page title start -->

<!-- page title end -->

<!-- blog area start -->
<div class="blog-area pd-top-120 pd-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <div class="single-blog-inner">
                            <div class="thumb">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="details">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <ul class="blog-meta">
                                    <li><i class="far fa-user"></i><?php the_author() ?></li>
                                    <li><i class="far fa-calendar-alt"></i><?php echo get_the_date() ?></li>
                                    <li><i class="far fa-comment-dots"></i>
                                       <?php comments_number()?>
                                    </li>
                                </ul>
                                <?php the_content() ?>
                                <?php // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif; ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</div>
<!-- blog area end -->

<!-- footer area start -->
<?php get_footer() ?>