<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

// VARIABLES
$themename = "Sterling";
$shortname = "st";

// Populate siteoptions option in array for use in theme
global $of_options;
$of_options = get_option('of_options');
$GLOBALS['template_path'] = TT_FRAMEWORK;


//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
$of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    


//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
$of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select the Blog page:");       


// Image Alignment radio box
// $options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center");


// True/False
$true_false = array("true" => "true","false" => "false"); 


// JS Slider - Effect
$js_effect = array("slide" => "slide","fade" => "fade"); 


// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 


//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");


//Footer Columns Array
$footer_columns_list = array("Default-Layout","1","2","3","4","5");


//Skin Selector
$skin = array("light","dark");


//Paths for "type" => "images"
$url =  get_template_directory_uri() . '/framework/admin/images/color-schemes/';
$banner_url =  get_template_directory_uri() . '/framework/admin/images/banner-overlays/';
$shadow_url =  get_template_directory_uri() . '/framework/admin/images/shadows/';
$footerurl =  get_template_directory_uri() . '/framework/admin/images/footer-layouts/';
$fonturl =  get_template_directory_uri() . '/framework/admin/images/fonts/';
$logourl =  get_template_directory_uri() . '/framework/admin/images/logo-builder/';
$recaptcha_themes = get_template_directory_uri() . '/framework/admin/images/recaptcha-themes/';


//Access the WordPress Categories via an Array
$exclude_categories = array();  
$exclude_categories_obj = get_categories('hide_empty=0');
foreach ($exclude_categories_obj as $exclude_cat) {
$exclude_categories[$exclude_cat->cat_ID] = $exclude_cat->cat_name;}










/*-----------------------------------------------------------------------------------*/
/* Create Site Options Array */
/*-----------------------------------------------------------------------------------*/
$options = array();
			
			
$options[] = array( "name" => __('General Settings','framework_localize'),
			"type" => "heading");
			

$options[] = array( "name" => __('Website Logo','framework_localize'),
			"desc" => __('Upload a custom logo for your Website.','framework_localize'),
			"id" => $shortname."_sitelogo",
			"std" => "", 
			"type" => "upload");
			
$options[] = array( "name" => __('Login Screen Logo','framework_localize'),
			"desc" => __('Upload a custom logo for your Wordpress login screen.','framework_localize'),
			"id" => $shortname."_loginlogo",
			"std" => "", 
			"type" => "upload");
			
$options[] = array( "name" => __('Favicon','framework_localize'),
			"desc" => __('Upload a 16px x 16px image that will represent your website\'s favicon.<br /><br /><em>To ensure cross-browser compatibility, we recommend converting the favicon into .ico format before uploading. (<a href="http://www.favicon.cc/" target="_blank">www.favicon.cc</a>)</em>','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "", 
			"type" => "upload");
			
$options[] = array( "name" => __('Logo Builder - Select an Icon','framework_localize'),
			"desc" => __('Select an icon to be used for your logo.<br><br><em>note: you should only select an icon if you won\'t be uploading a custom logo.</em>','framework_localize'),
			"id" => $shortname."_logo_icon",
			"std" => "nologo",
			"type" => "images",
			"options" => array(
				'custom-logo-1.png' => $logourl . 'logo-1.png',
				'custom-logo-2.png' => $logourl . 'logo-2.png',
				'custom-logo-3.png' => $logourl . 'logo-3.png',
				'custom-logo-4.png' => $logourl . 'logo-4.png',
				'custom-logo-5.png' => $logourl . 'logo-5.png',
				'custom-logo-6.png' => $logourl . 'logo-6.png',
				'custom-logo-7.png' => $logourl . 'logo-7.png',
				'custom-logo-8.png' => $logourl . 'logo-8.png',
				'custom-logo-9.png' => $logourl . 'logo-9.png'
				));
				
$options[] = array( "name" => __('Logo Builder - Text','framework_localize'),
			"desc" => __('Enter the text to be used for your logo.<br><br><em>note: you should only enter logo text if you won\'t be uploading a custom logo.</em>','framework_localize'),
			"id" => $shortname."_logo_text",
			"std" => "", 
			"type" => "text");
			
			
$options[] = array( "name" => __('Meta Boxes','framework_localize'),
			"desc" => __('This functionality hides meta boxes in the Dashboard to help Wordpress feel more like a CMS. This includes: Comments, Discussion, Trackbacks, Custom Fields, Author, and Slug. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_hidemetabox",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Inline Editing','framework_localize'),
			"desc" => __('This functionality adds an inline-editing button to all pages & posts so that logged-in administrators can quickly and easily edit their website. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_inline_editing",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('SEO Module','framework_localize'),
			"desc" => __('A Search Engine Optimization Module is available by default. <em>Please check this box to enable this Module. Please remove any SEO plugins before enabling this module, so as to prevent any possible SEO conflicts.</em>','framework_localize'),
			"id" => $shortname."_seo_module",
			"std" => "false",
			"type" => "checkbox");
			

$options[] = array( "name" => __('Responsive Design','framework_localize'),
			"desc" => __('This theme comes with a Responsive Design that will adjust the theme\'s design when viewed on a mobile device. <em>Please check this box if you prefer to disable the responsive design.</em>','framework_localize'),
			"id" => $shortname."_responsive",
			"std" => "false",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Update Notifier','framework_localize'),
			"desc" => __('An Update Notifier is included by default. This functionality enables the theme to automatically check with our server for the latest version available. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_update_notifier",
			"std" => "true",
			"type" => "checkbox");	
			
			
$options[] = array( "name" => __('Tracking Code','framework_localize'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework_localize'),
			"id" => $shortname."_google_analytics",
			"std" => "", 
			"type" => "textarea");
						
			
//filter to allow developer to add new options to general settings.			
$options = apply_filters('theme_option_general_settings',$options);











$options[] = array( "name" => __('Blog Settings','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Blog Page','framework_localize'),
			"desc" => __('Select your blog page from the dropdown list.','framework_localize'),
			"id" => $shortname."_blogpage",
			"std" => "",
			"type" => "select",
			"options" => $of_pages);
			

$options[] = array( "name" => __('Banner Title','framework_localize'),
			"desc" => __('This page title is displayed in the banner area of the Blog page.','framework_localize'),
			"id" => $shortname."_blogtitle",
			"std" => "Blog",
			"type" => "text");
			
			
$options[] = array( "name" => __('Searchbar','framework_localize'),
			"desc" => __('A searchbar is displayed within the banner of all Blog pages by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_blog_searchbar",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Banner Description','framework_localize'),
			"desc" => __('This descriptive text is displayed in the banner area of the Blog page.<br /><br /><em>Note: this text will only be displayed if the searchbar is diabled.</em>','framework_localize'),
			"id" => $shortname."_blogdescription",
			"std" => "",
			"type" => "textarea");
			
			
$options[] = array( "name" => __('Blog Post Excerpt','framework_localize'),
			"desc" => __('The full blog post is displayed by default. <em>Un-check this box to disable this functionality and display only the post excerpt.</em>','framework_localize'),
			"id" => $shortname."_blog_post_length",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Blog Post Excerpt Link','framework_localize'),
			"desc" => __('Enter the text for the link that will lead to the full blog post.<br><br><em>You can ignore this section if displaying the full blog post.</em>','framework_localize'),
			"id" => $shortname."_blog_excerpt_link",
			"std" => "Continue Reading",
			"type" => "text");
			
			
$options[] = array( "name" => __('Twitter "Re-tweet" Button','framework_localize'),
			"desc" => __('A Twitter re-tweet button is displayed under each blog post by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_blog_retweet",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Facebook "Like" Button','framework_localize'),
			"desc" => __('A Facebook "Like" button is displayed under each blog post by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_blog_fb_like",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Pinterest "Pin it" Button','framework_localize'),
			"desc" => __('A Pinterest "Pin it" button is displayed under each blog post by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_blog_pinterest",
			"std" => "true",
			"type" => "checkbox");			
			
$options[] = array( "name" => __('"Posted by" Information','framework_localize'),
			"desc" => __('The "Posted by"  information is displayed within each blog post by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_posted_by",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Post Comments','framework_localize'),
			"desc" => __('Post comments are enabled by default. <em>Un-check this box to completely disable comments on all blog posts.</em>','framework_localize'),
			"id" => $shortname."_post_comments",
			"std" => "true",
			"type" => "checkbox");		
			
$options[] = array( "name" => __('Exclude Categories','framework_localize'),
			"desc" => __('Check off any post categories that you\'d like to exclude from the blog.','framework_localize'),
			"id" => $shortname."_blogexcludetest",
			"std" => "", 
			"type" => "multicheck",
			"options" => $exclude_categories);			
			
			
			
//allow developer to add in new options to blog settings.			
$options = apply_filters('theme_option_blog_settings',$options);










$options[] = array( "name" => __('Footer Options','framework_localize'),
			"type" => "heading");			
			
			
$options[] = array( "name" => __('Footer Columns','framework_localize'),
			"desc" => __('Select the number of columns you would like to display in the footer.','framework_localize'),
			"id" => $shortname."_footer_columns",
			"std" => "Default-Layout",
			"type" => "select",
			"options" => $footer_columns_list);
			
			
$options[] = array( "name" => __('Footer Callout','framework_localize'),
			"desc" => __('A Callout Area is displayed above the footer by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_footer_callout",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Footer Callout - Text','framework_localize'),
			"desc" => __('Enter the text to be displayed in the footer Callout Area.','framework_localize'),
			"id" => $shortname."_footer_callout_text",
			"std" => "<p class=\"callout-heading\">Global Callout</p>
<p class=\"callout-text\">This nifty Callout Section is a sure fire way to direct your visitors where you need them!</p>",
			"type" => "textarea");
			

$options[] = array( "name" => __('Footer Callout - Button Label','framework_localize'),
			"desc" => __('Enter the text to be displayed within the Callout Button.','framework_localize'),
			"id" => $shortname."_footer_callout_button",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('Footer Callout - Button URL','framework_localize'),
			"desc" => __('Enter the URL where the user will be sent after clicking the Callout Button.','framework_localize'),
			"id" => $shortname."_footer_callout_button_url",
			"std" => "http://www.",
			"type" => "text");
			
			
$options[] = array( "name" => __('Footer Copyright','framework_localize'),
			"desc" => __('Enter the copyright information to be displayed in the footer.','framework_localize'),
			"id" => $shortname."_footer_copyright",
			"std" => "Copyright &copy; 2012 Your Company Name. All rights reserved.",
			"type" => "textarea");
				
//allows developer to add in new options to interface options page.				
$options = apply_filters('theme_option_interface_settings',$options);

			
			
			
			
			





			
$options[] = array( "name" => __('Styling Options','framework_localize'),
			"type" => "heading");
			
		
$options[] = array( "name" => __('Primary Color Scheme','framework_localize'),
			"desc" => __('Select the primary color scheme for your website.','framework_localize'),
			"id" => $shortname."_main_scheme",
			"std" => "",
			"type" => "images",
			"options" => array(
			'primary-coffee' 	=> $url . 'coffee.png',
			'primary-red' 		=> $url . 'red.png',
			'primary-autumn' 		=> $url . 'autumn.png',
			'primary-fire' 		=> $url . 'fire.png',
			'primary-golden' 	=> $url . 'golden.png',
			'primary-lime-green' 		=> $url . 'lime-green.png',
			'primary-purple' 	=> $url . 'purple.png',
			'primary-pink' 		=> $url . 'pink.png',
			'primary-periwinkle' 		=> $url . 'periwinkle.png',
			'primary-teal' 		=> $url . 'teal.png',
			'primary-green' 	=> $url . 'green.png',
			'primary-teal-grey' 		=> $url . 'teal-grey.png',		
			'primary-blue-grey' 		=> $url . 'blue-grey.png',	
			'primary-royal-blue' 		=> $url . 'royal-blue.png',
			'primary-blue' 		=> $url . 'blue.png',
			'primary-sky-blue' 		=> $url . 'sky-blue.png',
			'primary-silver' 		=> $url . 'silver.png',
			'primary-black' 	=> $url . 'black.png'
				));
				
				
$options[] = array( "name" => __('Secondary Color Scheme','framework_localize'),
			"desc" => __('Mix and match color schemes for a completely custom look.','framework_localize'),
			"id" => $shortname."_secondary_scheme",
			"std" => "default",
			"type" => "images",
			"options" => array(
			'default' 	=> $url . '_default.png',
			'secondary-coffee' 	=> $url . 'coffee.png',
			'secondary-red' 		=> $url . 'red.png',
			'secondary-autumn' 		=> $url . 'autumn.png',
			'secondary-fire' 		=> $url . 'fire.png',
			'secondary-golden' 	=> $url . 'golden.png',
			'secondary-lime-green' 		=> $url . 'lime-green.png',
			'secondary-purple' 	=> $url . 'purple.png',
			'secondary-pink' 		=> $url . 'pink.png',
			'secondary-periwinkle' 		=> $url . 'periwinkle.png',
			'secondary-teal' 		=> $url . 'teal.png',
			'secondary-green' 	=> $url . 'green.png',
			'secondary-teal-grey' 		=> $url . 'teal-grey.png',		
			'secondary-blue-grey' 		=> $url . 'blue-grey.png',	
			'secondary-royal-blue' 		=> $url . 'royal-blue.png',
			'secondary-blue' 		=> $url . 'blue.png',
			'secondary-sky-blue' 		=> $url . 'sky-blue.png',
			'secondary-silver' 		=> $url . 'silver.png',
			'secondary-black' 	=> $url . 'black.png'
				));
				
									
$options[] = array( "name" => __('Custom CSS','framework_localize'),
			"desc" => __('Use this area to add custom CSS to your website.','framework_localize'),
			"id" => $shortname."_custom_css",
			"std" => "",
			"type" => "textarea");
			
			
$options[] = array( "name" =>  __('Theme Designer','framework_localize'),
			"desc" => "",
			"id" => $shortname."_custom_info_text",
			"std" => __('You can further customize the entire look of your theme by using the built in Theme Designer. The Theme Designer is located right here within Site Options Panel under Appearance > Site Options > Theme Designer','framework_localize'),
			"type" => "info");
			
			
			
//filter to allow developer to add in new options for styling options.			
$options = apply_filters('theme_option_styling_settings',$options);	


			
			
			
	
	
	
	
	
			
$options[] = array( "name" => __('Interface Options','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Breadcrumbs','framework_localize'),
			"desc" => __('Breadcrumbs are displayed on all interior pages by default. <em>Un-check this box to disable breadcrumbs.</em>','framework_localize'),
			"id" => $shortname."_breadcrumbs",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Breadcrumbs "Home" Link','framework_localize'),
			"desc" => __('Customize the text for the home link displayed in the breadcrumbs.','framework_localize'),
			"id" => $shortname."_breadcrumbs_home_text",
			"std" => "Home",
			"type" => "text");
			
			
$options[] = array( "name" => __('Toolbar','framework_localize'),
			"desc" => __('A toolbar is displayed above the main navigation by default. <em>Un-check this box to disable the toolbar.</em>','framework_localize'),
			"id" => $shortname."_toolbar",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Dropdown Menus','framework_localize'),
			"desc" => __('The main menu organizes child pages into dropdown menus by default. <em>Un-check this box to disable the dropdown menus.</em>','framework_localize'),
			"id" => $shortname."_dropdown",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Searchbar','framework_localize'),
			"desc" => __('A Searchbar can be included on a per-page basis to any page on your website. Un-check this box to completely disable the searchbar from every page on your website. <em>Please note: this will override all per-page searchbar settings (this functionality excludes blog and utility pages).</em>','framework_localize'),
			"id" => $shortname."_global_searchbar",
			"std" => "true",
			"type" => "checkbox");
			
			
$options[] = array( "name" => __('Searchbar Text','framework_localize'),
			"desc" => __('Customize the text that is displayed in the search bar.','framework_localize'),
			"id" => $shortname."_searchbartext",
			"std" => "Search...",
			"type" => "text");
			
				
$options[] = array( "name" => __('Scroll to Top Link','framework_localize'),
			"desc" => __('A scroll-to-top button is added to the footer by default. <em>Un-check this box to disable the link.</em>','framework_localize'),
			"id" => $shortname."_scrolltoplink",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Scroll to Top Text','framework_localize'),
			"desc" => __('Add the text to be used for the "Scroll to Top" link.','framework_localize'),
			"id" => $shortname."_scrolltoptext",
			"std" => "Scroll to Top",
			"type" => "text");
			
$options[] = array( "name" => __('Gallery Settings','framework_localize'),
			"desc" => __('Enter the number of Gallery Posts to display on each page. <em>All posts will be displayed by default.</em>','framework_localize'),
			"id" => $shortname."_gallery_posts_per_page",
			"std" => "show all",
			"type" => "text");
				
//allows developer to add in new options to interface options page.				
$options = apply_filters('theme_option_interface_settings',$options);










$options[] = array( "name" => __('Theme Designer','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" =>  __('Top Toolbar - Background Color','framework_localize'),
					"desc" => __('Select a custom background color for your website\'s top toolbar.','framework_localize'),
					"id" => $shortname."_toolbar_bg_color",
					"std" => "", 
					"type" => "color");
			
			
$options[] = array( "name" =>  __('Banner - Background Color','framework_localize'),
					"desc" => __('Select a custom background color for your website\'s banner.','framework_localize'),
					"id" => $shortname."_banner_bg_color",
					"std" => "",
					"type" => "color");
					
					
$options[] = array( "name" =>  __('Footer - Background Color','framework_localize'),
					"desc" => __('Select a custom background color for your website\'s footer.','framework_localize'),
					"id" => $shortname."_footer_bg_color",
					"std" => "",
					"type" => "color");
					
					
$options[] = array( "name" => __('Banner &amp; Footer Design','framework_localize'),
			"desc" => __('Select a custom design for your website\'s banner and footer.<br /><br /><em>Note: This will add a transparent image on top of your already chosen background color.</em>','framework_localize'),
			"id" => $shortname."_banner_overlay",
			"std" => "banner-none",
			"type" => "images",
			"options" => array(
			'banner-none' 	=> $banner_url . 'banner-none.jpg',
			'banner-abstract.png' 	=> $banner_url . 'banner-abstract.jpg',
			'banner-bokeh.png' 	=> $banner_url . 'banner-bokeh.jpg',
			'banner-diagonal.png' 	=> $banner_url . 'banner-diagonal.jpg',
			'banner-halftone-1.png' 	=> $banner_url . 'banner-halftone-1.jpg',
			'banner-halftone-2.png' 	=> $banner_url . 'banner-halftone-2.jpg',
			'banner-noise.png' 	=> $banner_url . 'banner-noise.jpg',
			'banner-paisley.png' 	=> $banner_url . 'banner-paisley.jpg',
			'banner-stars.png' 	=> $banner_url . 'banner-stars.jpg',
			'banner-sunburst.png' 	=> $banner_url . 'banner-sunburst.jpg'
			));
			
			
			
$options[] = array( "name" => __('Shadow Style','framework_localize'),
			"desc" => __('Select the shadow style for your website\'s navigation bar and footer.','framework_localize'),
			"id" => $shortname."_shadow_style",
			"std" => "shadow-1.png",
			"type" => "images",
			"options" => array(
			'shadow-1.png' 	=> $shadow_url . 'admin-shadow-1.png',
			'shadow-2.png' 	=> $shadow_url . 'admin-shadow-2.png',
			'shadow-3.png' 	=> $shadow_url . 'admin-shadow-3.png',
			'shadow-4.png' 	=> $shadow_url . 'admin-shadow-4.png',
			'shadow-5.png' 	=> $shadow_url . 'admin-shadow-5.png'
			));
			

/* $options[] = array( "name" => __('Footer Design','framework_localize'),
			"desc" => __('Apply the same banner design to the footer.','framework_localize'),
			"id" => $shortname."_footer_design",
			"std" => "true",
			"type" => "checkbox"); */
			
			
$options[] = array( "name" => __('Top Toolbar - Padding','framework_localize'),
					"desc" => __('Modify the height of the top toolbar by adjusting the padding.<br /><br /><em>Default value is 8px.</em>','framework_localize'),
					"id" => $shortname."_toolbar_padding",
					"std" => "8px",
					"type" => "text");
			
			
/* $options[] = array( "name" => __('Homepage Banner - Padding','framework_localize'),
					"desc" => __('Adjust the height of the homepage banner by adjusting the padding.<br /><br /><em>Default value is 35px.</em>','framework_localize'),
					"id" => $shortname."_home_banner_padding",
					"std" => "35px",
					"type" => "text"); */
					
	
$options[] = array( "name" => __('Navigation Bar - Padding','framework_localize'),
					"desc" => __('Modify the height of the navigation bar by adjusting the padding.<br /><br /><em>Default value is 32px.</em>','framework_localize'),
					"id" => $shortname."_nav_bar_padding",
					"std" => "32px",
					"type" => "text");					


$options[] = array( "name" => __('Interior Banner - Padding','framework_localize'),
					"desc" => __('Modify the height of the interior banner by adjusting the padding.<br /><br /><em>Default value is 25px.</em>','framework_localize'),
					"id" => $shortname."_interior_banner_padding",
					"std" => "25px",
					"type" => "text");
					
					
$options[] = array( "name" => __('Footer - Padding','framework_localize'),
					"desc" => __('Modify the height of the footer by adjusting the padding.<br /><br /><em>Default padding is 20px.</em>','framework_localize'),
					"id" => $shortname."_footer_padding",
					"std" => "20px",
					"type" => "text");
				
					
$options[] = array( "name" =>  __('Link Color','framework_localize'),
					"desc" => __('Select a custom color for your website\'s links.','framework_localize'),
					"id" => $shortname."_custom_link_color",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Main Menu - Active Link Color','framework_localize'),
					"desc" => __('Select a custom color for the Main Menu active link.','framework_localize'),
					"id" => $shortname."_custom_link_color_main_menu",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H1)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H1 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h1",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H2)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H2 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h2",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H3)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H3 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h3",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H4)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H4 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h4",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H5)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H5 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h5",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color (H6)','framework_localize'),
					"desc" => __('Select a custom color for your website\'s H6 Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_h6",
					"std" => "",
					"type" => "color");
					
$options[] = array( "name" =>  __('Heading Color - Sidebar Widgets','framework_localize'),
					"desc" => __('Select a custom color for your website\'s Sidebar Widget Headings.','framework_localize'),
					"id" => $shortname."_custom_heading_color_widget",
					"std" => "",
					"type" => "color");
													
									
//allow developer to add in new options to Additional settings.			
$options = apply_filters('theme_option_additional_settings',$options);		
			
			
			
			






			
$options[] = array( "name" => __('Typography','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Google Web Fonts','framework_localize'),
			"desc" => __('Select a custom font to be used for your website\'s headings.<br><br><strong>Fonts:</strong><br>1. (no custom font)<br>2. Droid Sans<br>3. Cabin<br>4. Questrial<br>5. Cuprum<br>6. News Cycle<br>7. Enriqueta<br>8. Open Sans<br>9. Arvo<br>10. Kreon<br>11. Indie Flower<br>12. Josefin Sans','framework_localize'),
			"id" => $shortname."_google_font",
			"std" => "nofont",
			"type" => "images",
			"options" => array(
				'nofont' => $fonturl . '1-no-font.png',
				'Droid Sans' => $fonturl . '2-droid-sans.png',
				'Cabin' => $fonturl . '3-cabin.png',
				'Questrial' => $fonturl . '4-questrial.png',
				'Cuprum' => $fonturl . '5-cuprum.png',
				'News Cycle' => $fonturl . '6-news-cycle.png',
				'Enriqueta' => $fonturl . '7-enriqueta.png',
				'Open Sans' => $fonturl . '8-open-sans.png',
				'Arvo' => $fonturl . '9-arvo.png',
				'Kreon' => $fonturl . '10-kreon.png',
				'Indie Flower' => $fonturl . '11-indie-flower.png',
				'Josefin Sans' => $fonturl . '12-josefin-sans.png'
				));
				
				
$options[] = array( "name" => __('Custom Google Web Font','framework_localize'),
			"desc" => __('Enter a custom font name If you prefer to use a font that\'s not listed above.<br><br>Here is the complete list of available <a href="http://www.google.com/webfonts" target="_blank">Google Web Fonts</a>.','framework_localize'),
			"id" => $shortname."_custom_google_font",
			"std" => "",
			"type" => "text");
			
			
//allow developer to add in new options to typography settings.			
$options = apply_filters('theme_option_typography_settings',$options);	





	


				
				






$options[] = array( "name" => __('Forms','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('Form Builder','framework_localize'),
			"desc" => __('A powerful form builder is included by default. <em>Un-check this box to disable the form builder.</em>','framework_localize'),
			"id" => $shortname."_formbuilder",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('reCAPTCHA: Public Key','framework_localize'),
			"desc" => __('Enter your reCAPTCHA Public Key.<br><br>
			You can obtain your reCAPTCHA keys at: <a href="http://www.google.com/recaptcha" target="_blank">google.com/recaptcha</a><br><br><em>Simply leave this field blank if you won\'t be using this functionality.</em>','framework_localize'),
			"id" => $shortname."_publickey",
			"std" => "",
			"type" => "text");			
			
$options[] = array( "name" => __('reCAPTCHA: Private Key','framework_localize'),
			"desc" => __('Enter your reCAPTCHA Private Key.<br><br>
			You can obtain your reCAPTCHA keys at: <a href="http://www.google.com/recaptcha" target="_blank">google.com/recaptcha</a><br><br><em>Simply leave this field blank if you won\'t be using this functionality.</em>','framework_localize'),
			"id" => $shortname."_privatekey",
			"std" => "",
			"type" => "text");
			

//added since version 2.6
$options[] = array( "name" => __('reCAPTCHA Theme - Select a theme','framework_localize'),
			"desc" => __('Please select a reCAPTCHA theme.','framework_localize'),
			"id" => $shortname."_recaptcha_theme",
			"std" => "default_theme",
			"type" => "images",
			"options" => array(
				'default_theme' => $recaptcha_themes . 'red.jpg',
				'white_theme' => $recaptcha_themes . 'white.jpg',
				'black_theme' => $recaptcha_themes . 'black.jpg',
				'clean_theme' => $recaptcha_themes . 'clean.jpg',
				));

$options[] = array( "name" => __('reCAPTCHA Theme - customization','framework_localize'),
			"desc" => __('(For Advance User Only)<br/><br/>This setting overwrites the above reCAPTCHA theme selection. <br/><br/>You can customize the look and feel of reCAPTCHA, by entering your custom javascript code here. Please read <a href="http://code.google.com/intl/pt-PT/apis/recaptcha/docs/customization.html" target="_blank">reCAPTCHA developer documentation</a> for details.<br/><br/><u><strong>Important Notes:</strong></u><br/>Please change the javascript codes from google documentation to use <strong>double quotes</strong> for all javascript variables, and not single quotes.','framework_localize'),
			"id" => $shortname."_recaptcha_custom",
			"std" => "",
			"type" => "textarea");	
							
									
$options[] = array( "name" => __('Required Indicator','framework_localize'),
			"desc" => __('This text will be displayed next to required fields.','framework_localize'),
			"id" => $shortname."_contact_required",
			"std" => "*",
			"type" => "text");
			
$options[] = array( "name" => __('Success Message','framework_localize'),
			"desc" => __('Customize the success message that will be displayed after the user submits the form.','framework_localize'),
			"id" => $shortname."_contact_successmsg",
			"std" => "Thank you for messaging us. We will get back to you as soon as possible. Cheers!",
			"type" => "textarea");
			
			$options[] = array( "name" => __('Submit Button - Text','framework_localize'),
			"desc" => __('Customize the text that will be displayed on submit button','framework_localize'),
			"id" => $shortname."_submit_button_text",
			"std" => "Send",
			"type" => "text");				
			
//allow developer to add in new options to forms.				
$options = apply_filters('theme_option_forms_settings',$options);	









$options[] = array( "name" => __('Utility Pages','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('404 Page - Searchbar','framework_localize'),
			"desc" => __('A searchbar is displayed within the banner of the 404 Page by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_error_searchbar",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('404 Page - Banner Title','framework_localize'),
			"desc" => __('Set the page title that is displayed in the banner area of the 404 Page.','framework_localize'),
			"id" => $shortname."_404title",
			"std" => "Page not Found",
			"type" => "text");
			
$options[] = array( "name" => __('404 Page - Banner Description','framework_localize'),
			"desc" => __('This text is displayed within the banner area of the 404 Page.<br /><br /><em>Note: this text will only be displayed if the searchbar is diabled.</em>','framework_localize'),
			"id" => $shortname."_404description",
			"std" => "",
			"type" => "textarea");
			
$options[] = array( "name" => __('404 Page - Message','framework_localize'),
			"desc" => __('Set the message that is displayed within the content area on the 404 Page.','framework_localize'),
			"id" => $shortname."_404message",
			"std" => "<p><strong>Oops! the page you are looking for could not be found.</strong></p>

<p>Here are some links that you might find useful:</p>

<ul class=\"not-found-list\">
<li><a href=\"http://www.\">Home</a></li>
<li><a href=\"http://www.\">Sitemap</a></li>
<li><a href=\"http://www.\">Contact Us</a></li>
</ul>",
			"type" => "textarea");
			
$options[] = array( "name" => __('Search Results Page - Searchbar','framework_localize'),
			"desc" => __('A searchbar is displayed within the banner of the Search Results by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_results_searchbar",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Search Results Page - Banner Title','framework_localize'),
			"desc" => __('Set the page title that is displayed in the banner area of the Search Results Page.','framework_localize'),
			"id" => $shortname."_results_title",
			"std" => "Search Results",
			"type" => "text");
			
$options[] = array( "name" => __('Search Results Page - Banner Description','framework_localize'),
			"desc" => __('This text is displayed within the banner area of the Search Results Page.<br /><br /><em>Note: this text will only be displayed if the searchbar is diabled.</em>','framework_localize'),
			"id" => $shortname."_results_description",
			"std" => "",
			"type" => "textarea");
			
$options[] = array( "name" => __('Search Results Page - Fallback Message','framework_localize'),
			"desc" => __('Set the message that is displayed when a search comes back with no results.','framework_localize'),
			"id" => $shortname."_results_fallback",
			"std" => "<p>Our Apologies, but your search did not return any results. Please try using a different search term.</p>",
			"type" => "textarea");
			
$options[] = array( "name" => __('Under Construction Page - Main Message','framework_localize'),
			"desc" => __('Set the main message that is displayed on the under construction page.','framework_localize'),
			"id" => $shortname."_construction_main",
			"std" => "New Website Coming Soon!",
			"type" => "textarea");
			
			
$options[] = array( "name" => __('Under Construction Page - Year','framework_localize'),
			"desc" => __('Select the year that your website will be ready.','framework_localize'),
			"id" => $shortname."_construction_year",
			"std" => "2012",
			"type" => "select",
			"options" => array(
				'2012' => '2012',
				'2013' => '2013',
				'2014' => '2014',
				'2015' => '2015',
				'2016' => '2016',
				'2017' => '2017',
				'2018' => '2018',
				'2019' => '2019',
				'2020' => '2020',
				));
					
				
$options[] = array( "name" => __('Under Construction Page - Month','framework_localize'),
			"desc" => __('Enter the number of the month that your website will be ready.<br><br>1- January<br>2- February<br>3- March<br>4- April<br>5- May<br>6- June<br>7- July<br>8- August<br>9- September<br>10- October<br>11- November<br>12- December','framework_localize'),
			"id" => $shortname."_construction_month",
			"std" => "5",
			"type" => "text"
				);
				
				
$options[] = array( "name" => __('Under Construction Page - Day','framework_localize'),
			"desc" => __('Enter the day that your website will be ready.<br><br><em>Example: 10</em>','framework_localize'),
			"id" => $shortname."_construction_day",
			"std" => "10",
			"type" => "text"
			);
			
//allow developer to add in new options to utility.				
$options = apply_filters('theme_option_utility_settings',$options);			
			
			
			
			
			
			
			
			
			
			
			
			
			
$options[] = array( "name" => __('Homepage Lightbox','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('Banner Content','framework_localize'),
			"desc" => __('Enter the content to be displayed within the Banner area next to the callout images.','framework_localize'),
			"id" => $shortname."_home_lightbox_banner_content",
			"std" => "",
			"type" => "textarea");
			
$options[] = array( "name" => __('Primary Callout Image','framework_localize'),
			"desc" => __('This is the primary callout image displayed in the banner area.<br>(450 x 316)','framework_localize'),
			"id" => $shortname."_home_lightbox_primary_image",
			"std" => "",
			"type" => "upload");						
			
$options[] = array( "name" => __('Secondary Callout Image','framework_localize'),
			"desc" => __('This is the secondary callout image displayed behind the primary image in the banner area.<br>(450 x 271)','framework_localize'),
			"id" => $shortname."_home_lightbox_secondary_image",
			"std" => "", 
			"type" => "upload");			
			
$options[] = array( "name" => __('Lightbox','framework_localize'),
			"desc" => __('The Callout images will link to a Lightbox by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_home_lightbox",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Lightbox Content','framework_localize'),
			"desc" => __('Enter the content to be displayed within the Lightbox. <em>(Examples below)</em>','framework_localize'),
			"id" => $shortname."_home_lightbox_content",
			"std" => "",
			"type" => "textarea");
			
$options[] = array( "name" =>  __('Lightbox Content Examples','framework_localize'),
			"desc" => "",
			"id" => $shortname."_custom_info_text",
			"std" => __('
			<strong>Image:</strong> <em>http://www.yoursite.com/images/image-1.jpg</em><br>
			<strong>YouTube Video:</strong> <em>http://www.youtube.com/watch?v=VKS08be78os</em><br>
			<strong>Vimeo Video:</strong> <em>http://vimeo.com/8245346</em><br>
			<strong>Flash SWF:</strong> <em>http://www.yoursite.com/files/design.swf?width=792&height=294</em><br>
			<strong>i-Frame:</strong> <em>http://www.apple.com?iframe=true&width=850&height=500</em>','framework_localize'),
			"type" => "info");

			
			
//allow developer to add in new options to homepage settings.			
$options = apply_filters('theme_option_home_settings',$options);	









$options[] = array( "name" => __('JavaScript Slider','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Slide Transition Effect','framework_localize'),
			"desc" => __('Select a transition effect for your slides.','framework_localize'),
			"id" => $shortname."_jslide_effect",
			"std" => "slide",
			"type" => "radio",
			"options" => $js_effect);
			
			
$options[] = array( "name" => __('Slide Speed','framework_localize'),
			"desc" => __('This number represents how fast your slides will animate.<br><br><em>Note:<br>lower number = faster speed</em>','framework_localize'),
			"id" => $shortname."_jslide_speed",
			"std" => "500",
			"type" => "text");
			
			
$options[] = array( "name" => __('Slide Delay Time','framework_localize'),
			"desc" => __('This number represents the amount of delay time between each slide.<br><br><em>Note: leaving this set to 0 will prevent the slides from auto-play.<br><br>lower number = shorter delay</em>','framework_localize'),
			"id" => $shortname."_jslide_delay",
			"std" => "0",
			"type" => "text");
			
			
$options[] = array( "name" => __('Randomize Slides','framework_localize'),
			"desc" => __('Select whether or not your slides will display in random order.','framework_localize'),
			"id" => $shortname."_jslide_randomize",
			"std" => "false",
			"type" => "radio",
			"options" => $true_false);
				
				
$options[] = array( "name" => __('Pause on Hover','framework_localize'),
			"desc" => __('Select whether or not your slides will pause when hovered over by user.','framework_localize'),
			"id" => $shortname."_jslide_pause_hover",
			"std" => "false",
			"type" => "radio",
			"options" => $true_false);
			
			
			
//allow developer to add in new options to JS Slider settings.			
$options = apply_filters('theme_option_jslide_settings',$options);





//always check if woocommence is activated before showing this options!
if (class_exists('woocommerce')):

$options[] = array( "name" => __('WooCommerce','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('Breadcrumbs','framework_localize'),
			"desc" => __('Breadcrumbs are displayed within the banner of the WooCommerce pages by default. <em>Un-check this box to disable this functionality.</em>','framework_localize'),
			"id" => $shortname."_woocommerce_breadcrumbs",
			"std" => "true",
			"type" => "checkbox");
			
$options[] = array( "name" => __('Banner Title','framework_localize'),
			"desc" => __('Set the page title that is displayed in the banner area of the WooCommerce Pages.','framework_localize'),
			"id" => $shortname."_woocommerce_title",
			"std" => "Shop",
			"type" => "text");
			
$options[] = array( "name" => __('Banner Description','framework_localize'),
			"desc" => __('This text is displayed within the banner area of the WooCommerce Pages.<br /><br /><em>Note: this text will only be displayed if the banner sidebar region is diabled.</em>','framework_localize'),
			"id" => $shortname."_woocommerce_description",
			"std" => "",
			"type" => "textarea");
			

			
//allow developer to add in new options to woocommerce.				
$options = apply_filters('theme_option_woocommerce_settings',$options);

endif; //end checking for woocommence.
		

update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>