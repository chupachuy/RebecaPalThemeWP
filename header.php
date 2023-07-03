<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="<?php bloginfo('template_url'); ?>/css/imagehover.css" rel="stylesheet"/>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/32X32.png" sizes="32x32" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/48X48.png" sizes="48x48" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/64X64.png" sizes="64x64" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/128X128.png" sizes="128x128" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/180X180.png" sizes="180x180" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/192X192.png" sizes="192x192" />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/imgs/icons/270X270.png" sizes="270x270" />
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/imgs/icons/180X180.png" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/imgs/icons/270X270.png" />
    
    <?php wp_head(); ?>
</head>

<body>

    <div class="separar"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-3 col-xs-3"></div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/imgs/logo.jpg" class="img-responsive" alt="Rebecapal"></a>
                </div>
            </div>
            <div class="col-md-5 col-sm-3 col-xs-3"></div>
        </div>
    </div>

    <div class="separar"></div>
    <div class="separar"></div>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="separar"></div>

    <div class="preloader">
      <div id="loader"></div>
    </div>
