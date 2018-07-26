<?php get_header(); ?>
<!--// Start the content container -->
	<div class="col-md-9">
		<div class="contentwrapper">
			<div class="contentbox">
				<?php
				while(have_posts()):
						the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php	
					
						the_content();
					endwhile;
				?>
			</div>

		</div>
	</div>
	<div class="col-md-3">
				<?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('right')): endif; ?>
	</div>
<?php get_footer(); ?>