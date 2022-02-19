<!DOCTYPE html>
<html <?php language_attributes( ) ; ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->

        <?php wp_head(); ?>
    </head>

    <!-- page wrapper -->
    <body class="boxed_wrapper" <?php body_class( ); ?>>
        <?php wp_body_open(  ); ?>

        <!-- .preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- /.preloader -->

        <!-- menu-area -->
        <header class="main-header header-style-four">

            <!-- header-top-style-two -->
            <div class="header-top-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="social-style-four in-block">

                            <?php if($header_socials=get_field('social_icons', 'options')){
                                foreach($header_socials as $header){?>
                                <li>
                                    <a href="<?php echo $header['icon_link']; ?>">
                                        <i class="fa <?php echo $header['icon']; ?>"></i>
                                    </a>
                                </li>
                                <?php }} ?>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="logo-box centred">
                                <?php if($logo=get_field('header_logo', 'options')){?>
                                <a href="<?php echo esc_url( home_url(  )); ?>">
                                    <figure><img
                                        src="<?php echo $logo['url'] ?>"
                                        alt=""></figure>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="search-box">

                                <?php get_search_form(  ); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-style-two -->

            <!-- main-menu -->
            <div class="theme_menu menu-area stricky centred">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                            <div class="menu-area">
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <button
                                            type="button"
                                            class="navbar-toggle"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_class' =>
                                        'navigation clearfix' )); ?>

                                        <?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_class' =>
                                        'mobile-menu clearfix' )); ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end main-menu -->
        </header>
        <!-- end menu-area -->