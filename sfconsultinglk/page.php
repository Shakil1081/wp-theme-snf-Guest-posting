<?php get_header();?>
	<!-- Start Blog List Section -->
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-8 text-left">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="theme-material-card">
                        
                        <h2 class="blog-ttl text-left"><?php the_title();?></h2>
                        
                        <div class="blog-post">
                            <p class="paragraph-medium paragraph-black">
                            	<?php the_content();?>
                            </p>
                        </div>
                    </div>
					<?php endwhile; endif; ?>
					<?php wpbeginner_numeric_posts_nav(); ?>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div><!-- End Blog List Section -->
<?php get_footer();?>

	