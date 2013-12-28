<?php


add_filter( 'ot_show_pages', '__return_false' );include'includes/functions-init.php';
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'option-tree/ot-loader.php' );


/*********************************************************************

	This file contains the most important functions of the theme. Edit carefully! :)

*********************************************************************/

/*---------------------------------
	Make some adjustments on theme setup
------------------------------------*/

if ( ! function_exists( 'ikaros_setup' ) ):
	function ikaros_setup() {
		
		//Make theme available for translation
		load_theme_textdomain( 'ikaros', get_template_directory() . '/lang' );
	
		//Define content width
		if(!isset($content_width)) $content_width = 940;

		//This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();
		
		//This theme uses post thumbnails
		add_theme_support( 'post-thumbnails' );
		
		//Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		$locale = get_locale();
		$locale_file = get_template_directory() . "/lang/$locale.php";

		if ( is_readable( $locale_file ) )
			require_once( $locale_file );
			
		//This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Navigation', 'ikaros' ),
		) );

		//Define custom thumbnails
		set_post_thumbnail_size( 151, 110, true );
		add_image_size( 'thumb-video',  312, 250, true );
		
	}
endif;
add_action( 'after_setup_theme', 'ikaros_setup' );

/*---------------------------------
	Make some changes to the wp_title() function
------------------------------------*/

function ikaros_filter_wp_title( $title, $separator ) {

	if ( is_feed() ) return $title;
		
	global $paged, $page;

	if ( is_search() ) {
	
		//If we're a search, let's start over:
		$title = sprintf( __( 'Search results for %s', 'ikaros' ), '"' . get_search_query() . '"' );
		//Add a page number if we're on page 2 or more:
		if ( $paged >= 2 )
			$title .= " $separator " . sprintf( __( 'Page %s', 'ikaros' ), $paged );
		//Add the site name to the end:
		$title .= " $separator " . get_bloginfo( 'name', 'display' );
		//We're done. Let's send the new title back to wp_title():
		return $title;
	}

	//Otherwise, let's start by adding the site name to the end:
	$title .= get_bloginfo( 'name', 'display' );

	//If we have a site description and we're on the home/front page, add the description:
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $separator " . $site_description;

	//Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $separator " . sprintf( __( 'Page %s', 'ikaros' ), max( $paged, $page ) );

	//Return the new title to wp_title():
	return $title;
}
add_filter( 'wp_title', 'ikaros_filter_wp_title', 10, 2 );

/*---------------------------------
	Create a wp_nav_menu() fallback, to show a home link
------------------------------------*/

function ikaros_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'ikaros_page_menu_args' );

/*---------------------------------
	Comments template
------------------------------------*/

if ( ! function_exists( 'ikaros_comment' ) ) :
	function ikaros_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
		?>

		<li id="comment-<?php comment_ID(); ?>" class="clearfix">
			
			<div class="user"><?php echo get_avatar( $comment, 70 ); ?></div>

			<div class="message">

				<a class="reply-link" href="<?php echo get_comment_reply_link(); ?>"><?php __('Reply', 'ikaros'); ?></a>

				<div class="info">
					<h2><?php echo (get_comment_author_url() != 'Website' && get_comment_author_url() != '' ? comment_author_link() : comment_author()); ?></h2>
					<div class="meta"><?php echo comment_date('F j, Y'); ?></div>
				</div>

				<?php comment_text(); ?>
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="await"><?php _e( 'Your comment is awaiting moderation.', 'ikaros' ); ?></em>
				<?php endif; ?>

			</div>

		</li>

		<?php
			break;
			case 'pingback'  :
			case 'trackback' :
		?>
		
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'ikaros' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'ikaros'), ' ' ); ?></p></li>
		<?php
				break;
		endswitch;
	}
endif;

/*---------------------------------
	Register widget areas
------------------------------------*/

function rb_widgets_init() {

	register_sidebar( array(
		'name' => __('Blog sidebar', 'ikaros'),
		'id' => 'rb_blog_widget',
		'description' => __('The blog/post right sided sidebar', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget sidebox %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Contact sidebar', 'ikaros'),
		'id' => 'rb_contact_widget',
		'description' => __('The contact page right sided sidebar', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget sidebox %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer first widget area', 'ikaros'),
		'id' => 'rb_footer_widget_1',
		'description' => __('The top footer\'s first widget area(1/4)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer second widget area', 'ikaros'),
		'id' => 'rb_footer_widget_2',
		'description' => __('The top footer\'s second widget area(2/4)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer third widget area', 'ikaros'),
		'id' => 'rb_footer_widget_3',
		'description' => __('The top footer\'s third widget area(3/4)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer fourth widget area', 'ikaros'),
		'id' => 'rb_footer_widget_4',
		'description' => __('The top footer\'s fourth widget area(4/4)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __('Footer\'s bottom first widget area', 'ikaros'),
		'id' => 'rb_footer_widget_5',
		'description' => __('The footer\'s bottom stripe first widget area(1/2)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget left %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => __('Footer\'s bottom second widget area', 'ikaros'),
		'id' => 'rb_footer_widget_6',
		'description' => __('The footer\'s bottom stripe second widget area(2/2)', 'ikaros'),
		'before_widget' => '<div id="%1$s" class="widget right %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>',
	) );
	
}  
add_action( 'widgets_init', 'rb_widgets_init' );

/*---------------------------------
	Register custom sidebar areas
------------------------------------*/

$sidebars = ot_get_option('rb_sidebars');
if(!empty($sidebars))
	foreach($sidebars as $sidebar) {
		register_sidebar( array(
			'name' => $sidebar['title'],
			'id' => $sidebar['id'],
			'description' => '',
			'before_widget' => '<div id="%1$s" class="widget sidebox %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	}

function filter_radio_images( $array, $field_id ) {

  /* only run the filter where the field ID is my_radio_images */
  if ( $field_id == 'rb_meta_box_sidebar_layout' ) {
    $array = array(
      array(
        'value'   => 'full-width',
        'label'   => __( 'Full Width', 'option-tree' ),
        'src'     => OT_URL . '/assets/images/layout/full-width.png'
      ),
      array(
        'value'   => 'right-sidebar',
        'label'   => __( 'Right Sidebar', 'option-tree' ),
        'src'     => OT_URL . '/assets/images/layout/right-sidebar.png'
      )
    );
  }
  
  return $array;
  
}

add_filter( 'ot_radio_images', 'filter_radio_images', 10, 2 );
	

/*---------------------------------
	Remove "Recent Comments Widget" Styling
------------------------------------*/

function ikaros_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'ikaros_remove_recent_comments_style' );


/*---------------------------------
	Function that replaces the default the_excerpt() function
------------------------------------*/
 
function rb_excerptlength_folio($length) {
    return 20;
}
function rb_excerptlength_widget($length) {
    return 18;
}
function rb_excerptlength_post($length) {
    return 25;
}
function rb_excerptmore($more) {
    return ' ...';
}
	
function rb_excerpt($length_callback='', $more_callback='') {

    global $post;
	
    if(function_exists($length_callback)){
		add_filter('excerpt_length', $length_callback);
    }
	
    if(function_exists($more_callback)){
		add_filter('excerpt_more', $more_callback);
    }
	
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = $output;
	
    echo $output;
	
}   

/*---------------------------------
	Function that replaces the default get_the_excerpt() function(only for shortcodes)
------------------------------------*/

function rb_get_excerpt($excerpt, $charlength) {

	$charlength++;
	$content = '';

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$content .= mb_substr( $subex, 0, $excut );
		} else {
			$content .= $subex;
		}
		$content .= ' ...';
	} else {
		$content .= $excerpt;
	}

	return $content;
	
}

/*---------------------------------
	Function that refilters the get_the_excerpt() function
------------------------------------*/

function rb_refilter_excerpt( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output = preg_replace('/<a[^>]+>Continue reading.*?<\/a>/i','',$output);
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'rb_refilter_excerpt' );

/*---------------------------------
	Enable excerpts for pages
------------------------------------*/

add_post_type_support( 'page', 'excerpt' );

/*---------------------------------
	Add a custom class to the user's gravatar
------------------------------------*/

function change_avatar_css($class) {
	$class = str_replace("class='avatar", "class='commentAvatar", $class) ;
	return $class;
}
add_filter('get_avatar','change_avatar_css');

/*---------------------------------
	Redefine the search form structure
------------------------------------*/

function rb_search_form($form) {

    $form = '
	<form role="search" method="get" id="searchform" class="searchBox" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text hidden" for="s">' . __('Search for:', 'ikaros') . '</label>
		<input type="text" data-value="Type and hit Enter" value="' . __('Type and hit Enter', 'ikaros') . '" name="s" id="s" />
		<!--<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />-->
    </form>';
    return $form;
	
}
add_filter( 'get_search_form', 'rb_search_form' );

/*---------------------------------
	Function that returns all categories of a custom post
------------------------------------*/

function rb_get_categories($post_id, $taxonomy, $delimiter = ', ', $get = 'name', $echo = true){
	$tags = wp_get_post_terms($post_id, $taxonomy);
	$list = '';
	foreach($tags as $tag){
		$list .= $tag -> $get . $delimiter;
	}

	if($echo)
		echo substr($list, 0, strlen($delimiter)*(-1));
	else 
		return substr($list, 0, strlen($delimiter)*(-1));
}

/*---------------------------------
	Add portfolio/gallery filters to admin panel
------------------------------------*/

add_action( 'restrict_manage_posts', 'todo_restrict_manage_posts' );
add_filter('parse_query','todo_convert_restrict');
function todo_restrict_manage_posts() {
    global $typenow;
    $args   =   array( 'public' => true, '_builtin' => false );
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
        $filter = get_object_taxonomies($typenow);
        foreach ($filter as $tax_slug) {
                $tax_obj = get_taxonomy($tax_slug);
                wp_dropdown_categories(array(
                    'show_option_all' => __('Show All '.$tax_obj->label ),
                    'taxonomy' => $tax_slug,
                    'name' => $tax_obj->name,
                    'orderby' => 'name',
                    'selected' => (isset($_GET[$tax_obj->query_var]) ? $_GET[$tax_obj->query_var] : ''),
                    'hierarchical' => $tax_obj->hierarchical,
                    'show_count' => true,
                    'hide_empty' => false
                ));
        }
    }
}
function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) && $var != 0 ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
}
function override_is_tax_on_post_search($query) {
    global $pagenow;
    $qv = &$query->query_vars;
    if ($pagenow == 'edit.php' && isset($qv['taxonomy']) && isset($qv['s'])) {
        $query->is_tax = true;
    }
}
add_filter('parse_query','override_is_tax_on_post_search');

/*---------------------------------
	A custom pagination function
------------------------------------*/

function rb_pagination($pages = '', $range = 2) {  

     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   

     if(1 != $pages) {
         echo "<div id='pagination'>";

		echo "<div class='nav-previous'><a" . (($paged > 1) ? " class='hidden'" : "") . " href='".get_pagenum_link($paged + 1)."'><span class='meta-nav-prev'>&larr; Older posts</span></a></div>";

		echo "<div class='nav-next'><a" . (($paged < $pages) ? " class='hidden'" : "") . " href='".get_pagenum_link($paged - 1)."'><span class='meta-nav-next'>Newer posts &rarr;</span></a></div>";
			
         echo "</div>";
     }
	 
}

/*---------------------------------
	Count post views
------------------------------------*/

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/*---------------------------------
	Function which gets all images inside a gallery and parses them for the portfolio post
------------------------------------*/

function rb_attachment_gallery($postid=0, $size='full', $attributes='') {

	if ($postid<1) $postid = get_the_ID();

	if ($images = get_children(array(

		'post_parent' => $postid,

		'post_type' => 'attachment',

		'order' => 'ASC',

		'orderby' => 'menu_order',

		'numberposts' => -1,

		'post_mime_type' => 'image')))

		foreach($images as $image) {
			$img = wp_get_attachment_image_src($image->ID, $size);
			$cap = get_post($image->ID)->post_excerpt;
		?>

			<div class="zetaImageBox">

				<img src="<?php echo $img[0]; ?>" />
				<?php if($cap != '') : ?><span><?php echo $cap; ?></span><?php endif; ?>
				<a href="<?php echo $img[0]; ?>" class="fancybox-media enlarge">Enlarge</a>

			</div>

		<?php

		}

}



/*---------------------------------
	Function which returns an array from a gallery post
------------------------------------*/

function rb_attachment_gallery2($postid=0, $size='full', $attributes='') {

	$gallery = array();

	if ($postid<1) $postid = get_the_ID();

	if ($images = get_children(array(

		'post_parent' => $postid,

		'post_type' => 'attachment',

		'orderby' => 'menu_order',

		'order' => 'ASC',

		'numberposts' => -1,

		'post_mime_type' => 'image')))

		foreach($images as $image) {
			$img = wp_get_attachment_image_src($image->ID, $size);
			$caption = get_post($image->ID)->post_excerpt;
			$title = get_post($image->ID)->post_title;
			array_push($gallery, array('img' => $img[0], 'caption' => $caption, 'title' => $title));
		}

	return $gallery;

}


/*---------------------------------
	Function that saves colors/typography
------------------------------------*/

function save_ot_values() {

	//open and read css file
	$stylesheet_path = '../wp-content/themes/ikaros/css/colors.css';
	$stylesheet = fopen($stylesheet_path, 'r');
	$data = fread($stylesheet, filesize($stylesheet_path));
	fclose($stylesheet);
	
	//make changes inside the css file
	$data = replace_mark('/*rb_color_accent*/', $data, ot_get_option('rb_color_accent', '#6b99b6'));
	$data = replace_mark('/*rb_color_hover*/', $data, ot_get_option('rb_color_hover', '#b66b79'));
	$data = replace_mark('/*rb_color_body*/', $data, ot_get_option('rb_color_body', '#555555'));
	$data = replace_mark('/*rb_color_footer*/', $data, ot_get_option('rb_color_footer', '#c9c9c9'));
	$data = replace_mark('/*rb_color_meta*/', $data, ot_get_option('rb_color_meta', '#899096'));
	$data = replace_mark('/*rb_color_meta2*/', $data, ot_get_option('rb_color_meta2', '#999999'));
	$data = replace_mark('/*rb_color_footer2*/', $data, ot_get_option('rb_color_footer2', '#bfbfbf'));
	$data = replace_mark('/*rb_color_menu*/', $data, ot_get_option('rb_color_menu', '#86acc4'));
	$data = replace_mark('/*rb_font_body*/', $data, '"' . str_replace('+', ' ', ot_get_option('rb_font_body', 'Droid+Sans')) . '"');
	$data = replace_mark('/*rb_font_headings*/', $data, '"' . str_replace('+', ' ', ot_get_option('rb_font_headings', 'Ubuntu')) . '"');

	//save and close css file
	$stylesheet = fopen($stylesheet_path, 'w');
	fwrite($stylesheet, $data);
	fclose($stylesheet);

	//open and read contact-form file
	$contactform_path = '../wp-content/themes/ikaros/form-handler.php';
	$contactform = fopen($contactform_path, 'r');
	$data = fread($contactform, filesize($contactform_path));
	fclose($contactform);
	
	//make changes inside the contact-form file
	$data = replace_mark('/*rb_contact_email_address*/', $data, '"' . ot_get_option('rb_contact_email_address', 'your@email.com') . '"');
	$data = replace_mark('/*rb_contact_response_good*/', $data, '"' . ot_get_option('rb_contact_response_good', 'Thank you. Your messsage has been received.') . '"');
	$data = replace_mark('/*rb_contact_response_bad*/', $data, '"' . ot_get_option('rb_contact_response_bad', 'Error. Please try again.') . '"');
	
	//save and close contact-form file
	$contactform = fopen($contactform_path, 'w');
	fwrite($contactform, $data);
	fclose($contactform);

	//open and read the custom css file
	$customstylesheet_path = '../wp-content/themes/ikaros/css/custom.css';
	$data = ot_get_option('rb_custom_css');
	$customstylesheet = fopen($customstylesheet_path, 'w');
	fwrite($customstylesheet, $data);
	fclose($customstylesheet);
		
}

function replace_mark($mark, $text, $replacement){
	$position = strpos($text, $mark);
	return str_replace(substr($text, $position, strpos($text, '/*e', $position)-$position), $mark.$replacement, $text);
}


/*---------------------------------
	Function that prins out the revo slider's js
------------------------------------*/

function print_rev_js(){
	global $rev_js;
	if(wp_script_is('theme_scripts', 'done'))
		echo $rev_js;
}
add_action( 'wp_footer', 'print_rev_js', '21');

/*---------------------------------
	Deal with WP empty paragraphcs
------------------------------------*/

function rb_formatter($content) {
	
	$bad_content = array('<p></div></p>', '<p><div class="full', '_width"></p>', '</div></p>', '<p><ul', '</ul></p>', '<p><div', '<p><block', 'quote></p>', '<p><hr /></p>', '<p><table>', '<td></p>', '<p></td>', '</table></p>', '<p></div>', 'nosidebar"></p>', '<p><p>', '<p><a', '</a></p>', '-half"></p>', '-third"></p>', '-fourth"></p>', '<p><p', '</p></p>', 'child"></p>', '<p></p>', '-fifth"></p>', '-sixth"></p>', 'last"></p>', 'fix" /></p>', '<p><hr', '<p><li', '"centered"></p>', '</li></p>', '<div></p>', '<p></ul>', '<p><img', ' /></p>', '"nop"></p>', 'tures"></p>', '"left"></p>', '<p><h1 class="center">', 'centered"></p>');
	$good_content = array('</div>', '<div class="full', '_width">', '</div>', '<ul', '</ul>', '<div', '<block', 'quote>', '<hr />', '<table>', '<td>', '</td>', '</table>', '</div>', 'nosidebar">', '<p>', '<a', '</a>', '-half">', '-third">', '-fourth">', '<p', '</p>', 'child">', '', '-fifth">', '-sixth">', 'last">', 'fix" />', '<hr', '<li', '"centered">', '</li>', '<div>', '</ul>', '<img', ' />', '"nop">', 'tures">', '"left">', '<h1 class="center">', 'centered">');
	
	$new_content = str_replace($bad_content, $good_content, $content);
	return $new_content;
	
}

remove_filter('the_content', 'wpautop');
add_filter('the_content', 'wpautop', 10);
add_filter('the_content', 'rb_formatter', 11);

/*---------------------------------
	Redefine menu structure with a walker class
------------------------------------*/

class menu_default_walker extends Walker_Nav_Menu
{

	function start_lvl(&$output, $depth){
		$output .= '<ul>';
	}

	function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output){
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


    function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		global $rb_submenus;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$new_output = '';
		$open_class = '';
		$depth_class = ($args->has_children ? 'parent ' : '');

		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$current_indicators = array('current-menu-item','current-menu-parent','current_page_item','current_page_parent');

		$newClasses = array();
		foreach($classes as $el)
			if(in_array($el,$current_indicators))
				array_push($newClasses,$el);

		$class_names = join(' ',apply_filters('nav_menu_css_class',array_filter($newClasses),$item));

		if(strpos($class_names, 'current-menu-parent') > 0 || strpos($class_names, 'current_page_parent') > 0) {
			$class_names = ' class="' . $depth_class . $open_class . 'opened"';
		} else if($class_names != '') { 
			$class_names = ' class="' . $depth_class . $open_class . 'selected"';
		} else if($class_names == '') {
			$class_names = ' class="' . $depth_class . $open_class . 'menu-item"';
		}

		if ( !get_post_meta( $item->object_id , '_members_only' , true ) || is_user_logged_in() ) {
			$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $class_names . '>';
		}

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;


		if ( !get_post_meta( $item->object_id, '_members_only' , true ) || is_user_logged_in() ) {
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		$output .= $new_output;

	}

	function end_el(&$output, $item, $depth) {
		if ( !get_post_meta( $item->object_id, '_members_only' , true ) || is_user_logged_in() ) {
			$output .= "</li>\n";
		}
	}
	
	 function end_lvl(&$output, $depth) {

		  $output .= "</ul>\n";
		  
	}
	
}

/*---------------------------------
	Redefine respnsoive menu structure with a walker class
------------------------------------*/

class menu_responsive_walker extends Walker_Nav_Menu
{

	function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output){
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	function start_lvl(&$output, $depth){
		$output .= '';
	}

    function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		global $rb_submenus;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$new_output = '';
		$open_class = '';
		$depth_class = ($args->has_children ? 'parent ' : 'children ');

		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$current_indicators = array('current-menu-item','current-menu-parent','current_page_item','current_page_parent');

		$newClasses = array();
		foreach($classes as $el)
			if(in_array($el,$current_indicators))
				array_push($newClasses,$el);

		$class_names = join(' ',apply_filters('nav_menu_css_class',array_filter($newClasses),$item));

		$attributes  = ! empty( $item->attr_title ) ? ' data-title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' data-target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' data-rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<option'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</option>';
		$item_output .= $args->after;


		if ( !get_post_meta( $item->object_id, '_members_only' , true ) || is_user_logged_in() ) {
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		$output .= $new_output;

	}

	function end_el(&$output, $item, $depth) {
		$output .= '';
	}
	 function end_lvl(&$output, $depth) {
		$output .= '';
	}
	
}

/*---------------------------------
	Fix responsive menu
------------------------------------*/

$responsive = 'global false';
function rb_remove_ul ($menu){
	global $responsive;
	if($responsive == 'global true')
   		return preg_replace(array('#^<ul[^>]*>#', '#</ul>$#'), '', $menu);
   	else
   		return $menu;
}
add_filter('wp_nav_menu', 'rb_remove_ul');

/*---------------------------------
	Setup backgrounds
------------------------------------*/

add_filter( 'image_slider_fields', 'new_slider_fields', 10, 2 );
function new_slider_fields( $image_slider_fields, $id ) {
  if ( $id == 'rb_backgrounds' ) {
    $image_slider_fields = array(
		array(
			'name'  => 'title',
			'type'  => 'text',
			'label' => 'Title',
		 	'class' => 'option-tree-slider-title'
		),
        array(
	        'name'  => 'image',
	        'type'  => 'text',
	        'label' => 'Post Image URL',
	        'class' => ''
        ),
		array(
			'name' => 'default_pages',
			'type' => 'checkbox',
			'label' => 'Check to select this as the default background for all pages',
			'class' => ''
		),
		array(
			'name' => 'default_posts',
			'type' => 'checkbox',
			'label' => 'Check to select this as the default background for all posts',
			'class' => '',
		)
	);
  }
  return $image_slider_fields;
}

/*---------------------------------
	Count post views
------------------------------------*/

function getPostLove($postID){
    $count_key = 'rb_post_love_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return $count;
}

function setPostLove($postID) {
    $count_key = 'rb_post_love_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


/*---------------------------------
	Custom login logo
------------------------------------*/

function rb_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_template_directory_uri().'/images/customLoginLogo.png) !important; }
    </style>';
}
add_action('login_head', 'rb_custom_login_logo');

/*---------------------------------
	Custom gravatar
------------------------------------*/

function rb_gravatar ($avatar_defaults) {
	$myavatar = get_template_directory_uri() . '/images/customGravatar.png';
	$avatar_defaults[$myavatar] = 'ikaros Gravatar';
	return $avatar_defaults;
}
add_filter('avatar_defaults', 'rb_gravatar');

/*---------------------------------
	Fix empty search issue
------------------------------------*/

function rb_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}
add_filter('request', 'rb_request_filter');

/*---------------------------------
	Enqueue custom admin scripts & styles
------------------------------------*/
  
function rb_add_admin_stuff(){
	wp_register_style('rb_custom_admin_styles', get_template_directory_uri(). '/css/admin_styles.css');
	wp_enqueue_style('rb_custom_admin_styles');
	wp_register_script('rb_admin_scripts', get_template_directory_uri(). '/js/admin_scripts.js', array('jquery', 'jquery-ui-core', 'jquery-ui-sortable'));
	wp_enqueue_script('rb_admin_scripts');
}
add_action( 'admin_init', 'rb_add_admin_stuff' );

/*---------------------------------
	Include other functions and classes
------------------------------------*/

include('includes/shortcodes.php');
include('includes/portfolio.php');
include('includes/gallery.php');
include('includes/videofolio.php');
include('includes/widget.php');
include('includes/theme-options.php');
include('includes/metaboxes.php');
include('includes/revslider/revslider.php');
  
?>