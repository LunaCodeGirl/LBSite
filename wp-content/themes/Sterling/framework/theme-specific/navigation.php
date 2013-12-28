<?php
/*-----------------------------------------------------------------------------------*/
/*	Register Menus
/*-----------------------------------------------------------------------------------*/
register_nav_menu('Main Menu', 'Main Menu');
register_nav_menu('Footer Menu', 'Footer Menu');



/*-----------------------------------------------------------------------------------*/
/*	Custom Walker - Left Nav
/*-----------------------------------------------------------------------------------*/
class truethemes_sub_nav_walker extends Walker_Nav_Menu {
	var $found_parents = array();
	
	function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query, $item_output;
		$parent_item_id = 0;		
		$indent = ($depth) ? str_repeat("\t", $depth) : '';		
		$class_names = $value = '';		
		$classes = array();
		if(in_array('current-menu-item',$item->classes)){
			$classes[] = 'current_subpage';		
		}
	    global $wpdb;
        $has_children = $wpdb->get_var($wpdb->prepare("SELECT COUNT(meta_id) FROM $wpdb->postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='".$item->ID."'"));
    	if($has_children > 0){
    		$classes[] = 'has_subnav';
    	}	
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
		
		if(!empty($class_names)){
		$class_names = ' class="'.esc_attr($class_names).'"';
		}

		if (in_array('current-menu-item',$item->classes)|| in_array('current-menu-parent',$item->classes) || in_array('current-menu-ancestor',$item->classes) || (is_array($this->found_parents) && in_array($item->menu_item_parent, $this->found_parents))) {
			$this->found_parents[] = $item->ID;
			if ($item->menu_item_parent != $parent_item_id) {
				$output .= $indent.'<li'.$class_names.'>';												
				$attributes = !empty($item->attr_title) ? ' title="'.esc_attr($item->attr_title).'"' : '';
				$attributes .= !empty($item->target) ? ' target="'.esc_attr($item->target).'"' : '';
				$attributes .= !empty($item->xfn) ? ' rel="'.esc_attr($item->xfn).'"' : '';
				$attributes .= !empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';			
				$item_output = $args->before;
				$item_output .= '<a'.$attributes.'><span>';
				$item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;
				$item_output .= '</span></a>';
				$item_output .= $args->after;
			}
			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}

	function end_el(&$output, $item, $depth) {
		$parent_item_id = 0;
		
		if (in_array('current-menu-item',$item->classes)|| in_array('current-menu-parent',$item->classes)|| in_array('current-menu-ancestor',$item->classes) || (is_array($this->found_parents) && in_array($item->menu_item_parent, $this->found_parents))) {
			if (is_array($this->found_parents) && in_array($item->ID, $this->found_parents) && $item->menu_item_parent != $parent_item_id) {
				$output .= "</li>\n";
			}
		}
	}

	function end_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
		// If the sub-menu is empty, strip the opening tag, else closes it
		if (substr($output, - 5) == "<ul>\n") {
			$output = substr($output, 0, strlen($output) - 6);
		} else {
			$output .= "$indent</ul>\n";
		}
	}
}
function sterling_remove_empty_menu_tags($html_replace){
//removes any empty html tags.
$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/";
return preg_replace($pattern,'', $html_replace);
}







/*-----------------------------------------------------------------------------------*/
/*	Custom Walker - Gallery Filtering
/*-----------------------------------------------------------------------------------*/
class truethemes_gallery_walker extends Walker_Category {
   function start_el(&$output, $category, $depth, $args) {
      extract($args);
      $cat_name = esc_attr( $category->name);
      $cat_name = apply_filters( 'list_cats', $cat_name, $category );
	  $link = '<a href="#" data-filter=".term-'.$category->term_id.'" ';
      if ( $use_desc_for_title == 0 || empty($category->description) )
         $link .= 'title="' . sprintf(__( 'View all items filed under %s' , 'framework_localize'), $cat_name) . '"';
      else
         $link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
      $link .= '>';
      // $link .= $cat_name . '</a>';
      $link .= $cat_name;
      if(!empty($category->description)) {
         $link .= ' <span>'.$category->description.'</span>';
      }
      $link .= '</a>';
      if ( (! empty($feed_image)) || (! empty($feed)) ) {
         $link .= ' ';
         if ( empty($feed_image) )
            $link .= '(';
         $link .= '<a href="' . get_category_feed_link($category->term_id, $feed_type) . '"';
         if ( empty($feed) )
            $alt = ' alt="' . sprintf(__( 'Feed for all posts filed under %s' , 'framework_localize'), $cat_name ) . '"';
         else {
            $title = ' title="' . $feed . '"';
            $alt = ' alt="' . $feed . '"';
            $name = $feed;
            $link .= $title;
         }
         $link .= '>';
         if ( empty($feed_image) )
            $link .= $name;
         else
            $link .= "<img src='$feed_image'$alt$title" . ' />';
         $link .= '</a>';
         if ( empty($feed_image) )
            $link .= ')';
      }
      if ( isset($show_count) && $show_count )
         $link .= ' (' . intval($category->count) . ')';
      if ( isset($show_date) && $show_date ) {
         $link .= ' ' . gmdate('Y-m-d', $category->last_update_timestamp);
      }
      if ( isset($current_category) && $current_category )
         $_current_category = get_category( $current_category );
      if ( 'list' == $args['style'] ) {
          $output .= '<li class="segment-'.rand(2, 99).'"';
          $class = 'cat-item cat-item-'.$category->term_id;
          if ( isset($current_category) && $current_category && ($category->term_id == $current_category) )
             $class .=  ' current-cat';
          elseif ( isset($_current_category) && $_current_category && ($category->term_id == $_current_category->parent) )
             $class .=  ' current-cat-parent';
          $output .=  '';
          $output .= ">$link\n";
       } else {
          $output .= "\t$link<br />\n";
       }
   }
}
?>