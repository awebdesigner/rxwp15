		<div class="row" id="menubar">
		<nav class="navbarbg navbar navbar-default">
		<div <?php if(get_theme_mod('gsafari_wide')==3):?>class="container"<?php endif; ?>>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
		<?php if(get_theme_mod('gsafari_logo_position')==3){
		$logourl = get_theme_mod('gsafari_logo');
		if(!empty($logourl)): ?>
			  <a  class="navbar-brand" href="<?php bloginfo('url'); ?>"><img style="width: 100%; max-height:100px;" src="<?php echo $logourl; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
		<?php else:?>
			  <a  class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>   
		<?php endif; }?>
          </div>
		  <div id="navbar" class="navbar-collapse collapse">
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary-menu',
                'depth'             => 2,
                'container'         => 'ul',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</div>
		</div>
		</nav>
		</div>