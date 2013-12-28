<?php
/*---------------------------------
	Comments template
------------------------------------*/
?>

<?php if ( post_password_required() ) : ?>
				<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'ikaros' ); ?></p>
<?php
		return;
	endif;
?>

	<div id="comments">
	
		<?php if ( have_comments() ) : ?>
		
			<h3 id="comments-title"><?php get_comments_number(); _e('Comments to ', 'ikaros'); ?>"<?php the_title(); ?>"</h3>

			<ol id="singlecomments" class="commentlist"><?php wp_list_comments( array( 'callback' => 'ikaros_comment' ) ); ?></ol>

		<?php else : 
			if ( ! comments_open() ) {
				?>Comments are closed.<?php
			} else {
				?>
				<h3 id="comments-title"><?php _e('0 Comments to ', 'ikaros'); ?>"<?php the_title(); ?>"</h3>
				<?php __('Be the first to leave a reply!', 'ikaros');
			}
		?>

		<?php endif; // end have_comments() ?>
		
	</div>

	<div class="comment-form-wrapper">

		<?php 
		
		 $defaults = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div><input id="author" name="author" type="text" value="Name*" data-value="Name*." /></div>',
			'email'  => '<div><input id="email" name="email" type="text" value="Email*" data-value="Email*" /></div>',
			'url'    => '<div><input id="url" name="url" type="text" value="Website" data-value="Website" /></div>' ) ),
			'comment_field' => '<div><textarea id="comment" name="comment" cols="83" rows="4" data-value="Message*">Message*</textarea></div>',
			'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
			'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
			'comment_notes_before' => '',
			'comment_notes_after' => '',
			'id_form' => 'comment-form',
			'id_submit' => 'submit',
			'title_reply' => __( 'Would you like to share your thoughts?', 'ikaros' ),
			'title_reply_to' => __( 'Leave a Reply to %s', 'ikaros' ),
			'cancel_reply_link' => __( 'Cancel reply', 'ikaros' ),
			'label_submit' => __( 'Submit', 'ikaros' ),
		); 
		
		comment_form($defaults); 
		
		?>

	</div>