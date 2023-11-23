 <!-- blog area start -->
 <div class="blog-area pd-top-115 pd-bottom-60">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-6 col-lg-7 col-md-10">
                 <div class="section-title text-center">
                     <h5 class="sub-title double-line">Blog Post</h5>
                     <h2 class="title">Read Our Latest Tips &Tricks</h2>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             <?php
                $query = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    )
                );

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                     <div class="col-lg-4 col-md-6">
                         <div class="single-blog-inner style-2">
                             <div class="thumb">
                                 <?php the_post_thumbnail(array(300, 250)) ?>
                             </div>
                             <div class="details">
                                 <h4><a href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
                                 <ul class="blog-meta">
                                     <li><i class="far fa-user"></i><?php the_author() ?></li>
                                     <li><i class="far fa-calendar-alt"></i> <?php echo get_the_date()?></li>
                                 </ul>
                                <?php the_excerpt() ?>
                                 <a class="read-more-text" href="<?php the_permalink()?>">Read More <i class="fa fa-caret-right"></i></a>
                             </div>
                         </div>
                     </div>
             <?php
                    endwhile;
                endif;
                ?>
         </div>
     </div>
 </div>
 <!-- blog area end -->