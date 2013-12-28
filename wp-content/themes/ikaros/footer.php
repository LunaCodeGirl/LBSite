<?php
/*---------------------------------
	The footer of the theme
------------------------------------*/

$theme_options = get_option('option_tree');
$is_contact = is_page_template('template-contact.php');
$is_single = is_single();
$is_project = is_singular('portfolio');
$is_gallery = is_singular('gallery') || is_page_template('template-gallery.php') || is_page_template('template-slideshow.php') || is_singular('portfolio') || is_page_template('template-portfolio.php');
$is_video = is_page_template('template-video.php');
global $rev_js;

?>

  <div class="clear"></div>
</div>

<div class="footer-wrapper clearfix">

	<div class="footer-light"></div>

	<div class="footer">

		<div class="one-fourth">
			<?php if(is_active_sidebar('rb_footer_widget_1'))
				dynamic_sidebar('rb_footer_widget_1'); ?>
		</div>

		<div class="one-fourth">
			<?php if(is_active_sidebar('rb_footer_widget_2'))
				dynamic_sidebar('rb_footer_widget_2'); ?>
		</div>

		<div class="one-fourth">
			<?php if(is_active_sidebar('rb_footer_widget_3'))
				dynamic_sidebar('rb_footer_widget_3'); ?>
		</div>

		<div class="one-fourth last">
			<?php if(is_active_sidebar('rb_footer_widget_4'))
				dynamic_sidebar('rb_footer_widget_4'); ?>
		</div>

    </div>

    <div class="clear"></div>

</div>

<div class="site-generator-wrapper clearfix">

	<div class="site-generator">

	    <div class="copyright">
			<?php if(is_active_sidebar('rb_footer_widget_5'))
				dynamic_sidebar('rb_footer_widget_5'); ?>
	    </div>

		<?php if(is_active_sidebar('rb_footer_widget_6'))
				dynamic_sidebar('rb_footer_widget_6'); ?>

    	<div class="clear"></div>

  </div>

</div>

<div id="scripts">

	<?php

		wp_register_script('theme_plugins', get_template_directory_uri().'/js/plugins.min.js', array('jquery'), NULL, true);
		wp_register_script('theme_scripts', get_template_directory_uri().'/js/scripts.js', array('theme_plugins'), NULL, true);
		
		wp_enqueue_script('theme_plugins');
		wp_enqueue_script('theme_scripts');

		if(ot_get_option('rb_tracking_where') == 'footer') echo ot_get_option('rb_tracking');

	wp_footer(); 

	?>

</div>

</body>
</html>