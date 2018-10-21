<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Site Title -->
      <title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
      <!-- Favicon and Touch Icons -->
      <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon" type="image/png">
      <link href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
      <link href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
      <link href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
      <!-- Font Awesoeme Stylesheet CSS -->
      <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Patua+One" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css" />
      <!-- Google web Font -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
      <!-- Bootstrap core CSS -->
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- Material Design Lite Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/material.min.css" />
      <!-- 
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mdl-selectfield.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" />

      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css" />
        -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.min.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
      <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
      <?php wp_head();?>
   </head>
   <body>
      <!-- Start Header -->
<header id="header">
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" onload="copyDiv();">
            <button class="search" onclick="searchfunctionfor()">
            <i class="fa fa-search" aria-hidden="true"></i>
            </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png" alt=""></a>
                     
            </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">               
                    <ul class="nav navbar-nav">                  
                        <ul class="nav navbar-nav">
                             <?php
                                    wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'depth'             => 2,
                                    'depth'             =>3,
                                    'container' => false,
                                    'container_class'   => 'navbar-collapse collapse',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                    );
                                    ?>
                            <ul class="nav navbar-nav navbar-right">                            
                                 <li>
                                <form id="cIdtonext" class="navbar-search navbar-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input class="form-control" type="text" name="s" id="s" placeholder="Search.." name="search">
                                <button class="searicon" type="submit" ><i class="fa fa-search"></i></button>
                                </form> 
                                                                 
                                </li>
                            </ul>
                        </ul>
                    </ul>
                </ul>
                <!-- DROPDOWN LOGIN STARTS HERE  -->
                <ul id="signInDropdown" class="nav navbar-nav navbar-right">
                   
                    <?php if ( is_user_logged_in() ) { ?>
                        <li id="loginform" class="dropdown">
                        <a type="button"  class="dropdown-toggle" href="<?php echo get_site_url(); ?>/wp-login.php?action=logout"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Log out</a>
                        </li>
                        <li>
                        <a href="<?php echo get_site_url(); ?>/account/"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Account</a>
                        </li>
                    <?php } else{?>
                        <li id="loginform" class="dropdown">
                        <a type="button" id="dropdownMenu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Login</a>
                        <ul class="dropdown-menu bgt">
                          <li style="width: 250px;">
                           <?php wp_login_form(); ?>
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="<?php echo get_site_url(); ?>/wp-login.php?action=lostpassword">password?</a></span>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <a href="<?php echo get_site_url();?>/account/" class="dropdown-toggle" ><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Register</a>
                    </li>
                    <?php }?>
                </ul>
                <!-- DROPDOWN LOGIN ENDS HERE  -->
            </div>
        </div>
<div class="secNav">
<div class="container">
        <?php
        wp_nav_menu( array( 
        'theme_location' => 'topmenu',
        'container_class'   => 'navbar-collapse collapse',
        'menu_class'        => 'nav navbar-nav collapse navbar-collapse navbar-ex1-collapse', 
        'container_class' => 'topmenu' ) ); 
        ?>
    </div>

</div>
         <!-- End Main Header Section -->
              </header>
      <!-- End Header -->