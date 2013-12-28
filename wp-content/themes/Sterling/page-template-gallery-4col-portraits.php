<?php
/*
Template Name: Gallery - 4 Column Portraits
*/
?>
<?php get_header(); ?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>

<section id="content-container" class="clearfix">
<ul id="gallery-nav">
	<li class="active"><a href="" data-filter="*"><?php _e('All','framework_localize'); ?></a></li>
	<?php 
wp_list_categories(array(
'title_li' => '', 
'show_option_none' => '', 
'taxonomy' => 'gallery-category', 
'walker' => new truethemes_gallery_walker())
); 
?>
	</ul>

<div id="gallery-outer-wrap" class="clearfix">
	<div id="main-wrap" class="clearfix">
		<div id="iso-wrap" class="clearfix iso-space">
<?php
// Reset Post Data
wp_reset_postdata();
$photo_group = 0; //for prettyPhoto grouping
$count = 1; // for unique id of gallery item


//get site option to determine whether to show all gallery posts 
//or a number of posts

$num_of_gallery_posts = get_option('st_gallery_posts_per_page');

if($num_of_gallery_posts == "" || $num_of_gallery_posts == "show all"):

//this is show all, we do the query without paged variable and posts_per_page set to -1
$query = new WP_Query('post_type=gallery&posts_per_page=-1');

else:

//This is show number of gallery posts per page

//cast string to integer, because user input in site option is saved as string.
$num_per_page = (int)$num_of_gallery_posts;

//do the query with paged variable and posts_per_page according to site option
$query = new WP_Query('post_type=gallery'.'&posts_per_page='.$num_per_page.'&paged=' . get_query_var('paged'));

endif; //end the if statement to determine show all or number of gallery posts


//Start the WordPress Loop after querying the posts.
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
$terms = get_the_terms( get_the_ID(), 'gallery-category' );

//prepare all post meta values
$gal_thumbnail = get_post_meta($post->ID,'gal_thumbnail',true);
$gal_thumbnail_crop = truethemes_crop_image(null,$gal_thumbnail,183,276);
$gal_description = get_post_meta($post->ID,'gal_description',true);
$gal_description_select = get_post_meta($post->ID,'gal_description_select',true);
$gal_lightbox = get_post_meta($post->ID,'gal_lightbox',true);
$gal_lightbox2 = get_post_meta($post->ID,'gal_lightbox2',true);
$gal_lightbox2_crop = truethemes_crop_image(null,$gal_lightbox2,183,276);
$gal_lightbox3 = get_post_meta($post->ID,'gal_lightbox3',true);
$gal_lightbox3_crop = truethemes_crop_image(null,$gal_lightbox3,183,276);
$gal_lightbox4 = get_post_meta($post->ID,'gal_lightbox4',true);
$gal_lightbox4_crop = truethemes_crop_image(null,$gal_lightbox4,183,276);
$gal_lightbox5 = get_post_meta($post->ID,'gal_lightbox5',true);
$gal_lightbox5_crop = truethemes_crop_image(null,$gal_lightbox5,183,276);
$gal_title_select = get_post_meta($post->ID,'gal_title_select',true);
$gal_lightbox_title = get_post_meta($post->ID,'gal_lightbox_title',true);
$cat = get_the_category($post->ID);
$gal_link_to_page = get_post_meta($post->ID,'gal_link_to_page',true);
$gal_link_target = get_post_meta($post->ID,'gal_link_target',true);
?>


<?php
//determine whether to print prettyPhoto in group or single.
if(!empty($gal_lightbox2)):
$prettyPhoto_group = "prettyPhoto[group".$photo_group."]";
else:
$prettyPhoto_group = "prettyPhoto";
endif;
?>



<div data-id="id-<?php echo $count; ?>" class="one_fourth <?php if($terms) : foreach ($terms as $term) { echo 'term-'.$term->term_id.' '; } endif; ?>">

<div class="img-frame full-fourth-portrait">

<?php if(!empty($gal_link_to_page)): //this is link to page ?>

<div class="lightbox-linked">

<a class="hover-item" href="<?php echo $gal_link_to_page; ?>" target="<?php echo $gal_link_target; ?>" title="<?php echo $gal_lightbox_title; ?>">
<img src="<?php echo $gal_thumbnail_crop; ?>" alt="" width="183" height="276" />
</a>

<?php else: //do normal lightbox ?>

<div class="lightbox-zoom">

<a class="hover-item" data-gal="<?php echo $prettyPhoto_group; ?>" href="<?php echo $gal_lightbox; ?>" title="<?php echo $gal_lightbox_title; ?>">
<img src="<?php echo $gal_thumbnail_crop; ?>" alt="" width="183" height="276" />
</a>

<?php endif; ?>

</div><!-- END lightbox-zoom or light-box linked-->
</div><!-- END img-frame -->

<?php // start with lightbox2 since lightbox1 is already shown as the 'main item'
if(!empty($gal_lightbox2)): ?>			
<a data-gal="prettyPhoto[group<?php echo $photo_group; ?>]" href="<?php echo $gal_lightbox2; ?>">
<img src="<?php echo $gal_lightbox2_crop; ?>" alt="" width="183" height="276" style="display:none" />
</a>
<?php endif; ?>

<?php if(!empty($gal_lightbox3)): ?>			
<a data-gal="prettyPhoto[group<?php echo $photo_group; ?>]" href="<?php echo $gal_lightbox3; ?>">
<img src="<?php echo $gal_lightbox3_crop; ?>" alt="" width="183" height="276" style="display:none" />
</a>
<?php endif; ?>

<?php if(!empty($gal_lightbox4)): ?>			
<a data-gal="prettyPhoto[group<?php echo $photo_group; ?>]" href="<?php echo $gal_lightbox4; ?>">
<img src="<?php echo $gal_lightbox4_crop; ?>" alt="" width="183" height="276" style="display:none" />
</a>
<?php endif; ?>			

<?php if(!empty($gal_lightbox5)): ?>			
<a data-gal="prettyPhoto[group<?php echo $photo_group; ?>]" href="<?php echo $gal_lightbox5; ?>">
<img src="<?php echo $gal_lightbox5; ?>" alt="" width="183" height="276" style="display:none" />
</a>
<?php endif; ?>					

<?php 
//check if user select display title
if($gal_title_select == 'yes'): 
?>
<?php the_title('<h4>', '</h4>'); ?>
<?php endif; ?>					

<?php 
//check if user select display description
if($gal_description_select == 'yes'): 
?>
<p><?php echo $gal_description; ?></p>
<?php endif; ?>
</div>
<?php $count++;$photo_group++; endwhile;endif; ?>
		</div><!-- END iso-wrap -->
    
    <div class="gallery-wp-navi">
    <?php if(function_exists('wp_pagenavi')){ 
    	 //pass in custom query array, do not change codes below!
   		 wp_pagenavi($custom_query = $query); 
    }else{ 
    	paginate_links(); 
    } 
    ?>
    </div><!-- END gallery-wp-navi -->
    
	</div><!-- END main-wrap -->	
</div><!-- END gallery-outer-wrap -->

<?php get_footer(); ?>