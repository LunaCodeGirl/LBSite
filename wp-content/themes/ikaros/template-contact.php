<?php
/*---------------------------------
	Template Name: Contact
------------------------------------*/
	get_header(); 
	global $more;
?>
	
	<h1 class="center"><?php the_title(); ?></h1>
	<div class="intro center"><?php echo get_post_meta($post->ID, 'rb_meta_box_tagline_set', true); ?></div>

	<div class="post-container">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

		<div class="form-container">
	      	<div class="response"></div>
	     	<form class="forms" action="<?php echo get_template_directory_uri() . '/form-handler.php'; ?>" method="post">
		        <fieldset>
		          <ol>
		            <li class="form-row text-input-row">
		              <input type="text" name="name" class="text-input defaultText required" title="<?php echo ot_get_option('rb_contact_name'); ?>"/>
		            </li>
		            <li class="form-row text-input-row">
		              <input type="text" name="email" class="text-input defaultText required email" title="<?php echo ot_get_option('rb_contact_email'); ?>"/>
		            </li>
		            <li class="form-row text-input-row">
		              <input type="text" name="subject" class="text-input defaultText" title="<?php echo ot_get_option('rb_contact_subject'); ?>"/>
		            </li>
		            <li class="form-row text-area-row">
		              <textarea name="message" class="text-area required"></textarea>
		            </li>
		            <li class="form-row hidden-row">
		              <input type="hidden" name="hidden" value="" />
		            </li>
		            <li class="button-row">
		              <input type="submit" value="<?php echo ot_get_option('rb_contact_submit'); ?>" name="submit" class="btn-submit" />
		            </li>
		          </ol>
		          <input type="hidden" name="v_error" id="v-error" value="Required" />
		          <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
		        </fieldset>
	      	</form>
    	</div>

		<?php endwhile; ?>
			
	</div>

	<div class="sidebar">
		<?php if(is_active_sidebar('rb_contact_widget'))
				dynamic_sidebar('rb_contact_widget'); ?>
	</div>
	
	<?php get_footer(); ?>