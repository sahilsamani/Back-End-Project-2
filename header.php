<!DOCTYPE html>
<html>

<head>

    <!--    This block of code enables the UI layout of the website to be fit on different devices-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <?php  wp_head(); ?>





</head>

<body <?php body_class() ?>>

    <!--This block of code is the header section of the website. It contains the title of the website and the navigation menu-->
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>The Tocumwal</strong> Archival</a></h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>

            <div class="site-header__menu group">
                <nav class="main-navigation">

                    <!--This block of code creates a dynamic WordPress navigation menu -->

                    <?php  
                    
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation'
                        
                        
                        ));
                    
                    ?>

                    <!--                    
                    <ul>
                        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                        <li><a href="<?php echo site_url('/stories') ?>">Stories</a></li>
                        <li><a href="<?php echo site_url('/news') ?>">News</a></li>
                        <li><a href="<?php echo site_url('/gallery') ?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('/location') ?>">Location</a></li>
                        <li><a href="<?php echo site_url('/get_in_touch') ?>">Get in Touch</a></li>
                    </ul>
-->

                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>
