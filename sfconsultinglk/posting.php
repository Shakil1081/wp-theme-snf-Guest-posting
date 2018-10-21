<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><?php get_header();?>
<!-- Start Blog List Section -->
       <div class="slaider">
                <div id="featureds">		
                     <h1><?php the_title(); ?></h1>			 
                </div>
            </div>
        </div>
<div class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-12 text-left">
            <div class="col-md-8 col-md-offset-2">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="theme-material-card">
                    <div class="blog-post">
                        <p class="paragraph-medium paragraph-black">
                            <?php the_content();?>
                        </p>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <?php wpbeginner_numeric_posts_nav(); ?>
                </div>   
            </div>
        </div>
    </div>
</div><!-- End Blog List Section -->
<?php get_footer();?>
