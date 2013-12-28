<?php

//Add an action that will load all widgets
add_action( 'widgets_init', 'rb_load_widgets' );

//Function that registers the widgets
function rb_load_widgets() {
	register_widget('rb_social_widget');
	register_widget('rb_twitter_widget');
	register_widget('rb_contact_widget');
	register_widget('rb_rotator1_widget');
	register_widget('rb_rotator2_widget');
}

/*-----------------------------------------------------------------------------------

	Plugin Name: RB Twitter Widget
	Plugin URI: http://www.rubenbristian.com
	Description: A widget that displays your latest tweets
	Version: 1.0
	Author: Ruben Bristian
	Author URI: http://www.rubenbristian.com

-----------------------------------------------------------------------------------*/

class rb_twitter_widget extends WP_Widget {
	
	function rb_twitter_widget (){
		
		$widget_ops = array( 'classname' => 'twitter', 'description' => 'A widget that displays your latest tweets' );
		$control_ops = array( 'width' => 250, 'height' => 120, 'id_base' => 'twitter-widget' );
		$this->WP_Widget( 'twitter-widget', 'RB Twitter Widget', $widget_ops, $control_ops );
		
	}
		
	function widget($args, $instance){
			
		extract($args);
			
		$title = apply_filters('widget_title', $instance['title']);
		$username = $instance['username'];
			
		echo $before_widget;
			
		echo $before_title.$title.$after_title;

		echo '<div id="twitter_wrapper"><div id="twitter_user" class="hidden">' . $username . '</div><div id="twitter"></div><span class="username"><a href="http://twitter.com/' . $username . '">&rarr; Follow @' . $username . '</a></span></div>';

		echo $after_widget;
			
	}
			
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;
			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['username'] = strip_tags($new_instance['username']);
			
		return $instance;
			
	}
		
	function form($instance){
		
		$defaults = array( 'title' => 'Twitter', 'username' => '' );
			
		$instance = wp_parse_args((array) $instance, $defaults);
			
		?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Username:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" style="width:100%;" />
			</p>
			
		<?php
			
	}
		
}
/*-----------------------------------------------------------------------------------

	Plugin Name: RB Social Icons Widget
	Plugin URI: http://www.rubenbristian.com
	Description: A widget that displays your social links
	Version: 1.0
	Author: Ruben Bristian
	Author URI: http://www.rubenbristian.com

-----------------------------------------------------------------------------------*/

class rb_social_widget extends WP_Widget {
	
	function rb_social_widget (){
		
		$widget_ops = array( 'classname' => 'social', 'description' => 'A widget that displays your social links' );
		$control_ops = array( 'width' => 250, 'height' => 120, 'id_base' => 'social-widget' );
		$this->WP_Widget( 'social-widget', 'RB Social Widget', $widget_ops, $control_ops );
		
	}
	
	function widget($args, $instance){
			
		extract($args);
			
		$title = apply_filters('widget_title', $instance['title']);
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$friendfeed = $instance['friendfeed'];
		$pinterest = $instance['pinterest'];
		$flickr = $instance['flickr'];
		$dribbble = $instance['dribbble'];
		$linkedin = $instance['linkedin'];
		$vimeo = $instance['vimeo'];
		$deviantart = $instance['deviantart'];
		$skype = $instance['skype'];
		$google = $instance['google'];
		$forrst = $instance['forrst'];
		$tumblr = $instance['tumblr'];
		$lastfm = $instance['lastfm'];
		$rss = $instance['rss'];
			
		echo $before_widget;
			
		echo $before_title.$title.$after_title;
			
		echo '<ul class="social clearfix">';

		if($rss)
			echo '<li><a target="_blank" class="rss" href="' . $rss . '">rss icon</a></li>';
		if($facebook)
			echo '<li><a target="_blank" class="facebook" href="' . $facebook . '">facebook icon</a></li>';
		if($twitter)
			echo '<li><a target="_blank" class="twitter" href="' . $twitter . '">twitter icon</a></li>';
		if($dribbble)
			echo '<li><a target="_blank" class="dribbble" href="' . $dribbble . '">dribbble icon</a></li>';
		if($pinterest)
			echo '<li><a target="_blank" class="pinterest" href="' . $pinterest . '">pinterest icon</a></li>';
		if($linkedin)
			echo '<li><a target="_blank" class="linkedin" href="' . $linkedin . '">linkedin icon</a></li>';
		if($vimeo)
			echo '<li><a target="_blank" class="vimeo" href="' . $vimeo . '">vimeo icon</a></li>';
		if($lastfm)
			echo '<li><a target="_blank" class="lastfm" href="' . $lastfm . '">lastfm icon</a></li>';
		if($tumblr)
			echo '<li><a target="_blank" class="tumblr" href="' . $tumblr . '">tumblr icon</a></li>';
		if($forrst)
			echo '<li><a target="_blank" class="forrst" href="' . $forrst . '">forrst icon</a></li>';
		if($skype)
			echo '<li><a target="_blank" class="skype" href="' . $skype . '">skype icon</a></li>';
		if($flickr)
			echo '<li><a target="_blank" class="flickr" href="' . $flickr . '">flickr icon</a></li>';
		if($deviantart)
			echo '<li><a target="_blank" class="deviantart" href="' . $deviantart . '">deviantart icon</a></li>';
		if($google)
			echo '<li><a target="_blank" class="google2" href="' . $google . '">google icon</a></li>';
		if($friendfeed)
			echo '<li><a target="_blank" class="friendfeed" href="' . $friendfeed . '">friendfeed icon</a></li>';

		echo '</ul>';
			
		echo $after_widget;
			
	}
			
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;
			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter'] = strip_tags($new_instance['twitter']);
		$instance['facebook'] = strip_tags($new_instance['facebook']);
		$instance['friendfeed'] = strip_tags($new_instance['friendfeed']);
		$instance['pinterest'] = strip_tags($new_instance['pinterest']);
		$instance['flickr'] = strip_tags($new_instance['flickr']);
		$instance['dribbble'] = strip_tags($new_instance['dribbble']);
		$instance['linkedin'] = strip_tags($new_instance['linkedin']);
		$instance['vimeo'] = strip_tags($new_instance['vimeo']);
		$instance['deviantart'] = strip_tags($new_instance['deviantart']);
		$instance['skype'] = strip_tags($new_instance['skype']);
		$instance['google'] = strip_tags($new_instance['google']);
		$instance['forrst'] = strip_tags($new_instance['forrst']);
		$instance['tumblr'] = strip_tags($new_instance['tumblr']);
		$instance['lastfm'] = strip_tags($new_instance['lastfm']);
		$instance['rss'] = strip_tags($new_instance['rss']);
			
		return $instance;
			
	}
		
	function form($instance){
		
		$defaults = array( 'title' => 'Social Links', 'rss' => '', 'facebook' => '', 'twitter' => '', 'dribbble' => '', 'pinterest' => '', 'linkedin' => '', 'forrst' => '', 'lastfm' => '', 'google' => '', 'friendfeed' => '', 'tumblr' => '', 'skype' => '', 'deviantart' => '' );
			
		$instance = wp_parse_args((array) $instance, $defaults);
			
		?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'rss' ); ?>"><?php _e('RSS link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" value="<?php echo $instance['rss']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('LinkedIn link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'lastfm' ); ?>"><?php _e('LastFM link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'lastfm' ); ?>" name="<?php echo $this->get_field_name( 'lastfm' ); ?>" value="<?php echo $instance['lastfm']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'forrst' ); ?>"><?php _e('Forrst link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'forrst' ); ?>" name="<?php echo $this->get_field_name( 'forrst' ); ?>" value="<?php echo $instance['forrst']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'deviantart' ); ?>"><?php _e('Deviantart link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'deviantart' ); ?>" name="<?php echo $this->get_field_name( 'deviantart' ); ?>" value="<?php echo $instance['deviantart']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'google' ); ?>"><?php _e('Google link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'google' ); ?>" name="<?php echo $this->get_field_name( 'google' ); ?>" value="<?php echo $instance['google']; ?>" style="width:100%;" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'friendfeed' ); ?>"><?php _e('FriendFeed link:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'friendfeed' ); ?>" name="<?php echo $this->get_field_name( 'friendfeed' ); ?>" value="<?php echo $instance['friendfeed']; ?>" style="width:100%;" />
			</p>

		<?php
			
	}
		
}

/*-----------------------------------------------------------------------------------

	Plugin Name: RB Popular Posts #1
	Plugin URI: http://www.rubenbristian.com
	Description: A widget that displays the most popular posts on your blog(footer version)
	Version: 1.0
	Author: Ruben Bristian
	Author URI: http://www.rubenbristian.com

-----------------------------------------------------------------------------------*/

class rb_rotator1_widget extends WP_Widget {
	
	function rb_rotator1_widget (){
		
		$widget_ops = array( 'classname' => 'posts', 'description' => 'A widget that displays the most popular posts on your blog(footer version)' );
		$control_ops = array( 'width' => 250, 'height' => 120, 'id_base' => 'popular1-widget' );
		$this->WP_Widget( 'popular1-widget', 'RB Popular Posts #1', $widget_ops, $control_ops );
		
	}
		
	function widget($args, $instance){
			
		extract($args);
			
		$title = apply_filters('widget_title', $instance['title']);
		$no = $instance['no'];
			
		global $post;
			
		echo $before_widget;
			
		echo $before_title.$title.$after_title;

		echo '<ul class="post-list">';
					
		$no_limit = 0;
			
			$all_posts = get_posts( array('numberposts' => $no, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC') );

			foreach($all_posts as $post) : setup_postdata($post); ?>

				<?php if($no_limit++ < $no) : ?>

					<li>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="meta"><?php the_time('j M, Y'); ?></div>
					</li>

				<?php endif; ?>
				
			<?php endforeach;

			
		echo '</ul>';
			
		echo $after_widget;
			
	}
			
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;
			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['no'] = strip_tags($new_instance['no']);
			
		return $instance;
			
	}
		
	function form($instance){
		
		$defaults = array( 'title' => 'Popular Posts', 'no' => '3' );
			
		$instance = wp_parse_args((array) $instance, $defaults);
			
		?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'no' ); ?>"><?php _e('Show number of posts:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'no' ); ?>" name="<?php echo $this->get_field_name( 'no' ); ?>" value="<?php echo $instance['no']; ?>" style="width:100%;" />
			</p>
			
		<?php
			
	}
		
}

/*-----------------------------------------------------------------------------------

	Plugin Name: RB Popular Posts #2
	Plugin URI: http://www.rubenbristian.com
	Description: A widget that displays the most popular posts on your blog(sidebar version)
	Version: 1.0
	Author: Ruben Bristian
	Author URI: http://www.rubenbristian.com

-----------------------------------------------------------------------------------*/

class rb_rotator2_widget extends WP_Widget {
	
	function rb_rotator2_widget (){
		
		$widget_ops = array( 'classname' => 'posts', 'description' => 'A widget that displays the most popular posts on your blog(sidebar version)' );
		$control_ops = array( 'width' => 250, 'height' => 120, 'id_base' => 'popular2-widget' );
		$this->WP_Widget( 'popular2-widget', 'RB Popular Posts #2', $widget_ops, $control_ops );
		
	}
		
	function widget($args, $instance){
			
		extract($args);
			
		$title = apply_filters('widget_title', $instance['title']);
		$no = $instance['no'];
			
		global $post;
			
		echo $before_widget;
			
		echo $before_title.$title.$after_title;

		echo '<ul class="posts-list">';
					
		$no_limit = 0;
			
			$all_posts = get_posts( array('numberposts' => $no, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC') );
			foreach($all_posts as $post) : setup_postdata($post); ?>

				<?php if($no_limit++ < $no) : ?>

					<li>
						<div class="featured"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
						<div class="meta">
							<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
							<em><?php the_time('j M, Y'); ?></em>
						</div>
					</li>

				<?php endif; ?>
				
			<?php endforeach;
			
		echo '</ul>';
			
		echo $after_widget;
			
	}
			
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;
			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['no'] = strip_tags($new_instance['no']);
			
		return $instance;
			
	}
		
	function form($instance){
		
		$defaults = array( 'title' => 'Popular Posts', 'no' => '3' );
			
		$instance = wp_parse_args((array) $instance, $defaults);
			
		?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'no' ); ?>"><?php _e('Show number of posts:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'no' ); ?>" name="<?php echo $this->get_field_name( 'no' ); ?>" value="<?php echo $instance['no']; ?>" style="width:100%;" />
			</p>
			
		<?php
			
	}
		
}
		
/*-----------------------------------------------------------------------------------

	Plugin Name: RB Contact Form Widget
	Plugin URI: http://www.rubenbristian.com
	Description: A widget that displays a basic form on the site
	Version: 1.0
	Author: Ruben Bristian
	Author URI: http://www.rubenbristian.com

-----------------------------------------------------------------------------------*/

class rb_contact_widget extends WP_Widget {
	
	function rb_contact_widget (){
		
		$widget_ops = array( 'classname' => 'contact_widget', 'description' => 'A widget that displays a basic form on the site' );
		$control_ops = array( 'width' => 250, 'height' => 120, 'id_base' => 'contact-widget' );
		$this->WP_Widget( 'contact-widget', 'RB Contact Form Widget', $widget_ops, $control_ops );
		
	}
		
	function widget($args, $instance){
			
		extract($args);
			
		$title = apply_filters('widget_title', $instance['title']);
		$name = $instance['name'];
		$email2 = $instance['email2'];
		$submit = $instance['submit'];
		$required = $instance['required'];
		$valid = $instance['valid'];
			
		echo $before_widget;
			
		echo $before_title.$title.$after_title;

		echo '<div class="form-container"><div class="response"></div><form class="forms" action="' . get_template_directory_uri() . '/form-handler.php" method="post"><fieldset><ol><li class="form-row text-input-row"><input type="text" name="name" class="text-input required defaultText" title="' . $name . '" /></li><li class="form-row text-input-row"><input type="text" name="email" class="text-input required email defaultText" title="' . $email2 . '" /></li><li class="form-row text-area-row"><textarea name="message" class="text-area required defaultText"></textarea></li><li class="form-row hidden-row"><input type="hidden" name="hidden" value="" /></li><li class="button-row"><input type="submit" value="' . $submit . '" name="submit" id="submit" class="btn-submit" /></li></ol><input type="hidden" name="v_error" id="v-error" value="' . $required . '" /><input type="hidden" name="v_email" id="v-email" value="' . $valid . '" /></fieldset></form></div>';
			
		echo $after_widget;
			
	}
			
	function update($new_instance, $old_instance){
		
		$instance = $old_instance;
			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['name'] = strip_tags($new_instance['name']);
		$instance['email2'] = strip_tags($new_instance['email2']);
		$instance['submit'] = strip_tags($new_instance['submit']);
		$instance['required'] = strip_tags($new_instance['required']);
		$instance['valid'] = strip_tags($new_instance['valid']);
			
		return $instance;
			
	}
		
	function form($instance){
		
		$defaults = array( 'title' => 'Contact Form', 'name' => 'Name*', 'email2' => 'Email', 'submit' => 'Submit', 'required' => 'Required', 'valid' => 'Enter a valid email');
			
		$instance = wp_parse_args((array) $instance, $defaults);
			
		?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Name Field:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'email2' ); ?>"><?php _e('Email Field:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'email2' ); ?>" name="<?php echo $this->get_field_name( 'email2' ); ?>" value="<?php echo $instance['email2']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'submit' ); ?>"><?php _e('Submit Button Label:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'submit' ); ?>" name="<?php echo $this->get_field_name( 'submit' ); ?>" value="<?php echo $instance['submit']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'required' ); ?>"><?php _e('Required error message:', 'ikaros'); ?></label>
				<input id="<?php echo $this->get_field_id( 'required' ); ?>" name="<?php echo $this->get_field_name( 'required' ); ?>" value="<?php echo $instance['required']; ?>" style="width:100%;" />
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'valid' ); ?>"><?php _e('Invalid email message:', 'ikaros'); ?></label>
				<textarea id="<?php echo $this->get_field_id( 'valid' ); ?>" name="<?php echo $this->get_field_name( 'valid' ); ?>" style="width:100%;" ><?php echo $instance['valid']; ?></textarea>
			</p>
			
		<?php
			
	}
		
}