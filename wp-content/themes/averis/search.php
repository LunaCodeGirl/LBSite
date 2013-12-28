<?php
	$page_ID = idbyslug ('search');
	$allsearch = &new WP_Query("s=$s&showposts=-1");
	$searchcount = $allsearch->post_count;
	wp_reset_query();
	//Language Options
	$averis_readmore = __('READ MORE', 'averis');
	$averis_sharethis = __('Share This', 'averis');
	$averis_archive = __('Archive', 'averis');
	$averis_on = __('on', 'averis');
	$averis_category = __('Category', 'averis');
	$averis_searchresultsfor = __('Hits For', 'averis');
	
	$pagecustoms = getOptions($page_ID);

	$averis_headline_active = "on";
	$averis_breadcrumbs_active = "on";

?>    

<?php get_header(); ?>

<?php if ($averis_headline_active!="off"){?>

	<!--
	####################################
		-	TITLE && BREADCRUMB	-
	####################################
	-->
	<div class="clear"></div>
	<div class="sixteen columns alpha">							
		<div class="pagetitleholder">								
				<div class="leftfloat">
					<div class="pagetitle"><h3><?php echo $searchcount." ".$averis_searchresultsfor ?> "<?php the_search_query(); ?>"</h3></div>
					<div class="clear"></div>								
				</div>
				<div class="breadcrumb_holder">
					<div class="breadcrumb"><?php 
							if($averis_breadcrumbs_active!="off"){
								if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
							}
							else
								echo "<span class='marked'>&nbsp;</span></div>
										<div class='clear'></div>";
						?></div>
					<div class="clear"></div>								
				</div>
				<div class="clear"></div>								
		</div>
	</div>
<?php } ?>

	<div class="clear"></div>
	<div class="divide50"></div>
	<div class="sixteen columns alpha omega searchresult">	
<!-- MAIN CONTENT CONTAINER	-->
	<?php 
	$paged =
		( get_query_var('paged') && get_query_var('paged') > 1 )
		? get_query_var('paged')
		: 1;
	$args = array(
		'posts_per_page' => 10,
		'paged' => $paged
	);
	$args =
		( $wp_query->query && !empty( $wp_query->query ) )
		? array_merge( $wp_query->query , $args )
		: $args;
	query_posts( $args );
	?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
    			
		<?php if($searchcount>0){
				        //Post Infos
						$post_time_day = get_post_time('j', true);
				        $post_time_monthyear = get_post_time('M Y', true);
				        $post_time_daymonthyear = date_i18n(get_option('date_format'), strtotime($post->post_date_gmt));

						$blogimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						$posttags = get_the_tags();
						$postcustoms = getOptions($post->ID);
						
						$excerpt_content = excerpt(50);
						if($excerpt_content=="") {
							$excerpt_content = substr(strip_tags(do_shortcode(get_the_content())), 0, 250);
				        	if(strlen($excerpt_content)>200) $excerpt_content .= "...";
				        }
				        ?>
				        <h5 class="blog_topline"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>									
							
									
								<div class="blog_subinfos">
									<span><?php echo $averis_on;?> <?php echo $post_time_daymonthyear; ?></span><span class="blog_subinfos_divider">|</span>
								</div>
							<div class="clear"></div>
							<p><?php echo $excerpt_content; ?>
								<br><br><a class="more leftfloat lunchproject" href="<?php echo get_permalink(); ?>"><?php echo $averis_readmore;?> &raquo;</a>
								<br>
							</p>	
							
							<div class="pagedivider"></div>
					<?php } endwhile; endif; //have_posts 
					/*$wp_query = null; 
					$wp_query = $temp;*/

					wp_reset_query();?>
				</div>
<!-- END OF CONTENT CONTAINER -->
<script type="text/javascript">
  jQuery.fn.extend({
    highlight: function(search, insensitive, hls_class){
      var regex = new RegExp("(<[^>]*>)|(\\b"+ search.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +")", insensitive ? "ig" : "g");
      return this.html(this.html().replace(regex, function(a, b, c){
        return (a.charAt(0) == "<") ? a : "<span class=\""+ hls_class +"\">" + c + "</span>";
      }));
    }
  });
  jQuery(document).ready(function($){
    if(typeof(hls_query) != 'undefined'){
      $(".searchresult").highlight(hls_query, 1, "maincolor");
    }
  });
  </script>
<?php get_footer(); ?>