<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Insurance Policy</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/owl.theme.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">


  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
         
            <?php wp_nav_menu(array( 
                'theme_location' => 'main-menu',//main-menu take same name when we register menu in function.php 
                'container' => 'ul',//ul tag
                'menu_class' => 'navbar-nav mr-auto w-100 justify-content-end clearfix'// all class we want in ul tag
              )); ?>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->