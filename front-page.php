<?php get_header(); ?>
<?php if(get_theme_mod('gsafari_above_widgets')==1): ?>
<div class="contentbox">
<?php
	while(have_posts())
	{
		the_post();
		the_content();
	}
?>
</div>
<?php
	endif;
?>
<div class="row">
	<div class="col-md-6">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('half-1')): endif; ?>
	</div>
	<div class="col-md-6">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('half-2')): endif; ?>
	</div>
</div>
<div class="row">
	<div class="container">
	<div class="col-md-4">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('front-1')): endif; ?>
	</div>
	<div class="col-md-4">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('front-2')): endif; ?>
	</div>
	<div class="col-md-4">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('front-3')): endif; ?>
	</div>
	</div>
</div>
<div class="contentbox">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('front-bottom')): endif; ?>
</div>
<?php if(get_theme_mod('gsafari_above_widgets')==2): ?>
	<div class="contentbox">
<?php
	while(have_posts())
	{
		the_post();
		the_content();
	}
?>
</div>
<?php endif; ?>
<?php get_footer(); ?>