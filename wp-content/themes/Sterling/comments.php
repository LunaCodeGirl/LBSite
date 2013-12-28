<?php 
// Prevent Comments page from being accessed directly
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thank You!');
// Prevent Comments page from being displayed if password protected
if ( post_password_required() ) { ?> <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','framework_localize'); ?></p>
<?php return; } ?>




<?php // Formatted Comments Function
function truethemes_comments($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
<div class="comment-wrap">
  <div class="comment-content" id="comment-<?php comment_ID(); ?>">
  	<div class="comment-gravatar"><?php echo get_avatar($comment,$size='60',$default=get_template_directory_uri().'/images/global/img-default-grav.png' ); ?>
  	</div><!-- end comment-gravatar -->
  
  	<div class="comment-text">
	<span class="comment-author"><?php comment_author_link() ?></span>
    <span class="comment-date"><?php comment_date('F j, Y'); ?></span>
	<?php if ($comment->comment_approved == '0') : ?><?php _e('Your comment is awaiting moderation.','framework_localize') ?><?php endif; ?>
	<?php comment_text() ?>
	<?php comment_reply_link(array_merge( $args, array('reply_text' => __('reply','framework_localize'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>  <?php edit_comment_link(__('(edit)','framework_localize'),' ','') ?>
    </div><!-- end comment-text -->   
  </div><!-- end comment-content -->
</div><!-- end comment-wrap -->
<?php }



if (have_comments()) : ?>
<?php $comment_count = count($comments_by_type['comment']); ($comment_count !== 1) ? $comment_txt = __("Comments","framework_localize") : $comment_txt = __("Comment","framework_localize");?>
<?php echo '<p class="tt-comment-count">'.$comment_count.'&nbsp;'.$comment_txt.'</p>'; ?>
<?php if ( ! empty($comments_by_type['comment']) ) : ?>

<div id="blog-comment-outer-wrap">
<ol class="comment-ol" id="post-comments">
<?php wp_list_comments('callback=truethemes_comments&type=comment'); ?>
</ol>



<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<div id="comments">
<nav id="comment-nav-below">
<div class="nav-next"><?php paginate_comments_links(); ?></div>
</nav>
</div>
<?php endif; // check for comment navigation ?>



<?php endif; ?>
<?php else : if ('open' == $post->comment_status) : else : endif; endif; ?>




<?php // Wordpress Coments Form
if ('open' == $post->comment_status) : ?>

<?php if (!have_comments()) : ?>
<div id="blog-comment-outer-wrap">
<?php endif; ?>

<div id="respond">
<h3 class="comment-title">
<?php
$comment_form_title = __('Leave a Comment','framework_localize');
$comment_form_replyto = __('Reply to %s','framework_localize');
comment_form_title($comment_form_title,$comment_form_replyto); 
?>
</h3>

<div class="comment-cancel"><?php cancel_comment_reply_link(); ?></div><!-- end comment-cancel -->


<?php if ( get_option('comment_registration') && !$user_ID) : ?>
<p>You must be<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"> logged in</a> to post a comment.</p>
<?php else : ?>


<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as %1$s. %2$sLog out &raquo;%3$s', 'framework_localize'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>', '<a href="'.(function_exists('wp_logout_url') ? wp_logout_url(get_permalink()) : get_option('siteurl').'/wp-login.php?action=logout" title="').'" title="'.__('Log out of this account', 'framework_localize').'">', '</a>') ?></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
<label for="author"><?php _e('Name', 'framework_localize') ?> <?php if ($req) echo"<span>"; _e("*", 'framework_localize'); echo"</span>"; ?></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
<label for="email"><?php _e('Email', 'framework_localize') ?> <?php if ($req) echo"<span>"; _e("*", 'framework_localize'); echo"</span>"; echo"<small> "; _e("(will not be published)","framework_localize"); echo "</small>"; ?></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><?php _e('Website', 'framework_localize') ?></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

<!--<p class="allowed-tags"><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><input name="submit" type="submit" id="submit-button" tabindex="5" value="<?php _e('Submit', 'framework_localize') ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div><!-- end respond -->

</div><!-- END blog-comment-outer-wrap -->
<?php endif; ?>