<?php
/*-------------------------------------------------------------------------*/
/*	Do not modify this file - The sky will fall
/*-------------------------------------------------------------------------*/ 

// Define File Directores
$theme_name = get_current_theme();
define('TT_FUNCTIONS', TEMPLATEPATH . '/framework');
define('TT_GLOBAL', TEMPLATEPATH . '/framework/global');
define('TT_ADMIN', TEMPLATEPATH . '/framework/admin');
define('TT_EXTENDED', TEMPLATEPATH . '/framework/extended');
define('TT_CONTENT', TEMPLATEPATH . '/framework/content');
define('TT_JS', get_template_directory_uri() . '/framework/js');
define('TT_FRAMEWORK', get_template_directory_uri() . '/framework');
define('TT_CSS', get_template_directory_uri() . '/css/');
define('TT_HOME', get_template_directory_uri());
define('TT', TEMPLATEPATH . '/framework/truethemes');
define('TIMTHUMB_SCRIPT',get_template_directory_uri()."/framework/extended/timthumb/timthumb.php");
define('TIMTHUMB_SCRIPT_MULTISITE',get_site_url(1)."/wp-content/themes/$theme_name/framework/extended/timthumb/timthumb.php");


// Load Theme Specific Functions
require_once(TEMPLATEPATH . '/framework/theme-specific/_theme_specific_init.php');


// Load Global Functions
require_once(TT_GLOBAL . '/widgets.php');
require_once(TT_GLOBAL . '/theme-functions.php');


// Load TrueThemes Functions
require_once(TT . '/upgrade/init.php');
require_once(TT . '/image-thumbs.php');
require_once(TT . '/metabox/init.php');


// Load Admin Framework
require_once(TT_ADMIN . '/admin-functions.php');
require_once(TT_ADMIN . '/admin-interface.php');


// Load Extended Functionality
require_once(TT_EXTENDED . '/multiple_sidebars.php');
require_once(TT_EXTENDED . '/breadcrumbs.php');
require_once(TT_EXTENDED . '/3d-tag-cloud/wp-cumulus.php');
require_once(TT_EXTENDED . '/twitter/latest-tweets.php');
require_once(TT_EXTENDED . '/page_linking.php');
if(!function_exists('wp_pagenavi')){require_once(TT_EXTENDED . '/wp-pagenavi.php');}
if(!function_exists('contact_form_parse')){
$tt_formbuilder = get_option('st_formbuilder');
if ($tt_formbuilder == "true"){require_once(TT_EXTENDED . '/grunion-contact-form/grunion-contact-form.php');}
}
if (class_exists('woocommerce')){
require_once(TT_EXTENDED . '/woocommerce-custom.php');	
}



// Load SEO Module
global $ttso;
$seo_module = $ttso->st_seo_module;

//check user setting at site options general settings.
if ($seo_module == "true"){
//require all seo module files and "activate" seo module.
require_once(TT_EXTENDED. '/seo-module/seo_module.php');
	$aioseop_options = get_option('aioseop_options');
	if($aioseop_options['aiosp_enabled']==0){
	$aioseop_options['aiosp_enabled'] = 1;
	update_option('aioseop_options',$aioseop_options);
	}
}else{
    //user has "disable" seo module,
    //we do not include seo module files, but just show an empty seo settings page,
    //so that user do not encounter WordPress "permissions" error, 
    //and the seo settings page is always there.
	$aioseop_options = get_option('aioseop_options');
	$aioseop_options['aiosp_enabled'] = 0;
	update_option('aioseop_options',$aioseop_options);
    add_action('admin_menu','truethemes_add_empty_seo_settings_page');
}

/**
* Do not move this function!
* Load empty SEO Setting Page!
**/
function truethemes_add_empty_seo_settings_page(){
	add_theme_page('SEO settings','SEO settings','manage_options','seo_settings','truethemes_empty_seo_settings_page');
}

/**
* Do not move this function!
* Empty SEO settings page!
**/
function truethemes_empty_seo_settings_page(){
?>
<div class="wrap">
<div style='padding:8px 10px 15px 15px'>	
<div id="icon-options-general" class="icon32"></div>
<h2>SEO Settings</h2>
</div>
<?php
	$aioseop_options = get_option('aioseop_options');
	if($aioseop_options['aiosp_enabled'] == 0){
			echo "<div id=\"message\" class=\"updated fade\"style='width:765px!important;margin:10px 0px 0px 0px;'><p>The SEO Module is currently disabled. To enable this Module, please go to <a href='".admin_url('admin.php?page=siteoptions')."'>Appearance &gt; Site Options &gt; General Settings</a>.</p></div>";
	}

}
?>