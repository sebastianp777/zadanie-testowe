<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> id="scroll-top">

<!-- header -->
<header class="header clear desktop-menu" role="banner">

    <!-- nav -->
        <nav class="nav" role="navigation">
            <a class="nav__logo--white" href="<?php echo home_url(); ?>"><img class="nav__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-pixtricks-revers.png" alt=""></a>
            <a class="nav__logo--dark" href="<?php echo home_url(); ?>"><img class="nav__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-pixtricks.png" alt=""></a>
            <div class="nav__menu">
                 <?php html5blank_nav(); ?>
                 <a href="https://www.facebook.com/" class="menu-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
        </nav>
        <!-- /nav -->
</header>

<header class="header clear mobile-menu" role="banner">

<!-- nav -->
<nav class="top-nav" id="top-nav">
<a href="<?php echo home_url(); ?>"><img class="nav__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-pixtricks.png" alt=""></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <?php html5blank_nav_mobile(); ?>
 </nav>
</header>



<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
