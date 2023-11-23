<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title')?></title>
    <link rel=icon href="<?php echo get_template_directory_uri()?>/assets/img/favicon.webp" sizes="20x20" type="image/png">
    <?php wp_head() ?>
</head>

<body <?php body_class('sc5 home-help-desk') ?>>

    <!-- preloader area start -->
    
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="<?php home_url('home_page')?>" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <nav class="navbar navbar-area navbar-area-3 navbar-area-4 navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a class="d-none d-lg-inline-block" href="<?php home_url('home_page')?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo-3.webp" alt="img"></a>
                <a class="d-lg-none d-inline-block" href="<?php home_url('home_page')?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.webp" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="Iitechie_main_menu">
                <?php
                wp_nav_menu(array(
                    'menu'                => "Primary",
                    'menu_class'        => "navbar-nav menu-open text-lg-end",
                    'menu_id'            => "",
                    'container'            => "menu-item-has-children",
                    'container_class'    => "collapse navbar-collapse",
                    'container_id'        => "",
                    'theme_location'    => "main-menu",
                ));

                ?>
            </div>
        </div>
    </nav>