<?php
/*
* This file handles javascript register, enqueue, hook etc.
*/

function truethemes_manage_javascripts_scripts(){

if (!is_admin()) {
//deregister scripts
wp_deregister_script('comment-reply');

//register scripts
wp_register_script('jquery-slides', TT_JS .'/slides.min.jquery.js', array('jquery'), '',$in_footer = true);
wp_register_script( 'comment-reply', site_url().'/wp-includes/js/comment-reply.js',$deps=null,'1.0',$in_footer = true);
wp_register_script( 'truethemes-custom', TT_JS .'/custom-main.js', array('jquery'),'2.0',$in_footer = true);
wp_register_script( 'truethemes-lightbox', TT_JS .'/jquery.prettyPhoto.js', array('jquery'),'2.0',$in_footer = true);
wp_register_script( 'jquery-cycle-all', TT_JS .'/jquery.cycle.all.min.js', array('jquery'),'2.9.4',$in_footer = true);
wp_register_script('jquery-easing', TT_JS .'/jquery.easing.1.3.js', array('jquery'), '',$in_footer = true);
wp_register_script('jquery-isotope', TT_JS .'/jquery.isotope.js', array('jquery'), '',$in_footer = true);
wp_register_script('jquery-scrollto', TT_JS .'/jquery.scrollTo-min.js', array('jquery'), '',$in_footer = true);
wp_register_script('jquery-highlight', TT_JS .'/jquery.highlightFade.js', array('jquery'), '',$in_footer = true);
wp_register_script( 'truethemes-custom-faq', TT_JS .'/custom-faq.js', array('jquery'),'1.0',$in_footer = true);
wp_register_script('cusotm-counter', TT_JS .'/custom-counter.js', array('jquery'), '',$in_footer = true);

//enqueue scripts
if (is_page_template('page-template-home-jquery.php') || is_page_template('page-template-home-jquery-sidebar.php')) {
wp_enqueue_script('jquery-slides', TT_JS .'/slides.min.jquery.js', array('jquery'), '',$in_footer = true);
}

wp_enqueue_script( 'comment-reply', site_url().'/wp-includes/js/comment-reply.js',$deps=null,'1.0',$in_footer = true);
wp_enqueue_script( 'truethemes-custom', TT_JS .'/custom-main.js', array('jquery'),'1.0',$in_footer = true);
wp_enqueue_script( 'truethemes-lightbox', TT_JS .'/jquery.prettyPhoto.js', array('jquery'),'2.0',$in_footer = true);
wp_enqueue_script( 'jquery-cycle-all', TT_JS .'/jquery.cycle.all.min.js', array('jquery'),'2.9.4',$in_footer = true);
wp_enqueue_script('jquery-easing', TT_JS .'/jquery.easing.1.3.js', array('jquery'), '',$in_footer = true);
wp_enqueue_script('jquery-isotope', TT_JS .'/jquery.isotope.js', array('jquery'), '',$in_footer = true);

if (is_page_template('page-template-faq.php')) {
wp_enqueue_script('jquery-scrollto', TT_JS .'/jquery.scrollTo-min.js', array('jquery'), '',$in_footer = true);
wp_enqueue_script('jquery-highlight', TT_JS .'/jquery.highlightFade.js', array('jquery'), '',$in_footer = true);
wp_enqueue_script( 'truethemes-custom-faq', TT_JS .'/custom-faq.js', array('jquery'),'2.0',$in_footer = true);
}

if (is_page_template('page-template-under-construction.php')) {
wp_enqueue_script('cusotm-counter', TT_JS .'/custom-counter.js', array('jquery'), '',$in_footer = true);
}
		
}
}
//hook in last, so that plugins cannot change this? Maybe.
//hook in template redirect instead of init so that is_single() conditional tags works.
add_action('template_redirect', 'truethemes_manage_javascripts_scripts',90);

?>