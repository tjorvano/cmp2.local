<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php bloginfo('template-directory'); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet-url'); ?>">




    <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <?php wp_head(); ?>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="header-container">
    <header class="wrapper clearfix">
        <div class="heading">
        <img src="<?php bloginfo('template_directory') ?>/img/logo_trek.png" class="logosettings">

        </div>
        <nav>
            <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </ul>
        </nav>
    </header>
</div>

