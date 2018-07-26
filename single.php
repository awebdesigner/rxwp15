<?php get_header(); ?>
	<div class="col-md-9">
		<div class="contentwrapper">
			<div class="contentbox">
				<?php
					while(have_posts())
				{
						the_post();
?>
<h1><?php the_title(); ?></h1>
<?php
$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
 ?>
<img src="<?php echo $thumb_url_array[0]; ?>" alt="<?php echo implode("-",explode(" ",the_title_attribute('echo=0'))); ?>" class="img-responsive" />
				<?php	
					the_content();
					} 
				?>
			</div>

		</div>
	</div>
	<div class="col-md-3">
				<?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('right')): endif; ?>
	</div>
<?php get_footer(); ?>