<footer class="footer-area bg-cover" style="background-image: url('./assets/img/bg/2.webp');">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('footer_1') ?>
            <?php dynamic_sidebar('footer_2') ?>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Useful link</h4>
                    <?php
                    wp_nav_menu(array(
                        'menu'                => "Footer",
                        'menu_class'        => "",
                        'menu_id'            => "",
                        'container'            => "",
                        'container_class'    => "widget widget_nav_menu",
                        'container_id'        => "",
                        'theme_location'    => "footer-menu",
                    ));

                    ?>
                </div>
            </div>
            <?php dynamic_sidebar('footer_4') ?>
           
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <p>© 2023. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<?php wp_footer() ?>
</body>

</html>