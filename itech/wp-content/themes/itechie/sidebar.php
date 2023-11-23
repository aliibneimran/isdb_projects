<div class="col-lg-4 col-12">
    <div class="td-sidebar">
        <div class="widget widget_search">
            <h4 class="widget-title">Search Keyword</h4>
            <?php dynamic_sidebar('search') ?>
        </div>
        <div class="widget widget_catagory">
            <h4 class="widget-title">Catagory</h4>
            <?php dynamic_sidebar('catagory') ?>
        </div>
        <div class="widget widget-recent-post">
            <h4 class="widget-title">Recent News</h4>
            <?php dynamic_sidebar('recent') ?>
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <ul>
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <?php the_post_thumbnail(array(100, 80))?>
                                </div>
                                <div class="media-body align-self-center">
                                    <h6 class="title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h6>
                                    <div class="post-info"><i class="far fa-calendar-alt"></i><span><?php echo get_the_date()?></span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="widget widget_tag_cloud mb-0">
            <h4 class="widget-title">Tags</h4>
            <?php dynamic_sidebar('tag') ?>
        </div>
    </div>
</div>