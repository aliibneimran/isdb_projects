<?php get_header()?>
    <!-- navbar end -->


    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    if (have_posts()):
						while (have_posts()):
							the_post();
                    ?>
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <?php the_post_thumbnail()?>
                        </div>
                        <div class="details">
                            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                            <ul class="blog-meta">
                                <li><i class="far fa-user"></i><?php the_author()?></li>
                                <li><i class="far fa-calendar-alt"></i><?php echo get_the_date()?></li>
                                <li><i class="far fa-comment-dots"></i><?php comments_number()?></li>
                            </ul>
                            <?php short_content()?>
                            <a class="read-more-text" href="<?php the_permalink() ?>">Read More <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                    <?php 
                      endwhile;
                    endif; 
                    ?>
                    <div class="pagination">
                        <a class="prev page-numbers" href="http://icare.local/"><i class="fa fa-angle-left"></i></a>
                        <a class="page-numbers" href="http://icare.local/">1</a>
                        <span class="page-numbers current">2</span>
                        <a class="page-numbers" href="http://icare.local/page/3/">3</a>
                        <a class="page-numbers" href="http://icare.local/page/4/">4</a>
                        <a class="next page-numbers" href="http://icare.local/page/3/"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- footer area start -->
  <?php get_footer()?>