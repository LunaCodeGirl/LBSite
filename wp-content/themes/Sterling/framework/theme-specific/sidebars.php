<?php
function truethemes_widgets_init() {

register_sidebar( array(
'name' => 'Top Left Toolbar',
'description' => 'This sidebar is displayed in the top left region above the logo.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<span class="display-none">',
'after_title' => '</span>',
));

register_sidebar( array(
'name' => 'Top Right Toolbar',
'description' => 'This sidebar is displayed in the top right region above the navigation.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<span class="display-none">',
'after_title' => '</span>',
));

register_sidebar( array(
'name' => 'Homepage Sidebar',
'description' => 'This sidebar is displayed in the homepage. (sidebar template required)',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="widget-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Blog Sidebar',
'description' => 'This sidebar is displayed on all Blog pages.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="widget-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Contact Sidebar',
'description' => 'This sidebar is displayed on the contact page.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="widget-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Search Results Sidebar',
'description' => 'This sidebar is displayed on the Search Results page.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="widget-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'First Footer Column',
'description' => 'First Footer Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Second Footer Column',
'description' => 'Second Footer Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Third Footer Column',
'description' => 'Third Footer Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Fourth Footer Column',
'description' => 'Fourth Footer Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Fifth Footer Column',
'description' => 'Fifth Footer Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'First Under Construction Column',
'description' => 'First Under Construction Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Second Under Construction Column',
'description' => 'Second Under Construction Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

register_sidebar( array(
'name' => 'Third Under Construction Column',
'description' => 'Third Under Construction Column.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget' => '</div>',
'before_title' => '<p class="foot-heading">',
'after_title' => '</p>',
));

//since version 1.0.6.
//%2$s is needed for widget class to be added by woocommence or any other plugin.
//In this case, this is needed for ajax add to cart on shop page to work.
//probably need to add to all other sidebars.
register_sidebar( array(
'name' => 'WooCommerce Sidebar',
'description' => 'This sidebar is displayed on your WooCommerce pages.',
'before_widget' => '<div class="sidebar-widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<p class="widget-heading">',
'after_title' => '</p>',
));

}
add_action( 'widgets_init', 'truethemes_widgets_init' );
?>