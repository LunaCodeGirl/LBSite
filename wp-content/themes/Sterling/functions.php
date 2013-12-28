<?php
/* Note to users:
* Do not edit this file. Any custom functions can be added to the Child Theme's functions.php file
* This will prevent losing your customizations during a theme upgrade. Cheers :)
*/

//check WP_DEBUG
//Some plugins such as wpcu3er will disable PHP error reporting, 
//therefore we must make sure it is turn on if WP_DEBUG is set to true.
if(defined('WP_DEBUG') == 1 || WP_DEBUG == true){
$error_setting = ini_get("display_errors");
	if($error_setting == '0'){
		ini_set('display_errors', '1');
	}
}

//Check if PHP error reporting is enabled.
//if it is enabled, we will only ALLOW PHP fatal error, syntax error, parse errors etc to show only.
$php_error_setting = ini_get("display_errors");
	if($php_error_setting == '1'){
	    //if you wnat to know what are these constants,
	    //reference to http://www.php.net/manual/en/errorfunc.constants.php
		error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING & ~ E_DEPRECATED & ~ E_USER_NOTICE);
}

// Please do not remove this line of code. Sky will fall.
require_once(TEMPLATEPATH . '/framework/framework_init.php');


// Load translation text domain
load_theme_textdomain ('framework_localize');

?>