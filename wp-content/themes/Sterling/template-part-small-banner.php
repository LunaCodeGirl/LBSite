<?php 
global $ttso;
$breadcrumbs = $ttso->st_breadcrumbs;

//searchbar
$global_searchbar = $ttso->st_global_searchbar;
$blog_searchbar = $ttso->st_blog_searchbar;
$results_searchbar = $ttso->st_results_searchbar;
$error_searchbar = $ttso->st_error_searchbar;

//banner title
$blog_title = stripslashes($ttso->st_blogtitle);
$results_title = stripslashes($ttso->st_results_title);
$error_title = stripslashes($ttso->st_404title);

//banner description
$blog_description = stripslashes($ttso->st_blogdescription);
$results_description = stripslashes($ttso->st_results_description);
$error_description = stripslashes($ttso->st_404description);

// per-page settings
$banner_title = get_post_meta($post->ID,'bannertitle',true);
$banner_search_bar = get_post_meta($post->ID,'banner_search',true);
$banner_description = get_post_meta($post->ID,'banner_description',true);
?>

<?php if (is_home() || is_single() || is_archive() ) { ?>


<div class="center-wrap<?php if($breadcrumbs != "true"){ echo ' banner-no-crumbs';} ?>">
<?php echo '<p class="page-banner-heading">'.$blog_title.'</p>';?>

<?php if ($blog_searchbar == "true") { ?>
<div id="banner-search">
<?php get_search_form(); ?>
</div><!-- END banner-search -->
<?php } else if($blog_description != '') {
echo '<p class="page-banner-description">'.$blog_description.'</p>';
}
?>



<?php if($breadcrumbs == "true"){ ?>
<div class="breadcrumbs"><?php $bc = new simple_breadcrumb; ?></div><!-- END breadcrumbs -->
<?php } ?>
</div><!-- END center-wrap -->

<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>



<?php } else if(is_404()) { ?>




<div class="center-wrap<?php if($breadcrumbs != "true"){ echo ' banner-no-crumbs';} ?>">
<p class="page-banner-heading"><?php echo $error_title; ?></p>


<?php if ($error_searchbar == "true") { ?>
<div id="banner-search">
<?php get_search_form(); ?>
</div><!-- END banner-search -->
<?php } ?>

<?php if ($error_searchbar == "false" && $error_description != "") { ?>
<p class="page-banner-description" id="banner-description-<?php the_ID(); ?>"><?php echo $error_description; ?></p>
<?php } ?>

<?php if($breadcrumbs == "true"){ ?>
<div class="breadcrumbs"><?php $bc = new simple_breadcrumb; ?></div><!-- END breadcrumbs -->
<?php } ?>
</div><!-- END center-wrap -->

<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>



<?php } elseif(is_search()) { ?>



<div class="center-wrap<?php if($breadcrumbs != "true"){ echo ' banner-no-crumbs';} ?>">
<p class="page-banner-heading"><?php _e('Search Results for', 'framework_localize') ?> "<?php the_search_query(); ?>"</p>


<?php if ($results_searchbar == "true") { ?>
<div id="banner-search">
<?php get_search_form(); ?>
</div><!-- END banner-search -->
<?php } ?>

<?php if ($results_searchbar == "false" && $results_description != "") { ?>
<p class="page-banner-description" id="banner-description-<?php the_ID(); ?>"><?php echo $results_description; ?></p>
<?php } ?>

<?php if($breadcrumbs == "true"){ ?>
<div class="breadcrumbs"><?php $bc = new simple_breadcrumb; ?></div><!-- END breadcrumbs -->
<?php } ?>
</div><!-- END center-wrap -->

<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>


<?php } else { ?>




<div class="center-wrap<?php if($breadcrumbs != "true"){ echo ' banner-no-crumbs';} ?>">
<?php if ($banner_title != "") { ?>
<p class="page-banner-heading"><?php echo $banner_title; ?></p><?php }else { ?>
<p class="page-banner-heading"><?php if(have_posts()) : while(have_posts()) : the_post(); ?><?php the_title(); ?><?php endwhile; endif; ?></p><?php } ?>


<?php if ($banner_search_bar == "yes" && $global_searchbar == "true") { ?>
<div id="banner-search">
<?php get_search_form(); ?>
</div><!-- END banner-search -->
<?php } ?>

<?php if ($banner_search_bar == "no" && $banner_description != "") { ?>
<p class="page-banner-description" id="banner-description-<?php the_ID(); ?>"><?php echo $banner_description; ?></p>
<?php } ?>

<?php if($breadcrumbs == "true"){ ?>
<div class="breadcrumbs"><?php $bc = new simple_breadcrumb; ?></div><!-- END breadcrumbs -->
<?php } ?>
</div><!-- END center-wrap -->

<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>
<?php } ?>