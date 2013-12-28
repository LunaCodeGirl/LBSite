<?php 

/*-----------------------------------------------------------------------------------

	Plugin Name: RVideofolio Post Type
	Plugin URI: http://www.wptheming.com
	Description: Enables a videofolio post type and taxonomies
	Version: 0.3
	Author: Devin Price
	Author URI: http://wptheming.com/videofolio-post-type/
	License: GPLv2

-----------------------------------------------------------------------------------*/

function videofolioposttype_activation() {
	videofolioposttype();
	flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'videofolioposttype_activation' );

function videofolioposttype() {

	$labels = array(
		'name' => __( 'Videofolio', 'ikaros' ),
		'singular_name' => __( 'Video Project', 'ikaros' ),
		'add_new' => __( 'Add New', 'ikaros' ),
		'add_new_item' => __( 'Add New Video Project', 'ikaros' ),
		'edit_item' => __( 'Edit Video Project', 'ikaros' ),
		'new_item' => __( 'Add New', 'ikaros' ),
		'view_item' => __( 'View Video Project', 'ikaros' ),
		'search_items' => __( 'Search Videofolio', 'ikaros' ),
		'not_found' => __( 'No projects found', 'ikaros' ),
		'not_found_in_trash' => __( 'No projects items found in trash', 'ikaros' )
	);

	$args = array(
    	'labels' => $labels,
    	'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
		'capability_type' => 'post',
		'rewrite' => array("slug" => "videofolio"), // Permalinks format
		'menu_position' => 5,
		'has_archive' => true
	); 

	register_post_type( 'videofolio', $args );

	 $taxonomy_videofolio_category_labels = array(
		'name' => _x( 'Video Categories', 'videofolioposttype' ),
		'singular_name' => _x( 'Video Category', 'videofolioposttype' ),
		'search_items' => _x( 'Search Video Categories', 'videofolioposttype' ),
		'popular_items' => _x( 'Popular Video Categories', 'videofolioposttype' ),
		'all_items' => _x( 'All Video Categories', 'videofolioposttype' ),
		'parent_item' => _x( 'Parent Video Category', 'videofolioposttype' ),
		'parent_item_colon' => _x( 'Parent Video Category:', 'videofolioposttype' ),
		'edit_item' => _x( 'Edit Video Category', 'videofolioposttype' ),
		'update_item' => _x( 'Update Video Category', 'videofolioposttype' ),
		'add_new_item' => _x( 'Add New Video Category', 'videofolioposttype' ),
		'new_item_name' => _x( 'New Video Category Name', 'videofolioposttype' ),
		'separate_items_with_commas' => _x( 'Separate Video Categories with commas', 'videofolioposttype' ),
		'add_or_remove_items' => _x( 'Add or remove Video Categories', 'videofolioposttype' ),
		'choose_from_most_used' => _x( 'Choose from the most used Video Categories', 'videofolioposttype' ),
		'menu_name' => _x( 'Video Categories', 'videofolioposttype' ),
    );
	
    $taxonomy_videofolio_category_args = array(
		'labels' => $taxonomy_videofolio_category_labels,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_tagcloud' => true,
		'hierarchical' => true,
		'rewrite' => true,
		'query_var' => true
    );
	
    register_taxonomy( 'videofolio_category', array( 'videofolio' ), $taxonomy_videofolio_category_args );
	
	
}

add_action( 'init', 'videofolioposttype' );
add_theme_support( 'post-thumbnails', array( 'videofolio' ) );
 
function videofolioposttype_edit_columns($videofolio_columns){
	$videofolio_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => _x('Title', 'column name'),
		"thumbnail" => __('Thumbnail', 'videofolioposttype'),
		"videofolio_category" => __('Category', 'videofolioposttype'),
		"date" => __('Date', 'videofolioposttype'),
	);
	$videofolio_columns['comments'] = '<div class="vers"><img alt="Comments" src="' . esc_url( admin_url( 'images/comment-grey-bubble.png' ) ) . '" /></div>';
	return $videofolio_columns;
}
add_filter( 'manage_edit-videofolio_columns', 'videofolioposttype_edit_columns' );
 
function videofolioposttype_columns_display($videofolio_columns, $post_id){

	switch ( $videofolio_columns )
	
	{
		// Code from: http://wpengineer.com/display-post-thumbnail-post-page-overview
			
			case "thumbnail":
				$width = (int) 35;
				$height = (int) 35;
				$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
				
				// Display the featured image in the column view if possible
				if ($thumbnail_id) {
					$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
				}
				if ( isset($thumb) ) {
					echo $thumb;
				} else {
					echo __('None', 'videofolioposttype');
				}
				break;	
			
			// Display the videofolio tags in the column view
			case "videofolio_category":
			
				if ( $category_list = get_the_term_list( $post_id, 'videofolio_category', '', ', ', '' ) ) {
					echo $category_list;
				} else {
					echo __('None', 'videofolioposttype');
				}
				break;		
	}
}

add_action( 'manage_posts_custom_column',  'videofolioposttype_columns_display', 10, 2 );

function add_videofolio_counts() {
        if ( ! post_type_exists( 'videofolio' ) ) {
             return;
        }

        $num_posts = wp_count_posts( 'videofolio' );
        $num = number_format_i18n( $num_posts->publish );
        $text = _n( 'Video Project', 'Video Projects', intval($num_posts->publish) );
        if ( current_user_can( 'edit_posts' ) ) {
            $num = "<a href='edit.php?post_type=videofolio'>$num</a>";
            $text = "<a href='edit.php?post_type=videofolio'>$text</a>";
        }
        echo '<td class="first b b-videofolio">' . $num . '</td>';
        echo '<td class="t videofolio">' . $text . '</td>';
        echo '</tr>';

        if ($num_posts->pending > 0) {
            $num = number_format_i18n( $num_posts->pending );
            $text = _n( 'Video Project Pending', 'Video Projects Pending', intval($num_posts->pending) );
            if ( current_user_can( 'edit_posts' ) ) {
                $num = "<a href='edit.php?post_status=pending&post_type=videofolio'>$num</a>";
                $text = "<a href='edit.php?post_status=pending&post_type=videofolio'>$text</a>";
            }
            echo '<td class="first b b-videofolio">' . $num . '</td>';
            echo '<td class="t videofolio">' . $text . '</td>';

            echo '</tr>';
        }
}

add_action( 'right_now_content_table_end', 'add_videofolio_counts' );

function videofolioposttype_add_help_text( $contextual_help, $screen_id, $screen ) { 
	if ( 'videofolio' == $screen->id ) {
		$contextual_help =
		'<p>' . __('The title field and the big Post Editing Area are fixed in place, but you can reposition all the other boxes using drag and drop, and can minimize or expand them by clicking the title bar of each box. Use the Screen Options tab to unhide more boxes (Excerpt, Send Trackbacks, Custom Fields, Discussion, Slug, Author) or to choose a 1- or 2-column layout for this screen.', 'ikaros') . '</p>' .
		'<p>' . __('<strong>Title</strong> - Enter a title for your post. After you enter a title, you&#8217;ll see the permalink below, which you can edit.', 'ikaros') . '</p>' .
		'<p>' . __('<strong>Post editor</strong> - Enter the text for your post. There are two modes of editing: Visual and HTML. Choose the mode by clicking on the appropriate tab. Visual mode gives you a WYSIWYG editor. Click the last icon in the row to get a second row of controls. The HTML mode allows you to enter raw HTML along with your post text. You can insert media files by clicking the icons above the post editor and following the directions. You can go the distraction-free writing screen, new in 3.2, via the Fullscreen icon in Visual mode (second to last in the top row) or the Fullscreen button in HTML mode (last in the row). Once there, you can make buttons visible by hovering over the top area. Exit Fullscreen back to the regular post editor.', 'ikaros') . '</p>' .
		'<p>' . __('<strong>Publish</strong> - You can set the terms of publishing your post in the Publish box. For Status, Visibility, and Publish (immediately), click on the Edit link to reveal more options. Visibility includes options for password-protecting a post or making it stay at the top of your blog indefinitely (sticky). Publish (immediately) allows you to set a future or past date and time, so you can schedule a post to be published in the future or backdate a post.', 'ikaros') . '</p>' .
		( ( current_theme_supports( 'post-formats' ) && post_type_supports( 'post', 'post-formats' ) ) ? '<p>' . __( '<strong>Post Format</strong> - This designates how your theme will display a specific post. For example, you could have a <em>standard</em> blog post with a title and paragraphs, or a short <em>aside</em> that omits the title and contains a short text blurb. Please refer to the Codex for <a href="http://codex.wordpress.org/Post_Formats#Supported_Formats">descriptions of each post format</a>. Your theme could enable all or some of 10 possible formats.' ) . '</p>' : '' ) .
		'<p>' . __('<strong>Featured Image</strong> - This allows you to associate an image with your post without inserting it. This is usually useful only if your theme makes use of the featured image as a post thumbnail on the home page, a custom header, etc.', 'ikaros') . '</p>' .
		'<p>' . __('<strong>Send Trackbacks</strong> - Trackbacks are a way to notify legacy blog systems that you&#8217;ve linked to them. Enter the URL(s) you want to send trackbacks. If you link to other WordPress sites they&#8217;ll be notified automatically using pingbacks, and this field is unnecessary.', 'ikaros') . '</p>' .
		'<p>' . __('<strong>Discussion</strong> - You can turn comments and pings on or off, and if there are comments on the post, you can see them here and moderate them.', 'ikaros') . '</p>' .
		'<p><strong>' . __('For more information:', 'ikaros') . '</strong></p>' .
		'<p>' . __('<a href="http://codex.wordpress.org/Posts_Add_New_Screen" target="_blank">Documentation on Writing and Editing Posts</a>', 'ikaros') . '</p>' .
		'<p>' . __('<a href="http://wordpress.org/support/" target="_blank">Support Forums</a>', 'ikaros') . '</p>';
  } elseif ( 'edit-videofolio' == $screen->id ) {
    $contextual_help = 
	    '<p>' . __('You can customize the display of this screen in a number of ways:', 'ikaros') . '</p>' .
		'<ul>' .
		'<li>' . __('You can hide/display columns based on your needs and decide how many posts to list per screen using the Screen Options tab.', 'ikaros') . '</li>' .
		'<li>' . __('You can filter the list of posts by post status using the text links in the upper left to show All, Published, Draft, or Trashed posts. The default view is to show all posts.', 'ikaros') . '</li>' .
		'<li>' . __('You can view posts in a simple title list or with an excerpt. Choose the view you prefer by clicking on the icons at the top of the list on the right.', 'ikaros') . '</li>' .
		'<li>' . __('You can refine the list to show only posts in a specific category or from a specific month by using the dropdown menus above the posts list. Click the Filter button after making your selection. You also can refine the list by clicking on the post author, category or tag in the posts list.', 'ikaros') . '</li>' .
		'</ul>' .
		'<p>' . __('Hovering over a row in the posts list will display action links that allow you to manage your post. You can perform the following actions:', 'ikaros') . '</p>' .
		'<ul>' .
		'<li>' . __('Edit takes you to the editing screen for that post. You can also reach that screen by clicking on the post title.', 'ikaros') . '</li>' .
		'<li>' . __('Quick Edit provides inline access to the metadata of your post, allowing you to update post details without leaving this screen.', 'ikaros') . '</li>' .
		'<li>' . __('Trash removes your post from this list and places it in the trash, from which you can permanently delete it.', 'ikaros') . '</li>' .
		'<li>' . __('Preview will show you what your draft post will look like if you publish it. View will take you to your live site to view the post. Which link is available depends on your post&#8217;s status.', 'ikaros') . '</li>' .
		'</ul>' .
		'<p>' . __('You can also edit multiple posts at once. Select the posts you want to edit using the checkboxes, select Edit from the Bulk Actions menu and click Apply. You will be able to change the metadata (categories, author, etc.) for all selected posts at once. To remove a post from the grouping, just click the x next to its name in the Bulk Edit area that appears.', 'ikaros') . '</p>' .
		'<p><strong>' . __('For more information:', 'ikaros') . '</strong></p>' .
		'<p>' . __('<a href="http://codex.wordpress.org/Posts_Screen" target="_blank">Documentation on Managing Posts</a>', 'ikaros') . '</p>' .
		'<p>' . __('<a href="http://wordpress.org/support/" target="_blank">Support Forums</a>', 'ikaros') . '</p>';

  }
  return $contextual_help;
}

add_action( 'contextual_help', 'videofolioposttype_add_help_text', 10, 3 );

?>