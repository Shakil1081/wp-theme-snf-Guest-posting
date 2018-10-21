<?php
//for feature image for post
add_theme_support( 'post-thumbnails', array( 'post' ) );
//readmore
function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt);
echo $excerpt;
}
// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'primary' => __('Primary Menu', 'sfconsultinglk'),
    
));
// Register custom navigation walker
require get_template_directory() .('/inc/wp_bootstrap_navwalker.php');

//for pagination
function wpbeginner_numeric_posts_nav() {
	    if( is_singular() )
	        return;
	    global $wp_query;
/** Stop execution if there's only 1 page */
	    if( $wp_query->max_num_pages <= 1 )
	        return;
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
/** Add current page to the array */
	if ( $paged >= 1 )
	$links[] = $paged;
/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
	        $links[] = $paged - 1;
	        $links[] = $paged - 2;
	    }

	    if ( ( $paged + 2 ) <= $max ) {
	        $links[] = $paged + 2;
	        $links[] = $paged + 1;
	    }
	    echo '<div><ul class="theme-pagination">' . "\n";
	/** Previous Post Link */
	    if ( get_previous_posts_link() )
	        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )

			echo '<li>…</li>';
	}
/** Link to current page, plus 2 pages in either direction if necessary */

	sort( $links );

	foreach ( (array) $links as $link ) {

		$class = $paged == $link ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

	}

	/** Link to last page, plus ellipses if necessary */

	if ( ! in_array( $max, $links ) ) {

		if ( ! in_array( $max - 1, $links ) )

			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

	}

	/** Next Post Link */

	if ( get_next_posts_link() )

		printf( '<li>%s</li>' . "\n", get_next_posts_link() );


	echo '</ul></div>' . "\n";


}

/* == new manu reagistation ===*/
function wpb_custom_new_menu() {
  register_nav_menu('topmenu',__( 'Top menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


/*====== CUSTOM WIGATE OPTION GEBERATOR ================*/

function wpb_widgets_init() {
	register_sidebar( array(
        'name' =>__( 'Home page Side bar', 'wpb'),
        'id' => 'sidebar-0',
        'description' => __( 'Footer middle Section', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="sub-ttl">',
        'after_title' => '</div>',
	) );
	register_sidebar( array(
        'name' =>__( 'Commen Side Bar for all page', 'wpb'),
        'id' => 'sidebar-a',
        'description' => __( 'Footer middle Section', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="sub-ttl">',
        'after_title' => '</div>',
	) );
    register_sidebar( array(
        'name' => __( 'Footer one', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'This is footer left side', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="sub-ttl">',
        'after_title' => '</div>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer Two', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Footer middle Section', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
        'name' =>__( 'Footer Three', 'wpb'),
        'id' => 'sidebar-3',
        'description' => __( 'Footer middle Section', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
	) );

	register_sidebar( array(
        'name' =>__( 'BLog Side bar', 'wpb'),
        'id' => 'sidebar-4',
        'description' => __( 'Footer middle Section', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
	) );	
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );


/*--- LOgoin function area ------------*/

function my_login_logo_one() { 
	?> 
	<style type="text/css"> 
				body.login div#login h1 a {
				background-image: url("wp-content/uploads/2018/10/apple-touch-icon-72x72.png");  //Add your own logo image in this url 
				padding-bottom: 30px; 
				} 
				body.login.login-action-login.wp-core-ui.locale-en-us {
    background-image: url(wp-content/uploads/2018/10/abstract-background-wallpaper-9.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
				p#backtoblog{
				display: none;
				}

				#login form p.submit {
				margin-top: 58px !important;
				}
				.login.wp-core-ui .button-primary {
				background:	#007747;
				border-color:#007747;
				box-shadow: 0 1px 0	#007747;
				color:#FFF;
				text-shadow: none;
				float: none;
				clear: both;
				display: block;
				width: 100%;
				padding: 7px;
				height: auto;
				font-size: 15px;
				}

				.login form{
				box-shadow:none;
				padding:20px;
				}
				#login {
				margin: 50px auto !important;;
				padding: 40px 20px !important;
				width: 400px;
				}
				.login label {
				color:
				#555;
				font-size: 14px;
				}
				.login form .forgetmenot{
				float:none;
				}
	</style>
	<?php 
	}
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );




function wp_login_form_custom($args = array()) {
	$argss = array(
		'echo' => true,
		'redirect' => property_list(),
		'form_id' => 'loginform',
		'label_username' => '',
		'label_password' => '',
		'label_remember' => __('Keep me logged in'),
		'label_log_in' => __('SIGN IN'),
		'id_username' => 'user_login',
		'id_password' => 'user_pass',
		'id_remember' => 'rememberme',
		'id_submit' => 'wp-submit',
		'remember' => true,
		'value_username' => NULL,
		'value_remember' => false
	);
	}


add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'homepage-thumb', 255, 145, true ); // (cropped)
}
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
 function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap-slider',  'CDN Url', array('jquery'), false, null);
}


function thumbnail(){
	if (has_post_thumbnail()) {
	the_post_thumbnail('post-image', array('class' => 'img-responsive img-thumbnail mxh'));
	}else {
	 echo '<img src="' . get_bloginfo( 'stylesheet_directory' ).'/images/apple-touch-icon-72x72.png" />'; 
	 }
	}

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
return get_site_url();
}

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
wp_redirect( home_url() );
exit();
}


add_action('check_admin_referer', 'logout_without_confirm', 10, 2);
function logout_without_confirm($action, $result)
{
    /**
     * Allow logout without confirmation
     */
    if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
        $redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : 'url-you-want-to-redirect';
        $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));
        header("Location: $location");
        die;
    }
}
?>