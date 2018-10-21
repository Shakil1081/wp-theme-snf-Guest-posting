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
      <!-- Material Design Select Field Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mdl-selectfield.min.css">
      <!-- Owl Carousel Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css" />
      <!-- Animate Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.min.css" />
      <!-- Magnific Popup Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" />
      <!-- Flex Slider Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css" />
      <!-- Custom Main Stylesheet CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
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
                    <li class="dropdown">
                        <a type="button" id="dropdownMenu1" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon glyphicon-user"></i>&nbsp;Login</a>
                        <ul class="dropdown-menu bgt">
                          <li style="width: 250px;">
                           <?php wp_login_form(); ?>
                           <a class="btn btn-primary regbutton" href="#" role="button">Register</a>                            
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="http://phpoll.com/register" class="dropdown-toggle" data-toggle="dropdown">Register</a>
                    </li>
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
      <?php if($wp_query->found_posts){?>
        <div class="container-fluid">
                <div class="slaider">
                    <div id="featureds">		
                        <h1><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>			 
                    </div>
	            </div>
        </div>
        <?php }?>
	  <div class="layer-stretch">
   <div class="layer-wrapper">
      <div class="row">
      <div class="col-lg-9  text-center">
                  
<?php if($wp_query->found_posts ===0){?>
                  <div class="notfound">Oops! </div>
<div class="subnotdound"> We're sorry you can't find what you're looking for on the.</div>
<?php }?>
	        <?php if ( have_posts() ) { ?>

            <?php while ( have_posts() ) { the_post(); ?>

              <div class=" blog-full-block  text-center">
               <div class="row">                  
                  <div class="col-sm-12 massageboday">
                     <div class="blog-full-ttl">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                     </div>
                     <div class="blog-full-description">
                        <?php echo excerpt('100'); ?>
                     </div>
                     <div class="blog-full-ftr">
                        <p class="pull-left blog-full-author"><i class="fa fa-comment-o"></i><?php comments_number( 'No responses', 'One response', '% Responses' ); ?> &nbsp;&nbsp;
                        <i class="fa fa-clock-o"></i> <?php the_time('g:i a'); ?>&nbsp;&nbsp;</p>
                        <a class="readmore" href="<?php the_permalink();?>" class="pull-right anchor-icon">
                        Read More <i class="fa fa-arrow-circle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>

            <?php } ?>

            </ul>
           <?php echo paginate_links(); ?>
        <?php } ?>
      </div>
      <!--====================================-->
      <div class="col-lg-3">
            <div class="theme-material-card text-center">
                    <?php if ( is_active_sidebar( 'sidebar-0' ) ) : ?>
                                <div id="secondary" class="widget-area" role="complementary">
                                     <?php dynamic_sidebar( 'sidebar-a' ); ?>
                                </div>
                       <?php endif; ?>
                            <div class="sub-ttl">
                                Recent Post
                            </div>
                         <?php
                                global $post;
                                $args = array( 'posts_per_page' => 10, 'orderby' => 'rand' );
                                $rand_posts = get_posts( $args );
                                foreach ( $rand_posts as $post ) : 
                                setup_postdata( $post ); ?>
                                <a href="<?php the_permalink(); ?>" class="row blog-recent">
                                    <div class="col-4 blog-recent-img">

<?php
// Must be inside a loop.
if ( has_post_thumbnail() ) {?>
   <?php the_post_thumbnail('post-image', array('class' => 'img-responsive img-thumbnail mxh')); ?>
<?php }else {?>
<?php echo '<img src="' . get_bloginfo( 'stylesheet_directory' ).'/images/apple-touch-icon-72x72.png" />'; ?>
<?php }?>                                      
                                    </div>
                                    <div class="col-8 blog-recent-post">
                                        <h4><?php 
                                        if( get_the_title() ){
                                            $tit = get_the_title();
                                            $tit = substr(get_the_title(), 0, 35);
                                            echo $tit.'...';
                                        }?></h4>
                                        <p><?php the_date(); ?></p>
                                    </div>
                                </a>
                                 <?php endforeach; 
                                wp_reset_postdata(); ?>                    
             </div>
        </div>


                
      <!--====================================-->
   </div>
</div>

    </div>
  </div>
</div>
<?php get_footer(); ?>