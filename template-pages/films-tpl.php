<?php get_header(); ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('animate-article'); ?>>

	<?php $seos_video = get_post_meta($post->ID, 'my_seos_video_name', true); 
		if ($seos_video) {
			echo '<div class="seos-video">' . esc_attr($seos_video) . '</div>';
	} ?>
	
		<?php if ( is_front_page() or is_home() or is_category() ) : ?>

		<div class="ex-right"><?php the_excerpt(); ?> </div>
		
		<?php else : ?>
	<div id="box_content">
	<div id="left_sidebar">	
		<?php get_sidebar('left_sidebar'); ?>	
	</div>

		<div class="entry-content">
			
			<div id="box_trailer">
				<!-- box_trailer -->

				<?php echo get_post_meta($post->ID, 'box_trailer_', true); ?>

			</div>
			<div id="box_annotation">box_annotation</div>
			<div id="box_posters">box_posters</div>
			<div id="box_player">


			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'seos-video' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seos-video' ),
					'after'  => '</div>',
				) );
			?>

			</div>
			<div id="box_film_information">box_film_information</div>
			<div id="box_comment">box_comment</div>



		</div><!-- .entry-content -->
	
	

	<div id="right_sidebar">	
		<?php get_sidebar('right_sidebar'); ?>
	</div>
		
</div><!-- box_content -->

	<?php endif; ?>


</article><!-- #post-## -->


<?php get_footer(); ?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
