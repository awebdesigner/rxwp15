<?php  get_header();	?>
<div class="row">
	<div class="col-md-9">
		<div class="contentwrapper">
<?php while(have_posts()):
		the_post();
?>
	<div class="contentbox">
		<h1><?php the_title(); ?></h1>
<?php
		if(has_post_thumbnail()){
			the_post_thumbnail('medium');
		}
		the_excerpt();
?>
		<a href="<?php the_permalink(); ?>" ><?php __("Read more...","safaribridge"); ?></a>
	</div>
	<?php endwhile; ?>
			<div class="contentbox">
			<?php
			//Pagination
			the_posts_pagination( array(
							'prev_text'          => __( 'Previous ', 'safaribridge' ),
							'next_text'          => __( 'Next ', 'safaribridge' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safaribridge' ) . ' </span>',
						) );
			?>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="contentwrapper">
			<div class="contentbox">
				<?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('right')): endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>