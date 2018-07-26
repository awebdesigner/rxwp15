<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="<?php if(get_theme_mod('gsafari_wide')==1){ echo 'container'; }else{ echo 'container-fluid'; }?>">
	<?php get_template_part('elements/top-section'); ?>
	<?php if(get_theme_mod('gsafari_navpos')==1): ?>
	<!--.//Navagation position 1 -->
	<?php get_template_part('elements/navigation'); ?>
	<?php endif; ?>
	<?php get_template_part('elements/header-styles'); ?>
	<?php if(get_theme_mod('gsafari_navpos')==2): ?>
	<!--.//Navagation position 2 -->
	<?php get_template_part('elements/navigation'); ?>
	<?php endif; ?>
	<?php get_template_part('elements/hero'); ?>	
	<?php if(get_theme_mod('gsafari_navpos')==3): ?>
	<!--.//Navagation position 3 -->
	<?php get_template_part('elements/navigation'); ?>
	<?php endif; ?>
<div  class="row" id="bodycontainer">
<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
<div class="col-md-12">
<div class="bodyheading">
	<div class="contentbox">
<?php if(is_archive()): ?>
		<h1><?php single_cat_title(__("In category >","safari")); ?></h1>
		<?php endif; ?>
		</div>
	</div>
</div>