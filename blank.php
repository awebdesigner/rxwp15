<?php 
/* Template Name: No Sidebar */
get_header(); ?>
<!--// Start the content container -->
<div class="row">
<div class="col-md-12">
<?php /* Page content */
	while(have_posts()): the_post();
	the_content();
	endwhile;
?>
</div>
</div>
<?php get_footer(); ?>