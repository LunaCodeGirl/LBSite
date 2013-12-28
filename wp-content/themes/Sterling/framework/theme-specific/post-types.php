<?php
/*-----------------------------------------------------------------------------------*/
/*	Gallery Post Type
/*-----------------------------------------------------------------------------------*/
function truethemes_post_type_gallery() 
{
	$labels = array(
		'name' => __( 'Gallery Posts' , 'framework_localize'),
		'singular_name' => __( 'Gallery Post' , 'framework_localize'),
		'rewrite' => array('slug' => __( 'gallery' , 'framework_localize')),
		'add_new' => __('Add New' , 'framework_localize'),
		'add_new_item' => __('Add New Gallery Post' , 'framework_localize'),
		'edit_item' => __('Edit Gallery Post' , 'framework_localize'),
		'new_item' => __('New Gallery Post' , 'framework_localize'),
		'view_item' => __('View Gallery Post' , 'framework_localize'),
		'search_items' => __('Search Gallery Posts' , 'framework_localize'),
		'not_found' =>  __('No Gallery Posts found' , 'framework_localize'),
		'not_found_in_trash' => __('No Gallery Posts found in Trash' , 'framework_localize'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title')
	  ); 
	  
	  register_post_type(__( 'gallery' , 'framework_localize'),$args);
}
add_action( 'init', 'truethemes_post_type_gallery' );





/*-----------------------------------------------------------------------------------*/
/*	FAQ Post Type
/*-----------------------------------------------------------------------------------*/
function truethemes_post_type_faqs() 
{
	$labels = array(
		'name' => __( 'FAQs' , 'framework_localize'),
		'singular_name' => __( 'FAQ' , 'framework_localize'),
		'rewrite' => array('slug' => __( 'faq' , 'framework_localize')),
		'add_new' => __('Add New' , 'framework_localize'),
		'add_new_item' => __('Add New FAQ' , 'framework_localize'),
		'edit_item' => __('Edit FAQ' , 'framework_localize'),
		'new_item' => __('New FAQ' , 'framework_localize'),
		'view_item' => __('View FAQ' , 'framework_localize'),
		'search_items' => __('Search FAQs' , 'framework_localize'),
		'not_found' =>  __('No FAQs found' , 'framework_localize'),
		'not_found_in_trash' => __('No FAQs found in Trash' , 'framework_localize'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 7,
		'supports' => array('title')
	  ); 
	  
	  register_post_type(__( 'faq' , 'framework_localize'),$args);
}
add_action( 'init', 'truethemes_post_type_faqs' );





/*-----------------------------------------------------------------------------------*/
/*	Slider Post Type
/*-----------------------------------------------------------------------------------*/
function truethemes_post_type_slider() 
{
	$labels = array(
		'name' => __( 'Slider Posts' , 'framework_localize'),
		'singular_name' => __( 'Slider Post' , 'framework_localize'),
		'rewrite' => array('slug' => __( 'slider' , 'framework_localize')),
		'add_new' => __('Add New' , 'framework_localize'),
		'add_new_item' => __('Add New Slider Post' , 'framework_localize'),
		'edit_item' => __('Edit Slider Post' , 'framework_localize'),
		'new_item' => __('New Slider Post' , 'framework_localize'),
		'view_item' => __('View Slider Post' , 'framework_localize'),
		'search_items' => __('Search Slider Posts' , 'framework_localize'),
		'not_found' =>  __('No Slider Posts found' , 'framework_localize'),
		'not_found_in_trash' => __('No Slider Posts found in Trash' , 'framework_localize'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title' , 'editor')
	  ); 
	  
	  register_post_type(__( 'slider' , 'framework_localize'),$args);
}
add_action( 'init', 'truethemes_post_type_slider' );