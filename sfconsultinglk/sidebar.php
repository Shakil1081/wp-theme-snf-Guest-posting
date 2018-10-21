        <div class="col-lg-3">
            <div class="theme-material-card text-center">
                    <?php if ( is_active_sidebar( 'sidebar-0' ) ) : ?>
                                <div id="secondary" class="widget-area" role="complementary">
                                     <?php dynamic_sidebar( 'sidebar-a' ); ?>
                                </div>
                       <?php endif; ?> 
                     <?php if( is_front_page()){?>
                        
                                <?php if ( is_active_sidebar( 'sidebar-0' ) ) : ?>
                                    <div id="secondary" class="widget-area" role="complementary">
                                        <?php dynamic_sidebar( 'sidebar-0' ); ?>
                                    </div>

                    <?php endif; ?> 
                     <?php } else {?>
                         <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                            <div id="secondary" class="widget-area" role="complementary">
                            <?php dynamic_sidebar( 'sidebar-4' ); ?>
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
                                    <?php thumbnail();?>                                       
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
                                <div id="secondary" class="widget-area" role="complementary">
                                <a class="hvr-shutter-out-horizontal readmore" href="<?php echo get_home_url();?>#allpost">
                        Read More <i class="fa fa-arrow-circle-right"></i>
                        </a>

                        
                     </div>
                          <?php } ?>

                      
                        
             </div>
        </div>


                