		<?php if(get_theme_mod('gsafari_logo_position')==1): ?>
		<!--.//Header style 1 -->
		<div class="row" id="header">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!--// Turn on centering div -->
		<div class="col-xs-6 col-sm-4">
		<?php 
		$logourl = get_theme_mod('gsafari_logo');
		if(!empty($logourl)): ?>
			 <a  href="<?php bloginfo('url'); ?>"><img src="<?php echo $logourl; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
		<?php else:?>
			  <a  href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>   
		<?php endif; ?>
			</div>
			<div class="col-sm-4">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-1')): endif;?>
			</div>
			<div class="col-xs-6 col-sm-4">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-2')): endif;?>

<nav class="navbar navbar-social">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#social" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
			  <span class="socialmenu">Social</span>
            </button>
          </div>
		  <div id="social" class="navbar-collapse collapse">
          <?php
            wp_nav_menu( array(
                'menu'              => 'social',
                'theme_location'    => 'social-menu',
                'depth'             => 2,
                'container'         => 'ul',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
         ?>
		</div>
</nav>

			</div>
		</div><!--// Close centering div -->
		</div>
		<?php endif; ?>
		<?php if(get_theme_mod('gsafari_logo_position')==2): ?>
		<!--// Header style 2 -->
		<div class="row" id="header">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!--// Turn on centering div -->
			<div class="col-sm-4">
				<div class="callstoaction">
			<?php if(!empty(get_theme_mod('gsafari_phone'))){
				echo '<span class="fa fa-phone"></span> Call us '.get_theme_mod('gsafari_phone').' | ';
			}
			 if(!empty(get_theme_mod('gsafari_action'))){?>
				<a class="btn btn-book" href="<?php echo get_theme_mod('gsafari_action_url'); ?>"><?php echo get_theme_mod('gsafari_action'); ?></a>											
			<?php } ?>
				</div>
			</div>
			<div class="col-sm-4">
		<?php 
		$logourl = get_theme_mod('gsafari_logo');
		if(!empty($logourl)): ?>
			 <p align="center"> <a  href="<?php bloginfo('url'); ?>"><img  src="<?php echo $logourl; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a></p>
		<?php else:?>
			  <a  href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>   
		<?php endif; ?>
		</div>
		<div class="col-sm-4">
		<div id="pull-right">
		<nav id="socialmedia" class="navbar">
            <?php
            wp_nav_menu( array(
                'menu'              => 'social',
                'theme_location'    => 'social-menu',
                'depth'             => 2,
                'container'         => 'ul',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</nav>
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-2')): endif;?>
		</div>
		</div>
		</div> <!--// Close centering div -->
		</div>
		<?php endif; ?>
		<?php if(get_theme_mod('gsafari_logo_position')==4): ?>
		<!-- Header style 3 -->
		<div class="row" id="header">
			<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>> <!--// Turn on centering div -->
			<div class="col-sm-6">
			<?php if(!empty(get_theme_mod('gsafari_action'))){?>
			<a href="<?php echo get_theme_mod('gsafari_action_url'); ?>"><?php echo get_theme_mod('gsafari_action'); ?>	</a>										
			<?php } ?>
			</div>
			<div class="col-sm-6">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-2')): endif;?>
			</div>
			</div> <!--// Close centering div -->
		</div>
		<?php endif; ?>