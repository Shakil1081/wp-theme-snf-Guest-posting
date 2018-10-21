<?php 
$default_avatar = 'get_template_directory_uri()/images/apple-touch-icon.png';
?>
<a id="comments"></a>
<h2>Comments</h2>
<?php if($comments) : ?>  
    <ol class="comments">  
    <?php foreach($comments as $comment) : ?>  
        <li id="comment-<?php comment_ID(); ?>" class="<?php if ($comment->user_id == 1) echo "authcomment";?>">


            <?php if ($comment->comment_approved == '0') : ?>  
                <p>Your comment is awaiting approval</p>  
            <?php endif; ?> 

           <?php echo get_avatar(get_comment_author_email(), 48, $default_avatar); ?>

            <cite><h3><?php comment_author_link(); ?></h3> on <small><?php comment_date(); ?></small></cite><br />

            <?php comment_text(); ?>
        </li>  
    <?php endforeach; ?>  
    </ol>  
<?php endif; ?> 

<?php if(comments_open()) : ?>
<div class="commentsection">
	<h2>Add Your Comment</h2>
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
		<!--========================================
		Form Start 
		==========================================-->
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			
            <?php if($user_ID) : ?>  
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
			<?php else : ?>  

			<div class="form-group row">
				<input type="text" name="author" id="author"  class="form-control form-control-sm" placeholder="Full Name" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />  
			</div>  
			<div class="form-group row">
					<input type="text" name="email" id="email"  class="form-control form-control-sm" placeholder="Email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
				</div> 
			  <div class="form-group row">
				<input type="text" name="url" id="url"  class="form-control form-control-lg" placeholder="Website" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />  
				</div>
			 
			<?php endif; ?>  
			<div class="row">
          <div class="form-group">
				<textarea name="comment" id="comment"  class="form-control" placeholder="Massage" rows="10" tabindex="4"></textarea>
				</div> 
		</div> 
            <?php //show_subscription_checkbox(); ?>
            <p><input name="submit" class="btn btn-primary" type="submit" id="submit" tabindex="5" value="Submit Comment" />  
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
            <?php do_action('comment_form', $post->ID); ?>  
		</form>  
</div>		
<!--========== Form end =================-->
    <?php endif; ?>  
<?php else : ?>  
    <p>The comments are closed.</p>  
<?php endif; ?>