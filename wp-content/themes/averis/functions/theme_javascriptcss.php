<?php
/* ------------------------------------- */
/* ENQUEUE JAVASCRIPTS + CSS */
/* ------------------------------------- */
function enqueue_scripts() {
	global $post;
	if (!is_admin()) {
		wp_enqueue_script( 'jquery' );
		
		// Enqueue the Theme Styles
		wp_enqueue_style( 'AVERIS_google_font',get_option_tree("aversis_main_google_font"));
		wp_enqueue_style( 'AVERIS_base_style',AVERIS_CSS.'/base.css');
		wp_enqueue_style( 'AVERIS_skeleton_style',AVERIS_CSS.'/skeleton.css');
		wp_enqueue_style( 'AVERIS_layout_style',AVERIS_CSS.'/layout.css');
		wp_enqueue_style( 'AVERIS_reset_style',AVERIS_CSS.'/reset.css');
		wp_enqueue_style( 'AVERIS_prettyphoto_style',AVERIS_CSS.'/prettyPhoto.css');
		wp_enqueue_style( 'AVERIS_style',AVERIS_CSS.'/screen.php');
		wp_enqueue_style( 'AVERIS_mediaelement_style',AVERIS_CSS.'/mediaelementplayer.min.css');
	    wp_enqueue_style( 'AVERIS_wp_style',AVERIS_THEME.'/style.css');
		
	    // Enqueue the Theme JS  
		wp_enqueue_script('AVERIS_standard_plugins_script', AVERIS_JAVASCRIPT."/jquery.themepunch.plugins.min.js", array('jquery'));
		wp_enqueue_script('AVERIS_tooltip_script', AVERIS_JAVASCRIPT."/jquery.themepunch.punchtip.js", array('jquery'));
		wp_enqueue_script('AVERIS_twitter_script', AVERIS_JAVASCRIPT."/jquery.themepunch.TwitterReader.js", array('jquery'));
		wp_enqueue_script('AVERIS_background_script', AVERIS_JAVASCRIPT."/jquery.themepunch.tpbackground.js", array('jquery'));
		wp_enqueue_script('AVERIS_form_script', AVERIS_JAVASCRIPT."/averis_forms.php", array('jquery'));
		wp_enqueue_script('AVERIS_revolution_script', AVERIS_JAVASCRIPT."/jquery.themepunch.revolution.min.js", array('jquery'));
		wp_enqueue_script('AVERIS_colorpicker_script', AVERIS_JAVASCRIPT."/colorpicker.js", array('jquery'));
		wp_enqueue_script('AVERIS_main_script', AVERIS_JAVASCRIPT."/screen.php", array('jquery'));
		wp_enqueue_script('AVERIS_audio_script', AVERIS_JAVASCRIPT."/mediaelement-and-player.min.js", array('jquery'));
		wp_enqueue_script('AVERIS_prettyphoto_script', AVERIS_JAVASCRIPT."/jquery.prettyPhoto.js", array('jquery'));
		wp_enqueue_script('AVERIS_flv_script', AVERIS_JAVASCRIPT."/flowplayer-3.2.6.min.js", array('jquery'));
		wp_enqueue_script('AVERIS_flickr_script', AVERIS_JAVASCRIPT."/jquery.themepunch.FlickrPreview.php", array('jquery'));
		wp_enqueue_script('AVERIS_fitvid_script', AVERIS_JAVASCRIPT."/FitVids.js", array('jquery'));

		if (get_post_meta($post->ID,'_wp_page_template',true)=="portfolio.php")
			wp_enqueue_script('AVERIS_portfolio_script', AVERIS_JAVASCRIPT."/jquery.themepunch.portfolio.js", array('jquery'));
	}
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>