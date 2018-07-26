<?php
namespace inc\Theme\Styles;

	class Generator {

		public function __construct() {

			add_action('wp_head', function() {

					$bodybg	= get_theme_mod('gsafari_body_bg');
					$pcolor = get_theme_mod('gsafari_pcolor');
					$scolor = get_theme_mod('gsafari_scolor');
					$bgcolor = get_theme_mod('gsafari_bgcolor');
					$bgimg = get_theme_mod('gsafari_bgimg');
					$font = get_theme_mod('gsafari_font');
					$headerbg = get_theme_mod('gsafari_hdbg');
					$herobg	= get_theme_mod('gsafari_herobg');
					$ftbg = get_theme_mod('gsafari_ftbg');
					$topbg = get_theme_mod('gsafari_topbg');
					$navbg = get_theme_mod('gsafari_navbg');
					$navitembg = get_theme_mod('gsafari_navitembg');
					$navitemhvrbg = get_theme_mod('gsafari_navitemhvrbg');
				?>
				<style type="text/css">
					body{
						background-color: <?php echo !empty($bgcolor) ? $bgcolor: '#cccccc';?>;
						<?php if (!empty($bgimg)): ?>
							background-image: url('<?php echo $bgimg; ?>');
						<?php endif; 
						
							if(!empty($pcolor)): ?>
								color: <?php echo $pcolor; ?> !important;
						<?php endif; ?>
					}
					<?php if(!empty($scolor)): ?>
					h1,h2,h3,h4,h5,h6{
						color: <?php echo $scolor; ?> !important;
					}
					<?php endif; ?>
					<?php if(!empty($topbg)): ?>
					#topbar{
						background: <?php echo $topbg; ?> !important;	
					}
					<?php endif; ?>
					<?php if(!empty($navbg)): ?>
					.navbarbg{
						background: <?php echo $navbg; ?> !important;	
					}
					<?php endif; ?>
					<?php if(!empty($navitembg)): ?>
						.navbar-default .navbar-nav > li > a{
							color: #fff;
							background-color:<?php echo $navitembg;?>;
						}
					<?php endif; ?>
					<?php if(!empty($navitemhvrbg)): ?>
						.navbar-default .navbar-nav > li.active > a,.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
						color: #fff;
						background-color: <?php echo $navitemhvrbg; ?>;
					}
					<?php endif; ?>
					.socialmenu .navbar-nav > li.icon > a{
						background: <?php echo $scolor; ?> !important;
						}
			
					<?php if(!empty($bodybg)): ?>
					#bodycontainer{
						background-color: <?php echo $bodybg; ?>;
					}
					<?php endif; if(!empty($headerbg)): ?>
					#header{
						background-color: <?php  echo $headerbg; ?>;
					}
					<?php endif; if(!empty($ftbg)):?>
					#footer{
						background: <?php echo $ftbg; ?>;
					}
					<?php endif; ?>
				</style>
				<?php 
			});
		}
	}