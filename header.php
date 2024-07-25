<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!--Classica Web Font-->
  <link rel="stylesheet" href="https://use.typekit.net/roz5znz.css">
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/45fdff44f1.js" crossorigin="anonymous"></script>
  <!--All UF Branding Fonts-->
  <link rel="preload" href="https://treeo.ufl.edu/wp-content/themes/uf-master/fonts/GentonaBook.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="https://treeo.ufl.edu/wp-content/themes/uf-master/fonts/GentonaHeavy.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="https://treeo.ufl.edu/wp-content/themes/uf-master/fonts/GentonaLight.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="https://treeo.ufl.edu/wp-content/themes/uf-master/fonts/GentonaTT-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="https://treeo.ufl.edu/wp-content/themes/uf-master/fonts/Obviously-WideBold.otf" as="font" type="font/otf" crossorigin="anonymous">

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
