<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<section class="small_banner">
<?php get_template_part('template-part-small-banner','childtheme'); ?>
</section>
    
<section id="content-container" class="clearfix">
	<div id="main-wrap" class="clearfix">
    <div class="page_content blog_page_content">
    <?php get_template_part('template-part-breadcrumbs','childtheme'); ?>
        <?php
				global $ttso;
				$blogbutton = $ttso->st_blogbutton;
				$blogauthor = $ttso->st_blogauthor;
				$posted_by = $ttso->st_posted_by;
				$blog_post_length = $ttso->st_blog_post_length;
				$blog_excerpt_link = stripslashes($ttso->st_blog_excerpt_link);


if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php //retrieve all post meta of posts in the loop.
			$linkpost = get_post_meta($post->ID, "_jcycle_url_value", $single = true);
			$external_image_url = get_post_meta($post->ID,'truethemes_external_image_url',true);
			$video_url = get_post_meta($post->ID,'truethemes_video_url',true);
			$permalink = get_permalink($post->ID);
			//prepare to get image
			$thumb = get_post_thumbnail_id();
			$image_width = 620;
			$image_height = 161;
			
			//use truethemes image cropping script
			$image_src = truethemes_crop_image($thumb,$external_image_url,$image_width,$image_height);
			?>
            
    
      
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<article class="preview blog-main-preview">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
        <?php if($posted_by == "true") { ?>
        <span class="metadata postinfo">
        <?php _e('Posted by', 'framework_localize') ?> <?php the_author_posts_link(); ?> 
        <?php _e('on', 'framework_localize') ?> <?php the_time( get_option('date_format')); ?>
        </span>
				<?php } ?>
        
	
					<?php //function to generate internal image, external image or video
          $html = truethemes_generate_blog_image($image_src,$image_width,$image_height,$blog_image_frame,$linkpost,$permalink,$video_url);
          echo $html;
          ?>

          <?php if($blog_post_length == "true") { 
					the_content();
					get_template_part('template-part-social-share','childtheme');
					get_template_part('template-part-inline-editing','childtheme');
					} else {
					the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo $blog_excerpt_link; ?> &rarr;</a>
					<?php } ?>               
                
                
				<div class="post-details">
				<p class="post-tags"><?php the_tags() ?></p>
				<p class="post-categories"><strong><?php _e('Posted in:', 'framework_localize') ?></strong> <?php the_category(', ') ?></p>
				<a class="post-leave-comment" href="<?php echo the_permalink().'#respond'; ?>"><?php _e('Leave a Comment:', 'framework_localize') ?> (<?php comments_number('0', '1', '%'); ?>)  &rarr;</a>
				</div><!-- END post-details -->                    
			</article>
      </div><!-- END post-ID -->
            
            
            <?php endwhile; else: ?>
<h2><?php _e('Nothing Found' , 'framework_localize') ?></h2>
<p><?php _e('Sorry, it appears there is no content in this section.' , 'framework_localize') ?></p>
<?php endif; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }else{ paginate_links(); } ?>	
		</div>
        
        
		<aside class="sidebar blog_sidebar">
			<?php dynamic_sidebar("Blog Sidebar"); ?>
		</aside>
        </div><!-- END main-wrap -->
        
<?php get_footer(); ?>