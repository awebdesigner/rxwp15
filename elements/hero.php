<?php
if(get_theme_mod('gsafari_hero')==1): ?>
<!--// Hero section -->
<div class="row" id="hero">
	<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!--// Turn on centering div -->
		<?php if(!function_exists('dynamic_sidebar') or !dynamic_sidebar('gsafarihero')): endif; ?>
	</div>
</div>
<?php elseif(get_theme_mod('gsafari_hero')==2 && is_front_page() || is_home()): ?>
<!--// Hero section -->
<div class="row" id="hero">
	<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!--// Turn on centering div -->
		<?php if(!function_exists('dynamic_sidebar') or !dynamic_sidebar('gsafarihero')): endif; ?>
	</div>
</div>
<?php endif;?>