<?php
   /**
    * Template Name: Account Page
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
</div> <!-- Slider -->
<!--=========================================-->
<!--=========================================-->
<div class="layer-stretch">
   <div class="layer-wrapper reag_fild">
      <div class="row">
         <div class="col-lg-12 text-left">
            <div class="col-md-8 col-md-offset-2">
               <?php if ( is_user_logged_in() ) { ?>
               <!--TAb menu section-->
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <!--<li class="nav-item ">
                     <a class="nav-link" id="oldpostb" data-toggle="tab" href="#oldpost" role="tab" aria-controls="oldpost" aria-selected="true">Old Post</a>
                     </li>-->
                  <li class="nav-item active">
                     <a class="nav-link" id="home-tab" data-toggle="tab" href="#prof" role="tab" aria-controls="home" aria-selected="true">
                     <i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp; Profile</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="prof-tab" data-toggle="tab" href="#pass" role="tab" aria-controls="profile" aria-selected="false">
                     <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; Add a new post</a>
                  </li>
               </ul>
               <!-- end nav nav-tab -->
               <!--================================-->
               <!-- Tab container section --> 
               <!--=================================-->
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane" id="pass" role="tabpanel" aria-labelledby="pass-tab">
                     <div class="col-sm-9 col-md-offset-2">
                        <?php echo do_shortcode('[ap-form]');?>
                     </div>
                  </div>
                  <!--<div class="tab-pane " id="oldpost" role="tabpanel" aria-labelledby="oldpost-tab">
                     </div>-->
                  <div class="tab-pane active in"  id="prof" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row C table-row">
                        <div class="col-sm-2">
                           <?php echo do_shortcode('[wpmem_avatar]'); ?> 
                        </div>
                        <!-- col-sm-4-->                                
                        <div class="col-sm-10">
                           <ul style="margin: 0px;">
                              <li><?php echo do_shortcode('[wpmem_loginout]'); ?></li>
                           </ul>
                           <?php echo do_shortcode('[wpmem_profile]'); ?>
                        </div>
                        <!--col-sm-8 -->
                     </div>
                     <br>
                     <h2 class="blog-ttl">View your all post</h2>
                     <br>
                     <div class="row">
                        <?php  $args = array(
                           'author'        =>  $current_user->ID,
                           'orderby'       =>  'post_date',
                           'order'         =>  'ASC',
                           'posts_per_page' => 10
                           );
                           // the query
                           $the_query = new WP_Query( $args ); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-sm-4">
                           <div class=" blog-full-block theme-material-card text-center minh">
                              <h4 class="user-post text-left">
                                <?php //the_title();?>
                                    <?php 
                                    echo mb_strimwidth( get_the_title(), 0, 20, '...' ); 
                                    ?>
                              </h4>
                              <p class="paragraph-small">                                                   
                                 <?php echo excerpt('10'); ?>
                                 <br>
                              <hr>
                              <?php edit_post_link(); ?>
                              <br>
                              </p>
                           </div>
                           <!--blog-post-->
                        </div>
                        <!--blog-post-->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                     </div>
                     <!-- row -->
                  </div>
                  <!-- End prof -->
               </div>
               <?php } else { ?>
               <!--Ul li-->
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item active">
                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Registration</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp; Already have an Account</a>
                  </li>
               </ul>
               <!--end-->
               <!--ul li-->
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane active in" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <?php echo do_shortcode('[wpmem_form register]');?>
                  </div>
                  <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <?php echo do_shortcode('[wpmem_form login redirect_to="http://mysite.com/my-page/"]'); ?>
                  </div>
               </div>
               <!-- End-->
               <?php } ?>
            </div>
         </div>
         <!-- col-md-8 col-md-offset-2 -->
      </div>
      <!-- row -->
   </div>
   <!-- layer-wrapper reag_fild -->
</div>
<!-- End layer-stretch-->
<?php get_footer();?>