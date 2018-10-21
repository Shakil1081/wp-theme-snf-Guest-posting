<?php get_header();?>
        <div class="slaider">
    <div id="featured">
<?php if(is_home()){?>
	<h1 class="animated bounceInDown delay-1s">Content Marketing Institute</h1>			 
		<h3 class="animated bounceInDown delay-1s">Advancing the Practice of Content Marketing</h3>

				<div class="animated bounceInUp">
                <a class="box" href="#">
				<img src="<?php echo site_url();?>/wp-content/uploads/2018/10/Icon3.png">
				<h2>Events</h2>
				<h4>CONTENT MARKETING WORLD</h4>
				</a>				
				<a class="box" href="#">
				<div id="cco_image_wrapper">
					<img src="<?php echo site_url();?>/wp-content/uploads/2018/10/CCO_August2018_Cover.jpg">
				</div>
				<h2>magazine</h2>
				<h4>CHIEF CONTENT OFFICER</h4>
				</a>

				<a class="box" href="#">
				<img src="<?php echo site_url();?>/wp-content/uploads/2018/10/Icon2.png">
				<h2>Consulting</h2>
				<h4>Education, Training &amp; Advisory</h4>
                </a>
        </div>
<?php } ?>
		</div>
        <!-- Start Blog List Section -->
<div id="allpost" class="layer-stretch">
   <div class="layer-wrapper">
      <div class="row">
         <div class="col-lg-9 text-center">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class=" blog-full-block">
               <div class="row">
                  <div class="col-sm-4">
                     
                     <div class="theme-img">
                        <?php
                        // Must be inside a loop.
                        if ( has_post_thumbnail() ) {?>
                        <?php the_post_thumbnail('post-image', array('class' => 'post-thumb')); ?>
                        <?php }else {?>
                        <?php echo '<img  class="post-thumb" src="' . get_bloginfo( 'stylesheet_directory' ).'/images/snflogo.png" />'; ?>
                        <?php }?> 
                     </div>
                  </div>
                  <div class="col-sm-8 massageboday">
                     <div class="blog-full-ttl">
                        <h3>
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                            <?php //the_title();?>
                            <?php 
                                    echo mb_strimwidth( get_the_title(), 0, 55, '...' ); 
                                    ?>
                            </a>
                        </h3>
                     </div>
                     <div class="blog-full-description">
                        <?php echo excerpt('40'); ?>
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
            <?php endwhile; endif; ?>
            <?php wpbeginner_numeric_posts_nav(); ?>
         </div>
         <?php get_sidebar();?>
      </div>
   </div>
<!-- End Blog List Section -->
</div> 
<?php get_footer();?>