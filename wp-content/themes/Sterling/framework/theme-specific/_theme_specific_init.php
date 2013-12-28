<?php
//site options
require_once(TEMPLATEPATH . '/framework/theme-specific/site-options.php');

//admin functions
require_once(TEMPLATEPATH . '/framework/theme-specific/admin-functions.php');

//shortcodes
require_once(TEMPLATEPATH . '/framework/theme-specific/shortcodes.php');

//shortcodes
require_once(TEMPLATEPATH . '/framework/theme-specific/tinymce/tinymce.loader.php');

//metaboxes
require_once(TEMPLATEPATH . '/framework/theme-specific/metabox.php');

//Javascript Loader
require_once(TEMPLATEPATH . '/framework/theme-specific/javascript.php');

//post types
require_once(TEMPLATEPATH . '/framework/theme-specific/post-types.php');

//taxonomy
require_once(TEMPLATEPATH . '/framework/theme-specific/taxonomy.php');

//navigation functions (register navs + custom walker)
require_once(TEMPLATEPATH . '/framework/theme-specific/navigation.php');

//sidebars
require_once(TEMPLATEPATH . '/framework/theme-specific/sidebars.php');

//update notifier
$update_notifier = get_option('st_update_notifier');
if($update_notifier == 'true' || empty($update_notifier)){
require_once(TEMPLATEPATH . '/framework/theme-specific/update-notifier.php');
}
?>