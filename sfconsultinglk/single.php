<?php get_header();?>
	<!-- Start Blog List Section -->
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-9 text-center">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="theme-material-card no shadows">
                                               <h2 class="blog-ttl"><?php the_title();?></h2>
                        <div class="clo-md-12 texal">
                            <ul class="blog-detail l10">                        
                                <li class="hovg"><a href="#comments"><i class="far fa-comments"></i>  <?php comments_number( 'No responses', 'One response', '% Responses' ); ?></li>
                                <li class="classs hovg"><i class="fa fa-cloud"></i><?php the_category(',');?></li>
                                <li class="hovg "><a href="#comments"><i class="fa fa-calendar-o"></i><?php the_time('d F Y');?></a></li>
                            </ul>
                        </div>
                        <div  class="row">
                            <?php 
                            the_post_thumbnail('post-image', array('class' => 'post-thumb-details img-fluid')); 
                            ?>
                            <figcaption class="figure-caption"><i><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></i></figcaption>
                        </div>
                        <div class="blog-post">
                            	<?php the_content();?>
                        </div>
                        <!--<div class="row blog-meta">
                            <div class="col-sm-7 blog-tag">
                                
                                <ul>
                                    <li><?php the_tags();?></li>
                                </ul>
                            </div>
                          
                        </div> -->
    <?php if ( comments_open() || get_comments_number() ) :
				comments_template(); endif;?>
                    </div>
					<?php endwhile; endif; ?>
					<?php wpbeginner_numeric_posts_nav(); ?>
                   </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div><!-- End Blog List Section -->
<?php get_footer();?>
	