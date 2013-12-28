<?php
// Include & setup custom metabox and fields
$prefix = '_cmb_'; // start with an underscore to hide fields from custom fields list
add_filter( 'cmb_meta_boxes', 'be_sample_metaboxes' );


function be_sample_metaboxes( $meta_boxes ) {
$meta_boxes[] = array(
'id' => 'test_metabox',
'title' => 'Settings',
'pages' => array('gallery'), // post type
'context' => 'normal',
'priority' => 'high',
'show_names' => true, // Show field names on the left
'fields' => array(

array(
	'name' => 'Thumbnail, Title and Description',
	'desc' => 'These 3 items will be displayed directly on the gallery page.',
	'type' => 'title'
),
array(
	'name' => 'Thumbnail Image',
	'desc' => 'Upload an image or enter the URL to a thumbnail image. (this will be automatically resized)',
	'id' => $prefix . 'gal_thumbnail',
	'type' => 'file'
),
array(
 'name' => 'Title',
 'desc' => 'Would you like to display the title of this item?',
 'id' => $prefix . 'gal_title_select',
 'type' => 'select',
'options' => array(
array('name' => 'Yes', 'value' => 'yes'),
array('name' => 'No', 'value' => 'no')			
)
),
array(
 'name' => 'Description',
 'desc' => 'Would you like to display the description of this item?',
 'id' => $prefix . 'gal_description_select',
 'type' => 'select',
'options' => array(
array('name' => 'Yes', 'value' => 'yes'),
array('name' => 'No', 'value' => 'no')			
)
),
array(
	'name' => 'Description',
	'desc' => 'This description will be displayed below the title. (you can simply ignore this section if you won\'t be displaying the description)',
	'id' => $prefix . 'gal_description',
	'type' => 'textarea_small'
),

array(
	'name' => 'Link to a Page',
	'desc' => 'Enter a url to link the Thumbnail Image to a Page. (This will override Lightbox Settings).',
	'id' => $prefix . 'gal_link_to_page',
	'type' => 'text'
),


array(
 'name' => 'Open Page Link in',
 'desc' => 'Would you like to open the page link in current window or new window?',
 'id' => $prefix . 'gal_link_target',
 'type' => 'select',
'options' => array(
					array('name' => 'Current Window', 'value' => '_self'),
					array('name' => 'New Window', 'value' => '_blank')			
				  )
),


array(
	'name' => 'Lightbox Description',
	'desc' => 'This description will be displayed within the lightbox overlay.',
	'id' => $prefix . 'gal_lightbox_title',
	'type' => 'text'
),

array(
	'name' => 'Lightbox Items',
	'desc' => 'Each gallery item can have up to 5 lightbox items.<br><br> To display an image simply use the upload button next to each field. To display a video or other media simply paste the proper URL into the given field.<br><br>Sample Media Types:<br><br><strong>YouTube Video:</strong> http://www.youtube.com/watch?v=VKS08be78os<br><strong>Vimeo Video:</strong> http://vimeo.com/8245346<br><strong>Flash SWF:</strong> http://www.adobe.com/products/flashplayer/include/marquee/design.swf?width=792&height=294<br><strong>i-Frame:</strong> http://www.apple.com?iframe=true&width=850&height=500<br><br>',
	'type' => 'title'
),

array(
	'name' => 'Lightbox Item 1',
	'desc' => 'This will be the 1st item displayed in the lightbox.',
	'id' => $prefix . 'gal_lightbox',
	'type' => 'file'
),

array(
	'name' => 'Lightbox Item 2',
	'desc' => 'This will be the 2nd item displayed in the lightbox.',
	'id' => $prefix . 'gal_lightbox2',
	'type' => 'file'
),

array(
	'name' => 'Lightbox Item 3',
	'desc' => 'This will be the 3rd item displayed in the lightbox.',
	'id' => $prefix . 'gal_lightbox3',
	'type' => 'file'
),

array(
	'name' => 'Lightbox Item 4',
	'desc' => 'This will be the 4th item displayed in the lightbox.',
	'id' => $prefix . 'gal_lightbox4',
	'type' => 'file'
),

array(
	'name' => 'Lightbox Item 5',
	'desc' => 'This will be the 5th item displayed in the lightbox.',
	'id' => $prefix . 'gal_lightbox5',
	'type' => 'file'
),
array(
		'name' => 'Category',
		'desc' => 'Choose a category for this gallery item. You can also add a new category using the categories box over on the right.',
		'id' => $prefix . 'text_taxonomy_radio',
		'taxonomy' => 'gallery-category', //Enter Taxonomy Slug
		'type' => 'taxonomy_multicheck',
		),
	)
);




/*---------------------------------------------------*/
/*	FAQ Meta Boxes
/*---------------------------------------------------*/
$meta_boxes[] = array(
		'id' => 'faq_metabox',
		'title' => 'FAQ Details',
		'pages' => array('faq'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'FAQ Question',
				'desc' => 'Enter the FAQ Question',
				'id' => $prefix . 'faq_question',
				'type' => 'textarea_small'
			),
			
			array(
				'name' => 'FAQ Answer',
				'desc' => 'Enter the FAQ Answer',
				'id' => $prefix . 'faq_answer',
				'type' => 'wysiwyg'
			),
		)
	);
	
	




/*---------------------------------------------------*/
/*	Slider Meta Boxes
/*---------------------------------------------------*/
$meta_boxes[] = array(
		'id' => 'slider_metabox',
		'title' => 'Slider Post Details',
		'pages' => array('slider'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
		array(
			'name' => 'Featured Image',
			'desc' => 'Upload an image or enter the URL to the image you\'d like to display. (this will be automatically resized to 445 x 273)',
			'id' => $prefix . 'slider_image',
			'type' => 'file'
		),
		
		array(
			'name' => 'Featured Image Link',
			'desc' => 'Would you like the featured image to be a clickable link? If so, enter the URL here.',
			'id' => $prefix . 'slider_image_url',
			'type' => 'text'
		),
		
		array(
			'name' => 'Featured Image Alt Text',
			'desc' => 'Add descriptive Alt text to your featured image to help boost your site\'s SEO.',
			'id' => $prefix . 'slider_image_alt_text',
			'type' => 'text'
		),
		
		array(
			'name' => 'Featured Video',
			'desc' => 'Enter the URL to the YouTube or Vimeo video that you\'d like to display.',
			'id' => $prefix . 'slider_video',
			'type' => 'text'
		),
		
		array(
				'name' => 'Alignment',
				'desc' => 'Would you like to align the Image/Video to the right or left?',
				'id' => $prefix . 'slider_alignment',
				'type' => 'select',
				'options' => array(
					array('name' => 'Align Right', 'value' => 'align_right'),
					array('name' => 'Align Left', 'value' => 'align_left')		
				)
			),
			
			
		)
	);
	
	
	
	
	

/*---------------------------------------------------*/
/*	Meta Boxes for Pages
/*---------------------------------------------------*/
$meta_boxes[] = array(
		'id' => 'page_metabox',
		'title' => 'Page Settings',
		'pages' => array('page'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Featured Image',
				'desc' => 'The featured image is the first item displayed within the content of the page.',
				'id' => $prefix . 'page_featured_image',
				'type' => 'file'
			),
			
			array(
				'name' => 'Banner Title',
				'desc' => 'Use this section to override the default banner title',
				'id' => $prefix . 'bannertitle',
				'type' => 'text'
			),
			
			array(
				'name' => 'Searchbar',
				'desc' => 'Would you like to display a searchbar on this page?',
				'id' => $prefix . 'banner_search',
				'type' => 'select',
				'options' => array(
					array('name' => 'Yes', 'value' => 'yes'),
					array('name' => 'No', 'value' => 'no')			
				)
			),
			
			array(
				'name' => 'Banner Description',
				'desc' => 'Use this section to enter a short description for this page. (note: if you are displaying the searchbar this description will not be displayed.)',
				'id' => $prefix . 'banner_description',
				'type' => 'textarea_small'
			),
		)
	);
	
return $meta_boxes;
}
add_action('init','be_initialize_cmb_meta_boxes',9999);
function be_initialize_cmb_meta_boxes() {
if (!class_exists('cmb_Meta_Box')) {require_once('init.php');}}
?>
<?php
//Start of new page side meta box
add_action('admin_init', 'truethemes_add_custom_box',1);
add_action('save_post', 'truethemes_save_postdata');

//add box to side column of page
function truethemes_add_custom_box(){
    
	/* add_meta_box(
        'truethemes_meta_box_id',
        __( 'Sub Navigation', 'framework_localize' ), 
        'truethemes_inner_custom_box',
        'page','side','low'
    ); */
    
     add_meta_box(
        'truethemes_video_id',
        __( 'Featured Video', 'framework_localize' ), 
        'truethemes_inner_custom_box_3',
        'post','side','low'
    );
    
     add_meta_box(
        'truethemes_featured_image_2',
        __( 'Featured Image (External Source)', 'framework_localize' ), 
        'truethemes_inner_custom_box_4',
        'post','side','low'
    );
    
        

}

//page meta box
function truethemes_inner_custom_box(){

  //nonce
  wp_nonce_field( plugin_basename(__FILE__), 'truethemes_noncename' );
  
  //retrieve post meta value for check
  global $post;
  $post_id = $post->ID;
  $meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);

  //check box
  echo '<input type="checkbox" id="truethemes_page_checkbox" name="truethemes_page_checkbox" value="yes"';
 if($meta_value=='yes'){
  echo"checked='yes'";
 }else{
  echo"";
 }
  echo '/>';
  echo '<label for="truethemes_checkbox"> ';
  _e("Hide the sub navigation", 'framework_localize' );
  echo '</label> ';
}



//post meta box
function truethemes_inner_custom_box_3(){

  //nonce
  wp_nonce_field( plugin_basename(__FILE__), 'truethemes_noncename' );
  
  //retrieve post meta value for check
  global $post;
  $post_id = $post->ID;
  $video_url = get_post_meta($post_id,'truethemes_video_url',true);

//video url input  
echo "<p><label>Video URL</label> ";
echo "<input type='text' id='truethemes_video_url' name='truethemes_video_url' value='$video_url' /></p>";
}

//post meta box
function truethemes_inner_custom_box_4(){

  //nonce
  wp_nonce_field( plugin_basename(__FILE__), 'truethemes_noncename' );
  
  //retrieve post meta value for check
  global $post;
  $post_id = $post->ID;
  $image_url = get_post_meta($post_id,'truethemes_external_image_url',true);
  
  if(!empty($image_url)){

		//show tim thumb image if there is setted image url.
		if(is_multisite()){
		//multisite timthumb request url - to tested online.
	
		$theme_name = get_current_theme();
	
		$image_src = TIMTHUMB_SCRIPT_MULTISITE."?src=$image_url&w=200";
		
		}else{
		//single site timthumb request url
	
		$image_src = TIMTHUMB_SCRIPT."?src=$image_url&w=250";
	
		}

		echo "<img src='$image_src' alt=''/>";

	}

//video url input  
echo "<p><label>Image URL</label> ";
echo "<input type='text' id='truethemes_external_image_url' name='truethemes_external_image_url' value='$image_url' /></p>";
}


function truethemes_save_postdata($post_id){
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
      return $post_id;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  
  	if (!isset($_POST['truethemes_noncename']))
	{
	//If nonce not posted, set it with null to prevent debug error.
	$_POST['truethemes_noncename'] = null;
	}   

  if ( !wp_verify_nonce( $_POST['truethemes_noncename'], plugin_basename(__FILE__) ) )
      return $post_id;


	if (!isset($_POST['post_type']))
	{
	//If post_type not set, set it with null to prevent debug error.
	$_POST['post_type'] = null;
	} 
      
 	 if($_POST['post_type'] == 'page'){
 	 
 	 if (!isset($_POST['truethemes_page_checkbox']))
	{
	//If post_type not set, set it with null to prevent debug error.
	$_POST['truethemes_page_checkbox'] = null;
	}  	 

 	 $meta = $_POST['truethemes_page_checkbox'];
  	
  	update_post_meta($post_id,'truethemes_page_checkbox',$meta);
 	
  
  	}
  
  	if($_POST['post_type'] == 'post'){

  	$video_url = $_POST['truethemes_video_url'];
  	$image_url = $_POST['truethemes_external_image_url'];
  	  
  	update_post_meta($post_id,'truethemes_video_url',$video_url);
  	update_post_meta($post_id,'truethemes_external_image_url',$image_url);
  	  
	}

}
?>