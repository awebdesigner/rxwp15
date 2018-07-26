<?php  get_header();	?>

	<div class="col-md-9">
	<div class="contentwrapper">
<?php while(have_posts()):
		the_post();
?>
	<div class="contentbox">
	<div class="ucota-item">
<?php
		if(has_post_thumbnail()){ ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium',array('class'=>'img-responsive')); ?></a>
	<?php }?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php
		the_excerpt();
?><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"> More... </a>	
</div>
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
				<?php if(!function_exists('dynamic_sidebar')  || !dynamic_sidebar('right')): endif; ?>
	</div>
<?php
get_footer();
?>