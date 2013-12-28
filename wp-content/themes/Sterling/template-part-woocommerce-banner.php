<?php 
global $ttso;

//breadrcumbs
$woocommerce_breadcrumbs = $ttso->st_woocommerce_breadcrumbs;

//banner title
$woocommerce_title = $ttso->st_woocommerce_title;

//banner description
$woocommerce_description = $ttso->st_woocommerce_description;
?>

<div class="center-wrap<?php if($woocommerce_breadcrumbs != "true"){ echo ' banner-no-crumbs';} ?>">
<?php echo '<p class="page-banner-heading">'.$woocommerce_title.'</p>';?>

<?php if($woocommerce_description != '') {
echo '<p class="page-banner-description">'.$woocommerce_description.'</p>';
}
?>

<?php if($woocommerce_breadcrumbs == "true"){ ?>
<div class="breadcrumbs"><?php tt_woo_breadcrumbs(); ?></div><!-- END breadcrumbs -->
<?php } ?>
</div><!-- END center-wrap -->

<div class="shadow top"></div>
<div class="shadow bottom"></div>
<div class="tt-overlay"></div>