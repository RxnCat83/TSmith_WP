<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Team Smith Real Estate</title>
</head>
<body>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?>"><strong>Team Smith Real Estate</strong></a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              
              <li><a href="<?php echo site_url()?>">About Us</a></li>
              <li><a href="<?php echo site_url('/services')?>">Services</a></li>
              <li><a href="<?php echo site_url('/listings')?>">Current Listings</a></li>
              <li><a href="<?php echo site_url('/contact-us')?>">Contact Us</a></li>
              <li><a href="<?php echo site_url('/affiliates')?>">Affiliates</a></li>
              
            </ul>
          </nav>
          
        </div>
      </div>
    </header>
