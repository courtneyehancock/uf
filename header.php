<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!--Classica Web Font-->
  <link rel="stylesheet" href="https://use.typekit.net/roz5znz.css">
  <!--font awesome-->
<script src="https://kit.fontawesome.com/ff495b8443.js" crossorigin="anonymous"></script>
  <!--All UF Branding Fonts-->
  <link rel="preload" href="/wp-content/themes/uf-master/fonts/Aptos-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/uf-master/fonts/Anybody-Black.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/uf-master/fonts/Anybody-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/uf-master/fonts/Aptos-Black.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/uf-master/fonts/Aptos-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/uf-master/fonts/Anybody_Expanded-Black.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/uf-master/fonts/Anybody_Expanded-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/uf-master/fonts/Anybody_Expanded-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/uf-master/fonts/Aptos.ttf" as="font" type="font/ttf" crossorigin="anonymous">


  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<header>
  <div class="align-content-center">
    <div class="row main-nav">
      <div class="col-md-3" id="site-logo">
          <div>
          <!--If/else for Logo and Site Title-->
          <?php if(get_header_image() == '') { ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
          }else{?>
            <a href="<?php echo home_url('/'); ?>"><img class="align-middle uf-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php
          }
          ?>
        </div>
      </div>

      <div class="col-md-9 d-flex align-items-center justify-content-end search-nav">
        <div class="col-md-4 text-right">
          <!--Middle Right Footer-->
          <?php dynamic_sidebar('head-social-widget'); ?>
        </div>
    </div>
      <div class="col-md-12" id="site-nav">
        <!--Navigation-->
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>
</header>
