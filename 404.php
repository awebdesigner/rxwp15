<?php 
/* Template Name: 404 */
get_header(); ?>
<!--// Start the content container -->
	<div class="row">
		<div class="col-md-8">
		<?php /* Page content */
		while(have_posts()): the_post();
		the_title();
		?><hr/>
		<?php
			the_content();
			endwhile;
		?>
		</div>
		<div class="col-md-4">
			<?php if(!function_exists('dynamic_sidebar') or !dynamic_sidebar('right')): endif; ?>
		</div>
	</div>
<?php get_footer(); ?>