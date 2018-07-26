</div>
</div>
</div>
<div id="footer" class="<?php if(get_theme_mod('gsafari_wide')==1){ echo 'container'; }else{ echo 'container-fluid'; } ?>">
 <div class="row">
 <div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
	<div class="col-sm-6">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1')): endif; ?>
	</div>
	<div class="col-sm-6">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2')): endif; ?>
	</div>
	</div>
</div>
		<div class="row">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
			<div class="col-sm-12">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3')): endif; ?>
			</div>
			</div>
		</div>
		<div class="row">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
			<div class="col-sm-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4')): endif; ?>
			</div>
			<div class="col-sm-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5')): endif; ?>
			</div>
			<div class="col-sm-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-6')): endif; ?>
			</div>
			<div class="col-sm-3">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-7')): endif; ?>
			</div>
			</div>
		</div>
		<div class="row">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
			<div class="col-sm-6">
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
			</div>
			<div class="col-sm-6">
			</div>
		</div>
		</div>
	</div>
<?php if(get_theme_mod('gsafari_designer')): ?>
<p align="center">
Design by <a href="<?php echo get_theme_mod('gsafari_designerlink'); ?>" target="_blank" rel="nofollow"><?php echo get_theme_mod('gsafari_designer'); ?></a>
</p>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>