<?php if(get_theme_mod('gsafari_top')==1): ?>
<!--.//Top bar -->
<div class="row" id="topbar">
<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!-- //Turn on centering or off -->
<div class="col-md-6">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('topbar-left')): endif; ?>
</div>
<div class="col-md-6">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('topbar-right')): endif; ?>
</div>
 </div>
</div>
<?php endif; ?>