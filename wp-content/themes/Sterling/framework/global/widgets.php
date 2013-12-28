<?php
/*
===============================================================================

Social Media Widget

===============================================================================
*/
class SocialMediaWidget extends WP_Widget
{
   function SocialMediaWidget()
   {
      $widget_ops = array(
         'classname' => 'social_widget',
         'description' => __('Link to your RSS feed and social media accounts.', 'framework_localize')
      );
      $this->WP_Widget('social_networks', __('Custom Social Networks', 'framework_localize'), $widget_ops);
   }
   function widget($args, $instance)
   {
      extract($args);
      $title      = apply_filters('widget_title', $instance['title']);
      $title_link = strip_tags($instance['title_link']);
      if (!empty($title_link)) {
         $title_page = get_post($title_link);
      }
      $networks['RSS']        = $instance['rss'];
      $networks['Twitter']    = $instance['twitter'];
      $networks['Facebook']   = $instance['facebook'];
      $networks['Email']      = $instance['email'];
      $networks['Flickr']     = $instance['flickr'];
      $networks['YouTube']    = $instance['youtube'];
      $networks['LinkedIn']   = $instance['linkedin'];
      $networks['FourSquare'] = $instance['foursquare'];
      $networks['Delicious']  = $instance['delicious'];
      $networks['Digg']       = $instance['digg'];
      $display                = $instance['display'];
      echo $before_widget;
      if (!empty($title)) {echo $before_title;}
      if (!empty($title_link)) {
         echo "<a href=\"" . get_permalink($title_page->ID) . "\">";
      }
      if (empty($title)) {
         echo $title_page->post_title;
      } else {
         echo $title;
      }
      if (!empty($title_link)) {
         echo "</a>";
      }

if (!empty($title)) {echo $after_title;}
?>
		



<ul class="social_icons">
<?php
      if (empty($networks['RSS'])):
?>
<li><a href="<?php
         bloginfo('rss2_url');
?>" onclick="window.open(this.href);return false;" class="rss"><?php
         _e('RSS', 'framework_localize');
?></a></li>
<?php
      else:
?>
<li><a href="<?php
         echo $networks['RSS'];
?>" onclick="window.open(this.href);return false;" class="rss"><?php
         _e('RSS', 'framework_localize');
?></a></li>
<?php
      endif;
?>	
<?php
      foreach (array(
         "Twitter",
         "Facebook",
         "Email",
         "Flickr",
         "YouTube",
         "LinkedIn",
         "FourSquare",
         "Delicious",
         "Digg"
      ) as $network):
?>
<?php
         if (!empty($networks[$network])):
?>
<li><a href="<?php
            echo $networks[$network];
?>" class="<?php
            echo strtolower($network);
?>" onclick="window.open(this.href);return false;"><?php
            echo $network;
?></a></li>
<?php
         endif;
?>
<?php
      endforeach;
?>
</ul>

		<?php
      echo $after_widget;
   }
   function update($new_instance, $old_instance)
   {
      $instance               = $old_instance;
      $instance['title']      = strip_tags($new_instance['title']);
      $instance['title_link'] = $new_instance['title_link'];
      $instance['rss']        = $new_instance['rss'];
      $instance['twitter']    = $new_instance['twitter'];
      $instance['facebook']   = $new_instance['facebook'];
      $instance['email']      = $new_instance['email'];
      $instance['flickr']     = $new_instance['flickr'];
      $instance['youtube']    = $new_instance['youtube'];
      $instance['linkedin']   = $new_instance['linkedin'];
      $instance['foursquare'] = $new_instance['foursquare'];
      $instance['delicious']  = $new_instance['delicious'];
      $instance['digg']       = $new_instance['digg'];
      $instance['display']    = $new_instance['display'];
      return $instance;
   }
   function form($instance)
   {
      $instance   = wp_parse_args((array) $instance, array(
         'title' => '',
         'text' => '',
         'title_link' => ''
      ));
      $title      = strip_tags($instance['title']);
      $title_link = strip_tags($instance['title_link']);
      //define variables to prevent wp_debug error.
      $rss        = $twitter = $facebook = $flickr = $youtube = $linkedin = $foursquare = $delicious = $digg = $display = '';
      $rss        = $instance['rss'];
      $twitter    = $instance['twitter'];
      $facebook   = $instance['facebook'];
      $email      = $instance['email'];
      $flickr     = $instance['flickr'];
      $youtube    = $instance['youtube'];
      $linkedin   = $instance['linkedin'];
      $foursquare = $instance['foursquare'];
      $delicious  = $instance['delicious'];
      $digg       = $instance['digg'];
      $display    = $instance['display'];
      $text       = format_to_edit($instance['text']);
?>
		<p style="color:#999;"><em>Enter the full URL to each of your social media accounts. Simply leave the field blank if you wish not to display that social media service.</em></p><br />

		<p><label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" type="text" value="<?php
      echo esc_attr($title);
?>" /></p>

    	<p><label for="<?php
      echo $this->get_field_id('title_link');
?>"><?php
      _e('Title link:', 'framework_localize');
?></label>     
    	<?php
      wp_dropdown_pages(array(
         'selected' => $title_link,
         'name' => $this->get_field_name('title_link'),
         'show_option_none' => __('None', 'framework_localize'),
         'sort_column' => 'menu_order, post_title'
      ));
?>
   		 </p>
		
		<p><label for="<?php
      echo $this->get_field_id('rss');
?>"><?php
      _e('RSS URL: (leave empty for default feed)', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('rss');
?>" name="<?php
      echo $this->get_field_name('rss');
?>" type="text" value="<?php
      echo esc_attr($rss);
?>" /></p>

		<p><label for="<?php
      echo $this->get_field_id('twitter');
?>"><?php
      _e('Twitter URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('twitter');
?>" name="<?php
      echo $this->get_field_name('twitter');
?>" type="text" value="<?php
      echo esc_attr($twitter);
?>" /></p>
    
    <p><label for="<?php
      echo $this->get_field_id('facebook');
?>"><?php
      _e('Facebook URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('facebook');
?>" name="<?php
      echo $this->get_field_name('facebook');
?>" type="text" value="<?php
      echo esc_attr($facebook);
?>" /></p>
    
    <p><label for="<?php
      echo $this->get_field_id('email');
?>"><?php
      _e('Email Address:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('email');
?>" name="<?php
      echo $this->get_field_name('email');
?>" type="text" value="<?php
      echo esc_attr($email);
?>" /></p>


		<p><label for="<?php
      echo $this->get_field_id('flickr');
?>"><?php
      _e('Flickr URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('flickr');
?>" name="<?php
      echo $this->get_field_name('flickr');
?>" type="text" value="<?php
      echo esc_attr($flickr);
?>" /></p>
        
        <p><label for="<?php
      echo $this->get_field_id('youtube');
?>"><?php
      _e('Youtube URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('youtube');
?>" name="<?php
      echo $this->get_field_name('youtube');
?>" type="text" value="<?php
      echo esc_attr($youtube);
?>" /></p>
        
        <p><label for="<?php
      echo $this->get_field_id('linkedin');
?>"><?php
      _e('LinkedIn URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('linkedin');
?>" name="<?php
      echo $this->get_field_name('linkedin');
?>" type="text" value="<?php
      echo esc_attr($linkedin);
?>" /></p>
        
        <p><label for="<?php
      echo $this->get_field_id('foursquare');
?>"><?php
      _e('FourSquare URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('foursquare');
?>" name="<?php
      echo $this->get_field_name('foursquare');
?>" type="text" value="<?php
      echo esc_attr($foursquare);
?>" /></p>
        
        <p><label for="<?php
      echo $this->get_field_id('delicious');
?>"><?php
      _e('Delicious URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('delicious');
?>" name="<?php
      echo $this->get_field_name('delicious');
?>" type="text" value="<?php
      echo esc_attr($delicious);
?>" /></p>
        
        <p><label for="<?php
      echo $this->get_field_id('digg');
?>"><?php
      _e('Digg URL:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('digg');
?>" name="<?php
      echo $this->get_field_name('digg');
?>" type="text" value="<?php
      echo esc_attr($digg);
?>" /></p>

    
<?php
   }
}
add_action('widgets_init', create_function('', 'return register_widget("SocialMediaWidget");'));







/*
===============================================================================

Recent Posts Widget

===============================================================================
*/
class show_recent extends WP_Widget
{
   function show_recent()
   {
      $widget_ops = array(
         'classname' => 'show_recent',
         'description' => __('Show your recent posts.', 'framework_localize')
      );
      $this->WP_Widget('show_recent', __('Custom Recent Posts', 'framework_localize'), $widget_ops);
   }
   function widget($args, $instance)
   {
      extract($args);
      //$options = get_option('custom_recent');
	  //need to do widget title the WordPress Way or WPML will not work here!      
      $title = apply_filters('widget_title',$instance["title"]);
      $posts = $instance['posts'];
      
      //print widget title
	  echo $before_widget . $before_title . $title . $after_title;      
      
      //GET the posts
      global $post;
      $exclude = B_getExcludedCats();
	  //mod by denzel to use WP_Query class instead of get_posts, so that WPML works.      
      $myposts = new WP_Query('posts_per_page=' . $posts . '&offset=0&category=' . $exclude);
      
      //SHOW the posts
if ( $myposts->have_posts() ) : while ( $myposts->have_posts() ) : $myposts->the_post();
         //added strip_tags to solve a problem with code being displayed improperly.
?>
				
				<p class="recent-post-widget-title"><a href="<?php
         the_permalink();
?>"><?php
         the_title();
?></a></p>
				<p class="recent-post-widget-text"><a href="<?php
         the_permalink();
?>"><?php
         echo substr(strip_tags($post->post_content), 0, 125);
?>...</a></p>
        
			<?php
    endwhile; endif;
    
      echo $after_widget;
   }
   function update($newInstance, $oldInstance)
   {
      $instance          = $oldInstance;
      $instance['title'] = strip_tags($newInstance['title']);
      $instance['posts'] = $newInstance['posts'];
      return $instance;
   }
   function form($instance)
   {
      echo '<p><label for="' . $this->get_field_id('title') . '">' . __('Title:', 'framework_localize') . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $instance['title'] . '" /></p>';
      echo '<p><label for="' . $this->get_field_id('posts') . '">' . __('Number of Posts:', 'framework_localize') . '</label><input class="widefat" id="' . $this->get_field_id('posts') . '" name="' . $this->get_field_name('posts') . '" type="text" value="' . $instance['posts'] . '" /></p>';
      echo '<input type="hidden" id="custom_recent" name="custom_recent" value="1" />';
   }
}
add_action('widgets_init', create_function('', 'return register_widget("show_recent");'));






/*
===============================================================================

Categories Widget

===============================================================================
*/
class ka_custom_cats extends WP_Widget
{
   function ka_custom_cats()
   {
      $widget_ops = array(
         'classname' => 'widget_categories',
         'description' => __("A list or dropdown of categories", "framework_localize")
      );
      $this->WP_Widget('categories', __('Custom Categories', 'framework_localize'), $widget_ops);
   }
   function widget($args, $instance)
   {
      extract($args);
      $title = apply_filters('widget_title', empty($instance['title']) ? __('Categories', 'framework_localize') : $instance['title'], $instance, $this->id_base);
      $c     = $instance['count'] ? '1' : '0';
      $h     = $instance['hierarchical'] ? '1' : '0';
      $d     = $instance['dropdown'] ? '1' : '0';
      echo $before_widget;
      if ($title)
         echo $before_title . $title . $after_title;
      // Bring in excluded categories from options panel
      $pos_excluded = positive_exlcude_cats();
      $pos_cats     = $pos_excluded;
      $cat_args     = array(
         'orderby' => 'name',
         'exclude' => $pos_cats,
         'title_li' => '',
         'show_count' => $c,
         'hierarchical' => $h
      );
      if ($d) {
         $cat_args['show_option_none'] = _e('Select Category', 'framework_localize');
         wp_dropdown_categories(apply_filters('widget_categories_dropdown_args', $cat_args));
?>

<script type='text/javascript'>
/* <![CDATA[ */
	var dropdown = document.getElementById("cat");
	function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php
         echo home_url();
?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		}
	}
	dropdown.onchange = onCatChange;
/* ]]> */
</script>

<?php
      } else {
?>
		<ul>
<?php
         $cat_args['title_li'] = '';
         wp_list_categories(apply_filters('widget_categories_args', $cat_args));
?>
		</ul>
<?php
      }
      echo $after_widget;
   }
   function update($new_instance, $old_instance)
   {
      $instance                 = $old_instance;
      $instance['title']        = strip_tags($new_instance['title']);
      $instance['count']        = !empty($new_instance['count']) ? 1 : 0;
      $instance['hierarchical'] = !empty($new_instance['hierarchical']) ? 1 : 0;
      $instance['dropdown']     = !empty($new_instance['dropdown']) ? 1 : 0;
      return $instance;
   }
   function form($instance)
   {
      //Defaults
      $instance     = wp_parse_args((array) $instance, array(
         'title' => ''
      ));
      $title        = esc_attr($instance['title']);
      $count        = isset($instance['count']) ? (bool) $instance['count'] : false;
      $hierarchical = isset($instance['hierarchical']) ? (bool) $instance['hierarchical'] : false;
      $dropdown     = isset($instance['dropdown']) ? (bool) $instance['dropdown'] : false;
?>
		<p><label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
		<input class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" type="text" value="<?php
      echo $title;
?>" /></p>

		<p><input type="checkbox" class="checkbox" id="<?php
      echo $this->get_field_id('dropdown');
?>" name="<?php
      echo $this->get_field_name('dropdown');
?>"<?php
      checked($dropdown);
?> />
		<label for="<?php
      echo $this->get_field_id('dropdown');
?>"><?php
      _e('Show as dropdown', 'framework_localize');
?></label><br />

		<input type="checkbox" class="checkbox" id="<?php
      echo $this->get_field_id('count');
?>" name="<?php
      echo $this->get_field_name('count');
?>"<?php
      checked($count);
?> />
		<label for="<?php
      echo $this->get_field_id('count');
?>"><?php
      _e('Show post counts', 'framework_localize');
?></label><br />

		<input type="checkbox" class="checkbox" id="<?php
      echo $this->get_field_id('hierarchical');
?>" name="<?php
      echo $this->get_field_name('hierarchical');
?>"<?php
      checked($hierarchical);
?> />
		<label for="<?php
      echo $this->get_field_id('hierarchical');
?>"><?php
      _e('Show hierarchy', 'framework_localize');
?></label></p>
<?php
   }
}
add_action('widgets_init', create_function('', 'return register_widget("ka_custom_cats");'));






/*
===============================================================================

Custom Menu Widget

===============================================================================
*/
// This is a modified version of the default nav widget. We've manually added <ul></ul> tags to wrap the custom menu.
class ka_custom_menu extends WP_Widget
{
   function ka_custom_menu()
   {
      $widget_ops = array(
         'classname' => 'widget_nav_menu',
         'description' => __('Use this widget to add one of your custom menus as a widget.', 'framework_localize')
      );
      $this->WP_Widget('nav_menu', __('Custom Menus', 'framework_localize'), $widget_ops);
   }
   function widget($args, $instance)
   {
      // Get menu
      $nav_menu = wp_get_nav_menu_object($instance['nav_menu']);
      if (!$nav_menu)
         return;
      $instance['title'] = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);
      echo $args['before_widget'];
      if (!empty($instance['title']))
         echo $args['before_title'] . $instance['title'] . $args['after_title'];
      // added for valid code. (nav-unlister was needed for sub-nav)
      echo '<ul class="custom-menu">';
      wp_nav_menu(array(
         'fallback_cb' => '',
         'menu' => $nav_menu
      ));
      echo '</ul>';
      echo $args['after_widget'];
   }
   function update($new_instance, $old_instance)
   {
      $instance['title']    = strip_tags(stripslashes($new_instance['title']));
      $instance['nav_menu'] = (int) $new_instance['nav_menu'];
      return $instance;
   }
   function form($instance)
   {
      $title    = isset($instance['title']) ? $instance['title'] : '';
      $nav_menu = isset($instance['nav_menu']) ? $instance['nav_menu'] : '';
      // Get menus
      $menus    = get_terms('nav_menu', array(
         'hide_empty' => false
      ));
      // If no menus exists, direct the user to go and create some.
      if (!$menus) {
         echo '<p>' . sprintf(__('No menus have been created yet. <a href="%s">Create some</a>.','framework_localize'), admin_url('nav-menus.php')) . '</p>';
         return;
      }
?>
		<p>
			<label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
			<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" value="<?php
      echo $title;
?>" />
		</p>
		<p>
			<label for="<?php
      echo $this->get_field_id('nav_menu');
?>"><?php
      _e('Select Menu:', 'framework_localize');
?></label>
			<select id="<?php
      echo $this->get_field_id('nav_menu');
?>" name="<?php
      echo $this->get_field_name('nav_menu');
?>">
		<?php
      foreach ($menus as $menu) {
         $selected = $nav_menu == $menu->term_id ? ' selected="selected"' : '';
         echo '<option' . $selected . ' value="' . $menu->term_id . '">' . $menu->name . '</option>';
      }
?>
			</select>
		</p>
		<?php
   }
}
add_action('widgets_init', create_function('', 'return register_widget("ka_custom_menu");'));






/*
===============================================================================

Archives Widget

===============================================================================
*/
class ka_custom_archives extends WP_Widget
{
   function ka_custom_archives()
   {
      $widget_ops = array(
         'classname' => 'widget_archive',
         'description' => __('A monthly archive of your site&#8217;s posts', 'framework_localize')
      );
      $this->WP_Widget('archives', __('Custom Archives', 'framework_localize'), $widget_ops);
   }
   function widget($args, $instance)
   {
      extract($args);
      $c            = $instance['count'] ? '1' : '0';
      $d            = $instance['dropdown'] ? '1' : '0';
      $title        = apply_filters('widget_title', empty($instance['title']) ? __('Archives', 'framework_localize') : $instance['title'], $instance, $this->id_base);
      $neg_excluded = B_getExcludedCats();
      $neg_cats     = $neg_excluded;
      echo $before_widget;
      if ($title)
         echo $before_title . $title . $after_title;
      if ($d) {
?>
		<select name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> <option value=""><?php
         echo esc_attr(__('Select Month', 'framework_localize'));
?></option> <?php
         wp_get_archives(apply_filters('widget_archives_dropdown_args', array(
            'type' => 'monthly',
            'format' => 'option',
            'show_post_count' => $c,
            'cat' => $neg_cats
         )));
?> </select>
<?php
      } else {
?>
		<ul>
		<?php
         wp_get_archives(apply_filters('widget_archives_args', array(
            'type' => 'monthly',
            'show_post_count' => $c,
            'cat' => $neg_cats
         )));
?>
		</ul>
<?php
      }
      echo $after_widget;
   }
   function update($new_instance, $old_instance)
   {
      $instance             = $old_instance;
      $new_instance         = wp_parse_args((array) $new_instance, array(
         'title' => '',
         'count' => 0,
         'dropdown' => ''
      ));
      $instance['title']    = strip_tags($new_instance['title']);
      $instance['count']    = $new_instance['count'] ? 1 : 0;
      $instance['dropdown'] = $new_instance['dropdown'] ? 1 : 0;
      return $instance;
   }
   function form($instance)
   {
      $instance = wp_parse_args((array) $instance, array(
         'title' => '',
         'count' => 0,
         'dropdown' => ''
      ));
      $title    = strip_tags($instance['title']);
      $count    = $instance['count'] ? 'checked="checked"' : '';
      $dropdown = $instance['dropdown'] ? 'checked="checked"' : '';
?>
		<p><label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label> <input class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" type="text" value="<?php
      echo esc_attr($title);
?>" /></p>
		<p>
			<input class="checkbox" type="checkbox" <?php
      echo $count;
?> id="<?php
      echo $this->get_field_id('count');
?>" name="<?php
      echo $this->get_field_name('count');
?>" /> <label for="<?php
      echo $this->get_field_id('count');
?>"><?php
      _e('Show post counts', 'framework_localize');
?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php
      echo $dropdown;
?> id="<?php
      echo $this->get_field_id('dropdown');
?>" name="<?php
      echo $this->get_field_name('dropdown');
?>" /> <label for="<?php
      echo $this->get_field_id('dropdown');
?>"><?php
      _e('Display as a drop down', 'framework_localize');
?></label>
		</p>
<?php
   }
}
add_action('widgets_init', create_function('', 'return register_widget("ka_custom_archives");'));






/*
===============================================================================

Flickr Widget

===============================================================================
*/
class ka_flickr_widget extends WP_Widget
{
   function ka_flickr_widget()
   {
      // Widget settings
      $widget_ops  = array(
         'classname' => 'ka_flickr_widget',
         'description' => __('Display your Flickr photos on your website.', 'framework_localize')
      );
      // Widget control settings
      $control_ops = array(
         'width' => 300,
         'height' => 350,
         'id_base' => 'ka_flickr_widget'
      );
      // Create the widget
      $this->WP_Widget('ka_flickr_widget', __('Custom Flickr Photos', 'framework_localize'), $widget_ops, $control_ops);
   }
   // Display widget	
   function widget($args, $instance)
   {
      extract($args);
      // Our variables from the widget settings
      $title     = apply_filters('widget_title', $instance['title']);
      $flickrID  = $instance['flickrID'];
      $postcount = $instance['postcount'];
      $type      = $instance['type'];
      $display   = $instance['display'];
      // Before widget (defined by theme functions file)
      echo $before_widget;
      // Display the widget title if one was input
      if ($title)
         echo $before_title . $title . $after_title;
      // Display Flickr Photos
?>
		
	<div id="flickr_badge_wrapper" class="clearfix">
	
		<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php
      echo $postcount;
?>&amp;display=<?php
      echo $display;
?>&amp;size=s&amp;layout=x&amp;source=<?php
      echo $type;
?>&amp;<?php
      echo $type;
?>=<?php
      echo $flickrID;
?>"></script>
		
	</div>
	
	<?php
      // After widget (defined by theme functions file)
      echo $after_widget;
   }
   // Update widget	
   function update($new_instance, $old_instance)
   {
      $instance              = $old_instance;
      // Strip tags to remove HTML (important for text inputs)
      $instance['title']     = strip_tags($new_instance['title']);
      $instance['flickrID']  = strip_tags($new_instance['flickrID']);
      // No need to strip tags
      $instance['postcount'] = $new_instance['postcount'];
      $instance['type']      = $new_instance['type'];
      $instance['display']   = $new_instance['display'];
      return $instance;
   }
   // Widget settings	 
   function form($instance)
   {
      // Set up some default widget settings
      $defaults = array(
         'title' => 'Our Photostream',
         'flickrID' => '52617155@N08',
         'postcount' => '9',
         'type' => 'user',
         'display' => 'latest'
      );
      $instance = wp_parse_args((array) $instance, $defaults);
?>

	<p>
		<label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
		<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" value="<?php
      echo $instance['title'];
?>" />
	</p>

	<p>
		<label for="<?php
      echo $this->get_field_id('flickrID');
?>"><?php
      _e('Flickr ID:', 'framework_localize');
?> (<a href="http://idgettr.com/" target="_blank">Get your ID here - idGettr</a>)</label>
		<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('flickrID');
?>" name="<?php
      echo $this->get_field_name('flickrID');
?>" value="<?php
      echo $instance['flickrID'];
?>" />
	</p>
	
	<p>
		<label for="<?php
      echo $this->get_field_id('postcount');
?>"><?php
      _e('Number of Photos:', 'framework_localize');
?></label>
		<select id="<?php
      echo $this->get_field_id('postcount');
?>" name="<?php
      echo $this->get_field_name('postcount');
?>" class="widefat">
			<option <?php
      if ('3' == $instance['postcount'])
         echo 'selected="selected"';
?>>3</option>
			<option <?php
      if ('6' == $instance['postcount'])
         echo 'selected="selected"';
?>>6</option>
			<option <?php
      if ('9' == $instance['postcount'])
         echo 'selected="selected"';
?>>9</option>
		</select>
	</p>
	
	<p>
		<label for="<?php
      echo $this->get_field_id('type');
?>"><?php
      _e('Type (user or group):', 'framework_localize');
?></label>
		<select id="<?php
      echo $this->get_field_id('type');
?>" name="<?php
      echo $this->get_field_name('type');
?>" class="widefat">
			<option <?php
      if ('user' == $instance['type'])
         echo 'selected="selected"';
?>>user</option>
			<option <?php
      if ('group' == $instance['type'])
         echo 'selected="selected"';
?>>group</option>
		</select>
	</p>
	
	<p>
		<label for="<?php
      echo $this->get_field_id('display');
?>"><?php
      _e('Display (random or latest):', 'framework_localize');
?></label>
		<select id="<?php
      echo $this->get_field_id('display');
?>" name="<?php
      echo $this->get_field_name('display');
?>" class="widefat">
			<option <?php
      if ('random' == $instance['display'])
         echo 'selected="selected"';
?>>random</option>
			<option <?php
      if ('latest' == $instance['display'])
         echo 'selected="selected"';
?>>latest</option>
		</select>
	</p>
		
	<?php
   }
}
add_action('widgets_init', create_function('', 'return register_widget("ka_flickr_widget");'));






/*
===============================================================================

Latest Tweets Widget

===============================================================================
*/
// Props to Orman Clark. Thanks mate, lovely time saver!

/*
 * Plugin Name: Custom Latest Tweets
 * Plugin URI: http://www.premiumpixels.com
 * Description: A widget that displays your latest tweets
 * Version: 2.0
 * Author: Orman Clark
 * Author URI: http://www.premiumpixels.com
 */
/*
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'tz_tweets_widgets');
/*
 * Register widget.
 */
function tz_tweets_widgets()
{
   register_widget('TZ_Tweet_Widget');
}
function tz_twitter_js($tz_twitter_username, $tz_twitter_postcount)
{
   return '<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/' . $tz_twitter_username . '.json?callback=twitterCallback2&amp;count=' . $tz_twitter_postcount . '"></script>';
}
/*
 * Widget class.
 */
class tz_tweet_widget extends WP_Widget
{
   /* ---------------------------- */
   /* -------- Widget setup -------- */
   /* ---------------------------- */
   function TZ_Tweet_Widget()
   {
      /* Widget settings. */
      $widget_ops  = array(
         'classname' => 'tz_tweet_widget',
         'description' => __('A widget that displays your latest tweets.', 'framework_localize')
      );
      /* Widget control settings. */
      $control_ops = array(
         'width' => 300,
         'height' => 350,
         'id_base' => 'tz_tweet_widget'
      );
      /* Create the widget. */
      $this->WP_Widget('tz_tweet_widget', __('Custom Latest Tweets', 'framework_localize'), $widget_ops, $control_ops);
   }
   /* ---------------------------- */
   /* ------- Display Widget -------- */
   /* ---------------------------- */
   function widget($args, $instance)
   {
      extract($args);
      /* Our variables from the widget settings. */
      $title = apply_filters('widget_title', $instance['title']);
      global $tz_twitter_username, $tz_twitter_postcount;
      $tz_twitter_username  = $instance['username'];
      $tz_twitter_postcount = $instance['postcount'];
      $tweettext            = $instance['tweettext'];
      function echo_tweets_js()
      {
         global $tz_twitter_username, $tz_twitter_postcount;
         echo tz_twitter_js($tz_twitter_username, $tz_twitter_postcount);
      }
      add_action('wp_footer', 'echo_tweets_js');
      /* Before widget (defined by themes). */
      echo $before_widget;
      /* Display the widget title if one was input (before and after defined by themes). */
      if ($title)
         echo $before_title . $title . $after_title;
      /* Display Latest Tweets */
?>

            <ul id="twitter_update_list">
                <li><p></p></li>
            </ul>
            <a href="http://twitter.com/<?php
      echo $tz_twitter_username;
?>" id="twitter-link">
            	<span><?php
      echo $tweettext;
?></span> 
            </a>
		
		<?php
      /* After widget (defined by themes). */
      echo $after_widget;
   }
   /* ---------------------------- */
   /* ------- Update Widget -------- */
   /* ---------------------------- */
   function update($new_instance, $old_instance)
   {
      $instance              = $old_instance;
      /* Strip tags for title and name to remove HTML (important for text inputs). */
      $instance['title']     = strip_tags($new_instance['title']);
      $instance['username']  = strip_tags($new_instance['username']);
      $instance['postcount'] = strip_tags($new_instance['postcount']);
      $instance['tweettext'] = strip_tags($new_instance['tweettext']);
      /* No need to strip tags for.. */
      return $instance;
   }
   /* ---------------------------- */
   /* ------- Widget Settings ------- */
   /* ---------------------------- */
   /**
    * Displays the widget settings controls on the widget panel.
    * Make use of the get_field_id() and get_field_name() function
    * when creating your form elements. This handles the confusing stuff.
    */
   function form($instance)
   {
      /* Set up some default widget settings. */
      $defaults = array(
         'title' => 'Latest Tweets',
         'username' => 'truethemes',
         'postcount' => '3',
         'tweettext' => 'Follow us on Twitter'
      );
      $instance = wp_parse_args((array) $instance, $defaults);
?>

		<!-- Widget Title: Text Input -->
		<p>



			<label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
			<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" value="<?php
      echo $instance['title'];
?>" />
		</p>

		<!-- Username: Text Input -->
		<p>
			<label for="<?php
      echo $this->get_field_id('username');
?>"><?php
      _e('Twitter Username e.g. ormanclark', 'framework_localize');
?></label>
			<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('username');
?>" name="<?php
      echo $this->get_field_name('username');
?>" value="<?php
      echo $instance['username'];
?>" />
		</p>
		
		<!-- Postcount: Text Input -->
		<p>
			<label for="<?php
      echo $this->get_field_id('postcount');
?>"><?php
      _e('Number of tweets (max 20)', 'framework_localize');
?></label>
			<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('postcount');
?>" name="<?php
      echo $this->get_field_name('postcount');
?>" value="<?php
      echo $instance['postcount'];
?>" />
		</p>
		
		<!-- Tweettext: Text Input -->
		<p>
			<label for="<?php
      echo $this->get_field_id('tweettext');
?>"><?php
      _e('Follow Text e.g. Follow me on Twitter', 'framework_localize');
?></label>
			<input type="text" class="widefat" id="<?php
      echo $this->get_field_id('tweettext');
?>" name="<?php
      echo $this->get_field_name('tweettext');
?>" value="<?php
      echo $instance['tweettext'];
?>" />
		</p>
		
	<?php
   }
}




/*
	Plugin Name: Simple Google Map
	Plugin URI: http://clarknikdelpowell.com/wordpress/simple-google-map/
	Description: This plugin will embed a google map using shortcode or as a widget.
	Author: Taylor Gorman
	Author URI: http://clarknikdelpowell.com
	Version: 2.0

	Copyright 2009  Clark Nikdel Powell  (email : taylor@cnpstudio.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/*
===============================================================================

   the map code (so it's not here twice)

===============================================================================
*/

function TT_SGMprintmap($lat, $lng, $zoom, $type, $content, $directionsto) {
	
	$SGMoptions = get_option('SGMoptions'); // get options defined in admin page
	
	if (!$lat) {$lat = '0';}
	if (!$lng) {$lng = '0';}
	if (!$zoom) {$zoom = $SGMoptions['zoom'];} // 1-19
	//if (!$type) {$type = $SGMoptions['type'];} // ROADMAP, SATELLITE, HYBRID, TERRAIN
	$type = "ROADMAP"; // modified by TT
	if (!$content) {$content = $SGMoptions['content'];}
	
	$content = str_replace('&lt;', '<', $content);
	$content = str_replace('&gt;', '>', $content);
	$content = mysql_escape_string($content);
	if ($directionsto) { $directionsForm = "<form method=\"get\" action=\"http://maps.google.com/maps\"><input type=\"hidden\" name=\"daddr\" value=\"".$directionsto."\" /><input type=\"text\" class=\"text\" name=\"saddr\" /><input type=\"submit\" class=\"submit\" value=\"Directions\" /></form>"; }

	return "
	<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
	<script type='text/javascript'>
		function makeMap() {
			var latlng = new google.maps.LatLng(".$lat.", ".$lng.")
			
			var myOptions = {
				zoom: ".$zoom.",
				center: latlng,
				mapTypeControl: true,
				mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
				navigationControl: true,
				navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
				mapTypeId: google.maps.MapTypeId.".$type."
			};
			var map = new google.maps.Map(document.getElementById('SGM'), myOptions);
			
			var contentString = '<div class=\"infoWindow\"><p>".$content.$directionsForm."</p></div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				title: ''
			});
			
			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			});
		}
		window.onload = makeMap;
	</script>
	
	<div id='SGM'></div>
	";
	
}

/*
===============================================================================

simple google map shortcode

===============================================================================
*/
add_shortcode('SGM', 'googleMap');
function googleMap($atts)
{
   return SGMprintmap($atts['lat'], $atts['lng'], $atts['zoom'], $atts['type'], $atts['content'], $atts['directionsto']);
}


/*
===============================================================================

   simple google map widget

===============================================================================
*/

add_action('widgets_init', create_function('', 'return register_widget("TT_SGMwidget");'));

class TT_SGMwidget extends WP_Widget {

	// constructor
	function TT_SGMwidget() {
		$widget_ops = array('classname' => 'SGMwidget', 'description' => __( 'Add a google map to your blog or site', 'framework_localize') );
		$this->WP_Widget('module', __('Custom Google Map', 'framework_localize'), $widget_ops);
	}
	
	// output the content of the widget
	function widget($args, $instance) {		
		extract( $args );
		print $before_widget;
		if ($instance['title']) { 
	  	//need to do widget title the WordPress Way or WPML will not work here!      
      	$title = apply_filters('widget_title',$instance["title"]);		
		print $before_title.$title.$after_title; 
		}
		print TT_SGMprintmap($instance['lat'], $instance['lng'], $instance['zoom'], $instance['type'], $instance['content'], $instance['directionsto']);
		print $after_widget;
	}
	
	// process widget options to be saved
	function update($new_instance, $old_instance) {		
		print_r($old_instance);
		print_r($new_instance);
		return $new_instance;
	}
	
	// output the options form on admin
	function form($instance) {
		global $wpdb;
		$title = esc_attr($instance['title']);
		$lat = esc_attr($instance['lat']);
		$lng = esc_attr($instance['lng']);
		$zoom = esc_attr($instance['zoom']);
		$type = esc_attr($instance['type']);
		$directionsto = esc_attr($instance['directionsto']);
		$content = esc_attr($instance['content']);
		?>
        <p><em>* <?php _e('Note: you can retrieve the required latitude and longitude values at', 'framework_localize') ?> <a href="http://itouchmap.com/latlong.html" target="_blank">www.iTouchMap.com</a>.</em></p><br />
			<p>
			<label for="<?php print $this->get_field_id('title'); ?>"><?php _e('Title:', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('title'); ?>" name="<?php print $this->get_field_name('title'); ?>" type="text" value="<?php print $title; ?>" />
			</p>
			<p>
			<label for="<?php print $this->get_field_id('lat'); ?>"><?php _e('Latitude:', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('lat'); ?>" name="<?php print $this->get_field_name('lat'); ?>" type="text" value="<?php print $lat; ?>" />
			</p>
			<p>
			<label for="<?php print $this->get_field_id('lng'); ?>"><?php _e('Longitude:', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('lng'); ?>" name="<?php print $this->get_field_name('lng'); ?>" type="text" value="<?php print $lng; ?>" />
			</p>
			<p>
			<label for="<?php print $this->get_field_id('zoom'); ?>"><?php _e('Zoom Level: <small>(1-19)</small>', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('zoom'); ?>" name="<?php print $this->get_field_name('zoom'); ?>" type="text" value="<?php print $zoom; ?>" />
			</p>
			
		<!--	
			<p>
			<label for="<?php print $this->get_field_id('type'); ?>"><?php _e('Map Type:<br /><small>(ROADMAP, SATELLITE, HYBRID, TERRAIN)</small>', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('type'); ?>" name="<?php print $this->get_field_name('type'); ?>" type="text" value="<?php print $type; ?>" />
			</p>
			
	    -->
			
			<p>
			<label for="<?php print $this->get_field_id('directionsto'); ?>"><?php _e('Address for directions:', 'framework_localize'); ?></label>
			<input class="widefat" id="<?php print $this->get_field_id('directionsto'); ?>" name="<?php print $this->get_field_name('directionsto'); ?>" type="text" value="<?php print $directionsto; ?>" />
			</p>
			<p>
			<label for="<?php print $this->get_field_id('content'); ?>"><?php _e('Info Bubble Content:', 'framework_localize'); ?></label>
			<textarea rows="7" class="widefat" id="<?php print $this->get_field_id('content'); ?>" name="<?php print $this->get_field_name('content'); ?>"><?php print $content; ?></textarea>
			</p>
		<?php 
	}
	
} // SGMwidget widget



/*
===============================================================================

Business Hours Widget

===============================================================================
*/
// Register widget
function tt_load_opening()
{
   register_widget('tt_opening_widget');
}
// Add the function to widgets_init
add_action('widgets_init', 'tt_load_opening');
class tt_opening_widget extends WP_Widget
{
   /* Widget setup */
   function tt_opening_widget()
   {
      // Widget settings
      $widget_ops  = array(
         'classname' => 'opening_widget',
         'description' => __('Use this widget to display your business hours.', 'framework_localize')
      );
      // Widget control settings
      $control_ops = array(
         'width' => 300,
         'height' => 350,
         'id_base' => 'opening_widget'
      );
      // Create widget
      $this->WP_Widget('opening_widget', __('Custom Business Hours', 'framework_localize'), $widget_ops, $control_ops);
   }
   /* Display Widget */
   function widget($args, $instance)
   {
      extract($args);
      // The variables from the Widget settings
      $title = apply_filters('widget_title', $instance['title']);
      $mon   = $instance['monday'];
      $tues  = $instance['tuesday'];
      $wed   = $instance['wednesday'];
      $thurs = $instance['thursday'];
      $fri   = $instance['friday'];
      $sat   = $instance['saturday'];
      $sun   = $instance['sunday'];
      // Before widget
      echo $before_widget;
      // Display the widget title if one was added by the user
      if ($title)
         echo $before_title . $title . $after_title;
      // Display Opening Hours widget
?>
		<div class="business-hours">
                <p class="odd"><span class="day"><?php _e('Monday:','framework_localize');?> </span><span class="hours"><?php
      echo $mon;
?></span></p>
                <p><span class="day"><?php _e('Tuesday:','framework_localize');?> </span><span class="hours"><?php
      echo $tues;
?></span></p>
                <p class="odd"><span class="day"><?php _e('Wednesday:','framework_localize');?> </span><span class="hours"><?php
      echo $wed;
?></span></p>
                <p><span class="day"><?php _e('Thursday:','framework_localize');?> </span><span class="hours"><?php
      echo $thurs;
?></span></p>
                <p class="odd"><span class="day"><?php _e('Friday:','framework_localize');?> </span><span class="hours"><?php
      echo $fri;
?></span></p>
                <p><span class="day"><?php _e('Saturday:','framework_localize');?> </span><span class="hours"><?php
      echo $sat;
?></span></p>
                <p class="odd"><span class="day"><?php _e('Sunday:','framework_localize');?> </span><span class="hours"><?php
      echo $sun;
?></span></p>
		</div>
        <?php
      // After widget
      echo $after_widget;
   }
   /* Update Widget */
   function update($new_instance, $old_instance)
   {
      $instance              = $old_instance;
      // Strip tags to remove HTML
      $instance['title']     = strip_tags($new_instance['title']);
      $instance['monday']    = strip_tags($new_instance['monday']);
      $instance['tuesday']   = strip_tags($new_instance['tuesday']);
      $instance['wednesday'] = strip_tags($new_instance['wednesday']);
      $instance['thursday']  = strip_tags($new_instance['thursday']);
      $instance['friday']    = strip_tags($new_instance['friday']);
      $instance['saturday']  = strip_tags($new_instance['saturday']);
      $instance['sunday']    = strip_tags($new_instance['sunday']);
      return $instance;
   }
   /* Widget Settings */
   function form($instance)
   {
      $instance = wp_parse_args((array) $instance, $defaults);
?>
 
        <!-- Widget Title -->
        <p>
            <label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" value="<?php
      echo $instance['title'];
?>" />
        </p>
 
        <!-- Monday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('monday');
?>"><?php
      _e('Monday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('monday');
?>" name="<?php
      echo $this->get_field_name('monday');
?>" value="<?php
      echo $instance['monday'];
?>" />
        </p>
 
        <!-- Tuesday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('tuesday');
?>"><?php
      _e('Tuesday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('tuesday');
?>" name="<?php
      echo $this->get_field_name('tuesday');
?>" value="<?php
      echo $instance['tuesday'];
?>" />
        </p>
 
        <!-- Wednesday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('wednesday');
?>"><?php
      _e('Wednesday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('wednesday');
?>" name="<?php
      echo $this->get_field_name('wednesday');
?>" value="<?php
      echo $instance['wednesday'];
?>" />
        </p>
 
        <!-- Thursday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('thursday');
?>"><?php
      _e('Thursday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('thursday');
?>" name="<?php
      echo $this->get_field_name('thursday');
?>" value="<?php
      echo $instance['thursday'];
?>" />
        </p>
 
        <!-- Friday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('friday');
?>"><?php
      _e('Friday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('friday');
?>" name="<?php
      echo $this->get_field_name('friday');
?>" value="<?php
      echo $instance['friday'];
?>" />
        </p>
 
        <!-- Saturday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('saturday');
?>"><?php
      _e('Saturday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('saturday');
?>" name="<?php
      echo $this->get_field_name('saturday');
?>" value="<?php
      echo $instance['saturday'];
?>" />
        </p>
 
        <!-- Sunday -->
        <p>
            <label for="<?php
      echo $this->get_field_id('sunday');
?>"><?php
      _e('Sunday:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('sunday');
?>" name="<?php
      echo $this->get_field_name('sunday');
?>" value="<?php
      echo $instance['sunday'];
?>" />
        </p>
 
        <?php
   }
}
/*
===============================================================================

Contact Details Widget

===============================================================================
*/
// Register widget
function tt_load_contact_widget()
{
   register_widget('tt_contact_widget');
}
// Add the function to widgets_init
add_action('widgets_init', 'tt_load_contact_widget');
class tt_contact_widget extends WP_Widget
{
   /* Widget setup */
   function tt_contact_widget()
   {
      // Widget settings
      $widget_ops  = array(
         'classname' => 'contact_widget',
         'description' => __('Use this widget to display your contact details.', 'framework_localize')
      );
      // Widget control settings
      $control_ops = array(
         'width' => 300,
         'height' => 350,
         'id_base' => 'contact_widget'
      );
      // Create widget
      $this->WP_Widget('contact_widget', __('Custom Contact Details', 'framework_localize'), $widget_ops, $control_ops);
   }
   /* Display Widget */
   function widget($args, $instance)
   {
      extract($args);
      // The variables from the Widget settings
      $title   = apply_filters('widget_title', $instance['title']);
      $address = $instance['address'];
	  $city_state = $instance['city_state'];
      $phone   = $instance['phone'];
      $fax     = $instance['fax'];
      $email   = $instance['email'];
      // Before widget
      echo $before_widget;
      // Display the widget title if one was added by the user
      if ($title)
         echo $before_title . $title . $after_title;
      // Display Opening Hours widget
?>
<div class="contact_details">
	<div class="contact_details_wrap">
    <p class="address"><?php echo $address.'<br />'.$city_state; ?></p>
    
		<p class="phone"><strong><?php _e('phone:','framework_localize'); ?></strong> <?php echo $phone; ?></p>
		<p class="fax"><strong><?php _e('fax:','framework_localize'); ?></strong> <?php echo $fax; ?></p>
		<p class="email"><strong><?php _e('email:','framework_localize'); ?></strong> <?php echo '<a href="mailto:'.$email.'">'.$email.'</a>'; ?></p>  
    </div><!-- END contact_details_wrap -->            
</div>
        <?php
      // After widget
      echo $after_widget;
   }
   /* Update Widget */
   function update($new_instance, $old_instance)
   {
      $instance            = $old_instance;
      // Strip tags to remove HTML
      $instance['title']   = strip_tags($new_instance['title']);
      $instance['address'] = strip_tags($new_instance['address']);
	  $instance['city_state'] = strip_tags($new_instance['city_state']);
      $instance['phone']   = strip_tags($new_instance['phone']);
      $instance['fax']     = strip_tags($new_instance['fax']);
      $instance['email']   = strip_tags($new_instance['email']);
      return $instance;
   }
   /* Widget Settings */
   function form($instance)
   {
      $instance = wp_parse_args((array) $instance, $defaults);
?>
 
        <!-- Widget Title -->
        <p>
            <label for="<?php
      echo $this->get_field_id('title');
?>"><?php
      _e('Title:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('title');
?>" name="<?php
      echo $this->get_field_name('title');
?>" value="<?php
      echo $instance['title'];
?>" />
        </p>
 
        <!-- Address -->
        <p>
            <label for="<?php
      echo $this->get_field_id('address');
?>"><?php
      _e('Street Address:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('address');
?>" name="<?php
      echo $this->get_field_name('address');
?>" value="<?php
      echo $instance['address'];
?>" />
        </p>
        
        <!-- City, State, Zip -->
        <p>
            <label for="<?php
      echo $this->get_field_id('city_state');
?>"><?php
      _e('City, State, Zipcode:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('city_state');
?>" name="<?php
      echo $this->get_field_name('city_state');
?>" value="<?php
      echo $instance['city_state'];
?>" />
        </p>
 
        <!-- Phone -->
        <p>
            <label for="<?php
      echo $this->get_field_id('phone');
?>"><?php
      _e('Phone:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('phone');
?>" name="<?php
      echo $this->get_field_name('phone');
?>" value="<?php
      echo $instance['phone'];
?>" />
        </p>
 
        <!-- Fax -->
        <p>
            <label for="<?php
      echo $this->get_field_id('fax');
?>"><?php
      _e('Fax:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('fax');
?>" name="<?php
      echo $this->get_field_name('fax');
?>" value="<?php
      echo $instance['fax'];
?>" />
        </p>
 
        <!-- Email -->
        <p>
            <label for="<?php
      echo $this->get_field_id('email');
?>"><?php
      _e('Email:', 'framework_localize');
?></label>
 
            <input type="text" class="widefat" id="<?php
      echo $this->get_field_id('email');
?>" name="<?php
      echo $this->get_field_name('email');
?>" value="<?php
      echo $instance['email'];
?>" />
        </p>
 
 
        <?php
   }
}
?>