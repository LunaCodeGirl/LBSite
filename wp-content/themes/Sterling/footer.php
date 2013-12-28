</section><!-- END content-container -->
<?php
global $ttso;
$truethemes_scrolltoplink = $ttso->st_scrolltoplink;
$truethemes_scrolltoptext = stripslashes($ttso->st_scrolltoptext);
$truethemes_footer_columns = $ttso->st_footer_columns;
$truethemes_footer_callout = $ttso->st_footer_callout;
$truethemes_footer_callout_text = stripslashes($ttso->st_footer_callout_text);
$truethemes_footer_callout_button = stripslashes($ttso->st_footer_callout_button);
$truethemes_footer_callout_button_url = $ttso->st_footer_callout_button_url;
$truethemes_copyright = stripslashes($ttso->st_footer_copyright);
$blog_pinterest = $ttso->st_blog_pinterest;
$truethemes_jslide_effect = $ttso->st_jslide_effect;
$truethemes_jslide_speed = $ttso->st_jslide_speed;
$truethemes_jslide_delay = $ttso->st_jslide_delay;
$truethemes_jslide_randomize = $ttso->st_jslide_randomize;
$truethemes_jslide_pause_hover = $ttso->st_jslide_pause_hover;
?>
<?php if ($truethemes_footer_callout == "true") { ?>
<div class="footer-callout clearfix">
		<div class="center-wrap tt-relative">
			<div class="footer-callout-content">
			<?php echo $truethemes_footer_callout_text; ?>
			</div><!-- END footer-callout-content -->
			<div class="footer-callout-button">
			<a href="<?php echo $truethemes_footer_callout_button_url; ?>" class="large green button"><?php echo $truethemes_footer_callout_button; ?></a>
			</div><!-- END footer-callout-button -->
		</div><!-- END center-wrap --> 
</div><!-- END footer-callout -->
<?php } //end footer callout ?>


<footer>
	<div class="center-wrap tt-relative">
		<div class="footer-content clearfix"> 
    <?php add_filter('pre_get_posts','wploop_exclude');
if (is_page_template('page-template-under-construction.php')) { ?>

<div class="construction-default-one">
<?php dynamic_sidebar("First Under Construction Column"); ?>
</div><!-- END construction-default-one -->

<div class="construction-default-two">
<?php dynamic_sidebar("Second Under Construction Column"); ?>
</div><!-- END construction-default-two -->

<div class="construction-default-three">
<?php dynamic_sidebar("Third Under Construction Column"); ?>
</div><!-- END construction-default-three -->

<?php } else if ($truethemes_footer_columns == "Default-Layout") { ?>

<div class="footer-default-one">
<?php dynamic_sidebar("First Footer Column"); ?>
</div><!-- END footer-default-one -->

<div class="footer-default-two">
<?php dynamic_sidebar("Second Footer Column"); ?>
</div><!-- END footer-default-two -->

<div class="footer-default-three">
<?php dynamic_sidebar("Third Footer Column"); ?>
</div><!-- END footer-default-three -->

<?php }else{ ?>

<?php $footer_columns = range(1,$truethemes_footer_columns);$footer_count = 1;$sidebar = 7;
foreach ($footer_columns as $footer => $column){
$class = ($truethemes_footer_columns == 1) ? '' : '';
$class = ($truethemes_footer_columns == 2) ? 'one_half' : $class;
$class = ($truethemes_footer_columns == 3) ? 'one_third' : $class;
$class = ($truethemes_footer_columns == 4) ? 'one_fourth' : $class;
$class = ($truethemes_footer_columns == 5) ? 'one_fifth' : $class;
$class = ($truethemes_footer_columns == 6) ? 'one_sixth' : $class;
?>
<div class="<?php echo $class; ?>"><?php dynamic_sidebar($sidebar) ?></div><?php $footer_count++; $sidebar++; } ?>
<?php } ?>	
    </div><!-- END footer-content -->
	</div><!-- END center-wrap -->

<?php if (!is_page_template('page-template-under-construction.php')) { ?> 
<div class="footer-copyright clearfix">
	<div class="center-wrap clearfix">
    	<div class="foot-copy"><p><?php echo $truethemes_copyright; ?></p></div><!-- END foot-copy -->
        
        <?php if ($truethemes_scrolltoplink == "true") { ?>
        <a href="#" id="scroll_to_top" class="link-top"><?php echo $truethemes_scrolltoptext ?></a>
        <?php } ?>
        
        <?php if (has_nav_menu('Footer Menu')) { ?>
        <ul class="footer-nav">
		<?php wp_nav_menu( array('container' => false, 'theme_location' => 'Footer Menu','depth' => 0 )); ?>
		</ul>
        <?php } ?>
	</div><!-- END center-wrap -->
</div><!-- END footer-copyright -->	
<?php } ?>

<div class="shadow top"></div>
<div class="tt-overlay"></div>
</footer>

<?php wp_footer(); ?>

<?php if (is_page_template('page-template-home-jquery.php') || is_page_template('page-template-home-jquery-sidebar.php')) { ?>
<?php echo '<script type="text/javascript">
// Homepage slider setup. Issued in the footer to accept user-set variables.
jQuery(document).ready(function(){
	jQuery(\'#slides\').slides({
		  preload: false,
		  //preloadImage: \'http://files.truethemes.net/themes/sterling-wp/ajax-loader.gif\',
		  autoHeight: true,
		  effect: \''.$truethemes_jslide_effect.'\',
		  slideSpeed: '.$truethemes_jslide_speed.',
		  play: '.$truethemes_jslide_delay.',
		  randomize: '.$truethemes_jslide_randomize.',
		  hoverPause: '.$truethemes_jslide_pause_hover.',
		  pause: '.$truethemes_jslide_delay.',
	  });
});
</script>';?>
<?php } ?>

<?php if (is_home() || is_single() || is_archive() && $blog_pinterest == "true") { ?>
<script type="text/javascript">
(function() {
    window.PinIt = window.PinIt || { loaded:false };
    if (window.PinIt.loaded) return;
    window.PinIt.loaded = true;
    function async_load(){
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "http://assets.pinterest.com/js/pinit.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    }
    if (window.attachEvent)
        window.attachEvent("onload", async_load);
    else
        window.addEventListener("load", async_load, false);
})();
</script>
<?php } ?>
</body>
</html>