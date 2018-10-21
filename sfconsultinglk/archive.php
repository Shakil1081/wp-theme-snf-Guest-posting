<?php get_header();?>
<div class="container-fluid">
        <div class="slaider">
    <div id="featureds">		
		<h1><?php single_cat_title('Corrently browsig') ?></h1>			 
	</div>
<!-- Start Blog List Section -->
<div class="layer-stretch">
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
                      <?php echo '<img  class="post-thumb" src="' . get_bloginfo( 'stylesheet_directory' ).'/images/thumbnail-default.jpg" />'; ?>
                      <?php }?>
                     </div>
                  </div>
                  <div class="col-sm-8 massageboday">
                     <div class="blog-full-ttl">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
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
</div>
<!-- End Blog List Section -->
</div> 
<?php get_footer();?>