<?php

/*---------------------------------
	Add TinyMCE Shortocode Buttons
------------------------------------*/

function rb_addbuttons() {
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_rb_tinymce_plugin", 5);
		add_filter('mce_buttons', 'register_rb_button', 5);
	}
}

function register_rb_button($buttons) {
	array_push($buttons, "separator", "rb_button_columns");
	array_push($buttons, "", "rb_button_shortcodes");
	return $buttons;
}

function add_rb_tinymce_plugin($plugin_array) {
	$plugin_array['rb_button_columns'] = get_template_directory_uri().'/includes/rb_columns/rb_columns_plugin.js';	
	$plugin_array['rb_button_shortcodes'] = get_template_directory_uri().'/includes/rb_shortcodes/rb_shortcodes_plugin.js';	
	return $plugin_array;
}

function rb_change_tinymce_version($version) {
	return ++$version;
}

add_filter('tiny_mce_version', 'rb_change_tinymce_version');
add_action('init', 'rb_addbuttons');

/*---------------------------------
	Grid Columns Shortcodes
------------------------------------*/

function full_width_shortcode($atts, $content){
	$html = '<div class="full_width">' . do_shortcode($content) . '</div>';
	return $html;
}
function one_half_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="one-half' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function one_third_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="one-third' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function two_third_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="two-third' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function one_fourth_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="one-fourth' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function three_fourth_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="three-fourth' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function one_fifth_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="one-fifth' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function one_sixth_shortcode($atts, $content){
	$last = !empty($atts) ? ' ' . $atts[0] : '';
	$html = '<div class="one-sixth' . $last . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function clear_shortcode($atts, $content){ 
	$html = '<div class="clearfix"></div>'; 
	return $html;
}

/*---------------------------------
	Alert Box Shortcode
------------------------------------*/

function rb_alert_box_shortcode($atts, $content){
	$html = '<div class="alertBox ' . $atts['style'] . '-box">' . $content . '</div>';
	return $html;
}

/*---------------------------------
	Text Box Shortcode
------------------------------------*/

function rb_text_box_shortcode($atts, $content){
	$html = '<pre><code>' . do_shortcode($content) . '</code></pre>';
	return $html;
}

/*---------------------------------
	Button Shortcode
------------------------------------*/

function rb_button_shortcode($atts, $content){
	$html = '<a class="button ' . $atts['style'] . '" href="' . $atts['link'] . '" target="' . $atts['target'] . '">' . $atts['label'] . '</a>';
	return $html;
}

/*---------------------------------
	Latest Posts Shortcode
------------------------------------*/

function rb_latest_posts_shortcode($atts, $content){
	$html = '<div class="content-wrapper"><ul class="latest-blog">';
	
		global $post; $ki = 0;

		$all_posts = get_posts( array('numberposts' => $atts['no'] ));

		foreach($all_posts as $post) : setup_postdata($post);

			$html .= '
				<li>
					<span class="date"><span class="day">' . get_the_time('j') . '</span><span class="month">' . get_the_time('M') . '</span></span>
					<div class="text"><h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>
					<p>' . rb_get_excerpt(get_the_excerpt(), 120) . '</p>
					<div class="meta"><div class="tags">' . get_the_tag_list('', ', ') . '</div><span class="sep"> | </span><div class="comments">' . (get_comments_number() == 0 ? __('No Comments', 'ikaros') : get_comments_number() . __(' Comments', 'ikaros')) . '</div></div></div>'
				.'</li>';
			if(++$ki % 2 == 0)
				$html .= '<li style="clear:left;width:0;height:0;margin:0"><!-- clear --></li>';
				
		endforeach;
			
	$html .= '</ul></div>';
	return $html;
}

/*---------------------------------
	Latest Projects Shortcode
------------------------------------*/

function rb_latest_projects_shortcode($atts, $content){
	$html = '<div class="portfolio"><ul class="items">';

	global $post;

	$args = array( 'posts_per_page' => $atts['no'], 
		   'offset'=> 0,
			'post_type' => 'portfolio');
	$all_posts = new WP_Query($args);

	while($all_posts->have_posts()) : $all_posts->the_post();

		$html .= '<li><a href="' . get_permalink() . '">
			<div class="caption">
				<h3>' . get_the_title() . '</h3><span class="meta">' . rb_get_categories($post->ID, 'portfolio_category', ', ', 'name', false) . '</span>
			</div>' . get_the_post_thumbnail($post->ID, 'thumb-video') . '
		</a></li>';

	endwhile;

	$html .= '</ul></div>';
	return $html;
}

/*---------------------------------
	List Shortcode
------------------------------------*/

function rb_list_shortcode($atts, $content){
	$html = '<ul class="contentList ' . $atts['type'] . '">' . do_shortcode($content) . '</ul>';
	return $html;
}
function rb_list_item_shortcode($atts, $content){
	$html = '<li>' . $content . '</li>';
	return $html;
}

/*---------------------------------
	Quote Shortcode
------------------------------------*/

function rb_quote_shortcode($atts, $content){
	$html = '<blockquote><span>quote</span>' . $content . '</blockquote>';
	return $html;
}

/*---------------------------------
	Tabs Shortcode
------------------------------------*/
global $tabs_j;
function rb_tabs_shortcode($atts, $content){
	$html = '<div class="tab-container"><ul class="etabs ' . $atts['style'] . '">';

	global $tabs_j; $tabs_j = 0;
	$data = explode('<!-- cut out -->', do_shortcode($content));
	$i = 0; $titles = ''; $contents = '';

	foreach($data as $item){
		if($i++%2==0)
			$titles .= $item;
		else 
			$contents .= $item;
	}
	
	$html .= $titles . '</ul><div class="panel-container">' . $contents . '</div></div>';
	return $html;
}
function rb_tab_shortcode($atts, $content){
	global $tabs_j; $tabs_j++;
	$html = '<li class="tab"><a href="#tab-' . $tabs_j . '">' . $atts['title'] . '</a></li><!-- cut out --><div id="tab-' . $tabs_j . '" class="nop">' . do_shortcode($content) . '</div><!-- cut out -->';
	return $html;
}

/*---------------------------------
	Taglines Shortcode
------------------------------------*/

function rb_tagline_shortcode($atts, $content){
	$html = '<div class="intro">' . do_shortcode($content) . '</div>';
	return $html;
}

/*---------------------------------
	Title & Tagline Shortcode
------------------------------------*/

function rb_title_tagline_shortcode($atts, $content){
	$html = '<h1 class="center">' . $atts['title'] . '</h1>';
	$html .= '<div class="intro center">' . do_shortcode($content) . '</div>';
	return $html;
}

/*---------------------------------
	Toggles Shortcode
------------------------------------*/

function rb_toggles_shortcode($atts, $content){
	$html = do_shortcode($content);
	return $html;
}
function rb_toggle_shortcode($atts, $content){
	$html = '<div class="toggle"><h4 class="title">' . $atts['title'] . '</h4>';
	$html .= '<div class="togglebox"><div>' . do_shortcode($content) . '</div></div></div>';
	return $html;
}

/*---------------------------------
	Pricing Table Shortcode
------------------------------------*/

function rb_pricing_table_shortcode($atts, $content){
	$html = '<div class="pricing tada' . $atts['fields'] . '">' . do_shortcode($content) . '</div>';
	return $html;
}
function rb_table_column_shortcode($atts, $content){
	$data = '<div class="plan p' . $atts['style'] . '">' . do_shortcode($content) . '</div>';
	return $data;
}
function rb_table_price_shortcode($atts, $content){
	$data = '<h3>' . $atts['title'] . '</h3>';
	$data .= '<h4><span class="amount"><span>' . $atts['sign'] . '</span>' . $content . '</span><span class="interval">' . $atts['subtitle'] . '</span></h4>';
	return $data;
}
function rb_table_content_shortcode($atts, $content){
	$data = '<div class="features">' . do_shortcode($content) . '</div>';
	return $data;
}
function rb_table_footer_shortcode($atts, $content){
	$data = '<div class="select"><div>' . do_shortcode($content) . '</div></div>';
	return $data;
}

/*---------------------------------
	Divider Shortcode
------------------------------------*/

function rb_divider_shortcode(){
	$html = '<hr />';
	return $html;
}

/*---------------------------------
	Testimonials Shortcode
------------------------------------*/

global $tests_j; 
function rb_testimonials_shortcode($atts, $content){
	global $tests_j; $tests_j = 0;
	$html = '<div id="testimonials-container" class="tab-container"><div class="panel-container">' . do_shortcode($content) . '</div>';
	$html .= '<ul class="etabs">';
	for($tj = 1; $tj <= $tests_j; $tj++){
		$html .= '<li class="tab"><a href="#tst' . $tj . '">' . $tj . '</a></li>';
	}
	$html .= '</ul></div>';
	return $html;
}
function rb_testimonial_shortcode($atts, $content){
	global $tests_j; $tests_j++;
	$html = '<div id="tst' . $tests_j . '">' . $content . '<span class="author">' . $atts['source'] . '</span></div>';
	return $html;
}

/*---------------------------------
	Contrast Container Shortcode
------------------------------------*/

function rb_contrast_shortcode($atts, $content){
	$html = '</div></div><div class="contrastContent clearfix" id="' . $atts['id'] . '"><div class="container_16">' . do_shortcode($content) . '</div></div><div class="container_16"><div class="nosidebar">';
	return $html;
}

/*---------------------------------
	Image Shortcode
------------------------------------*/

function rb_image_shortcode($atts, $content){
	$html = '';
	$first_caption = '';
	$last_caption = '';
	
	if(isset($atts['show_caption']) && $atts['show_caption'] == 'true'){
		$first_caption = '<div class="imgCaption ' . $atts['align'] . '">';
		$last_caption = '<p>' . $atts['caption'] . '</p></div>';
	}
	
	if($atts['lightbox'] == 'true' || $atts['link'] != ''){
			
		if($atts['lightbox'] == 'true') 
			$html = $first_caption . '<a class="' . $atts['align'] . '" title="' . $atts['caption'] . '" rel="prettyPhoto' . ($atts['gallery'] != '' ? '[' . $atts['gallery'] . ']"' : '"') . ' href="' . $atts['link'] . '"><img class="imgFrame" alt="' . $atts['caption'] . '" src="' . $atts['path'] . '" /></a>' . $last_caption;
					
		else
			$html = $first_caption . '<a class="' . $atts['align'] . '" title="' . $atts['caption'] . '" target="' . $atts['target'] . '" href="' . $atts['link'] . '"><img class="imgFrame" alt="' . $atts['caption'] . '" src="' . $atts['path'] . '" /></a>' . $last_caption;
					
	}else{
		$html = $first_caption . '<img class="imgFrame ' . $atts['align'] . '" alt="' . $atts['caption'] . '" src="' . $atts['path'] . '" />' . $last_caption;
	}
	
	return $html;
}

/*---------------------------------
	Posts Box Shortcode
------------------------------------*/

function rb_posts_box_shortcode($atts, $content){
	$html = '
		<div class="events">
			<h3>' . $atts['title'] . '</h3>
			<ul class="blogList">';
	
		global $post;
		$i = 0; 

		$rb_post_tag = 0;
		if(isset($atts['category']) && is_numeric($atts['category']))
			$rb_post_tag = $atts['category'];

		$all_posts = get_posts( array('numberposts' => $atts['no'], 'category' => $rb_post_tag) );
		foreach($all_posts as $post) : setup_postdata($post);
			$html .= '
				<li>
					<span>' . get_the_time('F jS, Y') . '</span>
					<a href="' . get_permalink() . '">' . get_the_title() . '</a>
					<p>' . rb_get_excerpt(get_the_excerpt(), 100) . '</p>'
					. (++$i < $atts['no'] ? '<hr />' : '')
				.'</li>';
				
		endforeach;
			
	$html .= '</ul></div>';
	return $html;
}

/*---------------------------------
	Numeric Text Block Shortcode
------------------------------------*/

function rb_numeric_block_shortcode($atts, $content){
	$html = '
		<div class="iconTitle iconFor">
			<span class="drop">' . $atts['number'] . '</span>
			<h2>' . $atts['title'] . '</h2>
			<p>' . do_shortcode($content) . '</p>
		</div>';
	return $html;
}

/*---------------------------------
	Dropcap Shortcode
------------------------------------*/

function rb_dropcap_shortcode($atts, $content){
	$html = '<span class="dropcap">' . $content . '</span>';
	return $html;
}

/*---------------------------------
	Highlighted Text Shortcode
------------------------------------*/

function rb_highlight_shortcode($atts, $content){
	$html = '<span class="' . $atts['style'] . '">' . $content . '</span>';
	return $html;
}

/*---------------------------------
	Span Shortcode
------------------------------------*/

function rb_span_shortcode($atts, $content){
	$html = '<span>' . $content . '</span>';
	return $html;
}

/*---------------------------------
	Social List Shortcode
------------------------------------*/

function rb_social_shortcode($atts, $content){
	$html = '<ul class="social team">' . do_shortcode($content) . '</ul>';
	return $html;
}
function rb_link_shortcode($atts, $content){
	$html = '<li><a class="' . $atts['type'] . '" href="' . $atts['href'] . '">' . $atts['href'] . '</a></li>';
	return $html;
}	

/*---------------------------------
	Team List Shortcode
------------------------------------*/

function rb_team_shortcode($atts, $content){
	$html = '<ul class="teamList clearfix">' . do_shortcode($content) . '</ul>';
	return $html;
}
function rb_team_member_shortcode($atts, $content){
	$html = '
		<li>
			<img class="imgFrame" alt="' . $atts['name'] . '" src="' . $atts['image'] . '" />
			<h4>' . $atts['name'] . '</h4>
			<span>' . $atts['position'] . '</span>
			<p>' . do_shortcode($content) . '</p>
		</li>';
	return $html;
}

/*---------------------------------
	Google Maps Shortcode
------------------------------------*/

function rb_google_maps_shortcode($atts, $content){
	$html = '<iframe class="imgFrame" style="margin:0;width:' . $atts['width'] . 'px;height:' . $atts['height'] . 'px;" src="http://www.google.com/uds/modules/elements/mapselement/iframe.html?maptype=roadmap&latlng=' . $atts['lat1'] . '%' . $atts['long1'] . '&mlatlng=' . $atts['lat2'] . '%' . $atts['long2'] . '&maddress1=' . $atts['address1'] . '&maddress2=' . $atts['address2'] . '&zoom=' . $atts['zoom'] . '&mtitle=' . $atts['title'] . '&element=false" scrolling="no" allowtransparency="true"></iframe>';
	return $html;
}

/*---------------------------------
	Icon Text Block Shortcode
------------------------------------*/

function rb_icon_block_shortcode($atts, $content){
	$html = '
		<div class="iconTitle">';
			if(isset($atts['icon_type']) && $atts['icon_type'] == 'custom')
				$html .= '<span class="icon noicon"><img src="' . $atts['icon'] . '" alt="' . $atts['icon_title'] . '" />' . $atts['icon_title'] . '</span>';
			else
				$html .= '<span class="icon ' . $atts['icon'] . '">' . $atts['icon_title'] . '</span>';
			$html .= '<h2>' . $atts['title'] . '</h2>
			<p>' . do_shortcode($content) . '</p>
		</div>';
	return $html;
}

/*---------------------------------
	Icon Button Shortcode
------------------------------------*/

function rb_icon_button_shortcode($atts, $content){
	$html = '
		<div class="bigButton">';
			if(isset($atts['icon_type']) && $atts['icon_type'] == 'custom')
					$html .= '<span class="icon noicon"><img src="' . $atts['icon'] . '" alt="' . $atts['icon_title'] . '" />' . $atts['icon_title'] . '</span>';
				else
					$html .= '<span class="icon ' . $atts['icon'] . '">' . $atts['icon_title'] . '</span>';
			$html .= '<a href="' . $atts['link'] . '" target="' . $atts['target'] . '">' . $atts['label'] . '</a>
		</div>';
	return $html;
}

/*---------------------------------
	Add/enable all shortcodes
------------------------------------*/

add_shortcode('full_width', 'full_width_shortcode');
add_shortcode('one_half', 'one_half_shortcode');
add_shortcode('one_third', 'one_third_shortcode');
add_shortcode('two_third', 'two_third_shortcode');
add_shortcode('one_fourth', 'one_fourth_shortcode');
add_shortcode('three_fourth', 'three_fourth_shortcode');
add_shortcode('one_fifth', 'one_fifth_shortcode');
add_shortcode('one_sixth', 'one_sixth_shortcode');
add_shortcode('clear', 'clear_shortcode');

add_shortcode('rb_alert_box', 'rb_alert_box_shortcode');
add_shortcode('rb_text_box', 'rb_text_box_shortcode');
add_shortcode('rb_button', 'rb_button_shortcode');
add_shortcode('rb_latest_posts', 'rb_latest_posts_shortcode');
add_shortcode('rb_latest_projects', 'rb_latest_projects_shortcode');
add_shortcode('rb_list', 'rb_list_shortcode');
add_shortcode('rb_list_item', 'rb_list_item_shortcode');
add_shortcode('rb_quote', 'rb_quote_shortcode');
add_shortcode('rb_tabs', 'rb_tabs_shortcode');
add_shortcode('rb_tab', 'rb_tab_shortcode');
add_shortcode('rb_toggles', 'rb_toggles_shortcode');
add_shortcode('rb_toggle', 'rb_toggle_shortcode');
add_shortcode('rb_pricing_table', 'rb_pricing_table_shortcode');
add_shortcode('rb_table_column', 'rb_table_column_shortcode');
add_shortcode('rb_table_price', 'rb_table_price_shortcode');
add_shortcode('rb_table_content', 'rb_table_content_shortcode');
add_shortcode('rb_table_footer', 'rb_table_footer_shortcode');
add_shortcode('rb_divider', 'rb_divider_shortcode');
add_shortcode('rb_tagline', 'rb_tagline_shortcode');
add_shortcode('rb_title_tagline', 'rb_title_tagline_shortcode');
add_shortcode('rb_testimonials', 'rb_testimonials_shortcode');
add_shortcode('rb_testimonial', 'rb_testimonial_shortcode');
add_shortcode('rb_contrast', 'rb_contrast_shortcode');
add_shortcode('rb_image', 'rb_image_shortcode');
add_shortcode('rb_posts_box', 'rb_posts_box_shortcode');
add_shortcode('rb_numeric_block', 'rb_numeric_block_shortcode');
add_shortcode('rb_dropcap', 'rb_dropcap_shortcode');
add_shortcode('rb_highlight', 'rb_highlight_shortcode');
add_shortcode('rb_team', 'rb_team_shortcode');
add_shortcode('rb_social', 'rb_social_shortcode');
add_shortcode('rb_link', 'rb_link_shortcode');
add_shortcode('rb_span', 'rb_span_shortcode');
add_shortcode('rb_team_member', 'rb_team_member_shortcode');
add_shortcode('rb_google_maps', 'rb_google_maps_shortcode');
add_shortcode('rb_icon_block', 'rb_icon_block_shortcode');
add_shortcode('rb_icon_button', 'rb_icon_button_shortcode');

/*---------------------------------
	Handle gallery shortcode
------------------------------------*/

remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'rb_gallery_shortcode');

function rb_gallery_shortcode($attr) {
	global $post;

	static $instance = 0;
	$instance++;

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
		return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'dl',
		'icontag'    => 'dt',
		'captiontag' => 'dd',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$include = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$output = '<ul class="galleryGrid">';

	$i = 0; $unique = $post->ID;
	foreach ( $attachments as $id => $attachment ) {
	
		$img = wp_get_attachment_image_src($id, 'large');
		$caption = get_post($id)->post_excerpt;
		$title = get_post($id)->post_title;
		
		$output .= '
			<li>

				<a class="fancybox-media" href="' .$img[0] . '" rel="rb_custom_gallery' . $unique . '" data-title-id="gallery-title' . $unique . '-' . $i . '">'
					. wp_get_attachment_image($id, 'thumbnail', false, array('class' => 'imgFrame')) .
				'</a>

				 <div id="gallery-title'. $unique . '-' .$i++ . '" class="info hidden">
		          <h2>' . $title .'</h2>
		          <div class="fancybox-desc">' . $caption . '</div>
		        </div>

			</li>';
		
	}

	$output .= '</ul>';

	return $output;
}

?>