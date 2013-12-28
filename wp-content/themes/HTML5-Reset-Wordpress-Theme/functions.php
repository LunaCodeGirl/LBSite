<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	/*if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}*/
	
	

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    //add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
    
    
    
    
    
    // Start of Customization
    
    function register_scripts()
    {
	    wp_register_script('cufon-yui', get_template_directory_uri() . '/_/js/cufon-yui.js', array('jquery'));
	    wp_register_script('copyright-violations-font', get_template_directory_uri() . '/_/js/CopyrightViolations.font.js', array('jquery', 'cufon-yui'));
	    wp_register_script('less', get_template_directory_uri() . '/_/js/less-1.3.0.min.js');
    }
    
    add_action('init', 'register_scripts');
    
    
	function enqueue_scripts()
	{
		wp_enqueue_script('jquery');
		wp_enqueue_script('cufon-yui');
		wp_enqueue_script('copyright-violations-font');
	}    
	 
	add_action('wp_enqueue_scripts', 'enqueue_scripts');
	
	
		
	function register_my_menus()
	{
		register_nav_menu('main-menu', 'Main Menu');
		register_nav_menu('footer-menu', 'Footer Menu');
	
	}
	
	if ( function_exists( 'register_my_menus' ) )
	{
		add_action( 'after_setup_theme', 'register_my_menus' );
	}
	
	
	
	function excerpt($limit)
	{
		$permalink = get_permalink($post->ID);
		
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		
		if (count($excerpt)>=$limit)
		{
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		}
		else
		{
			$excerpt = implode(" ",$excerpt);
		} 
		
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
	}
	
	
	function content($limit)
	{
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit)
		{
			array_pop($content);
			$content = implode(" ",$content).'…';
		} else
		{
			$content = implode(" ",$content);
		} 
		
		$content = preg_replace('/\[.+\]/','', $content);
		$content = apply_filters('the_content', $content); 
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}
	
	
?>