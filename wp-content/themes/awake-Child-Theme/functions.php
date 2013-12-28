<?php
/**
 * Sets up the theme by loading the Mysitemyway class & initializing the framework
 * which activates all classes and functions needed for theme's operation.
 *
 * @package Mysitemyway
 * @subpackage Functions
 */

# Load the Mysitemyway class.
require_once( TEMPLATEPATH . '/framework.php' );

# Get theme data.
$theme_data = get_theme_data( TEMPLATEPATH . '/style.css' );

# Initialize the Mysitemyway framework.
Mysitemyway::init(array(
	'theme_name' => $theme_data['Name'],
	'theme_version' => $theme_data['Version']
));





function before_page_content_function()
{
	if (!is_front_page())
		echo '<hr />';
}


add_action(MYSITE_PREFIX . '_before_page_content', 'before_page_content_function');



function primary_menu_begin_function()
{
	echo '<div id="primary-menu-inner-background"></div>';
}


add_action(MYSITE_PREFIX . '_primary_menu_begin', 'primary_menu_begin_function');



/*function primary_menu_end_function()
{
	echo '</div><!-- End of Primary Menu Wrapper -->';
}


add_action(MYSITE_PREFIX . '_primary_menu_end', 'primary_menu_end_function');*/



?>