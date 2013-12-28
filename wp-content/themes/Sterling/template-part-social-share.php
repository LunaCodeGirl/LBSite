<div class="tt-share clearfix">
<?php
global $ttso;
$blog_retweet = $ttso->st_blog_retweet;
$blog_fb_like = $ttso->st_blog_fb_like;
$blog_pinterest = $ttso->st_blog_pinterest;

if($blog_retweet == "true") {
?>
<span class="retweet-share">
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<a href="http://twitter.com/share" class="twitter-share-button"
		data-url="<?php the_permalink(); ?>"
		data-via="<?php bloginfo('name'); ?>"
		data-text="<?php the_title(); ?>"
		data-related="<?php bloginfo('name'); ?>"
		data-count="horizontal">Tweet</a>
</span>

<?php } if($blog_fb_like == "true") { ?>

<span class="facebook-share">
	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink(get_The_ID())); ?>&amp;layout=button_count&amp;show_faces=false&amp;&amp;action=like&amp;colorscheme=light"></iframe>
</span>


<?php } if($blog_pinterest == "true") { ?>

<span class="pinterest-share">
<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal">Pin It</a>
</span>

<?php } ?>

</div><!-- END tt-share -->