
<?php 
	/**
	 * Template Name: Page Template
	 *
	 */
?>
<?php 	get_header(); ?>

<aside>
	<div id="left_sidebar">	 
		<?php get_sidebar('left_sidebar'); ?>	
	</div>
</aside>

<main>

	<?php 
		global $post;

		$args = array(
				'post_type' => 'any',
				'posts_per_page' => -1
				);
		$arr_posts = get_posts($args);
		foreach ($arr_posts as $post) { 
			setup_postdata($post);	
			$arr_media = get_attached_media('image',$post->ID);	
	?>		
			<article>
				<div class="title_article">
					<h2><?the_title()?></h2>

					<?  foreach ($arr_media as $id_attach => $arr_date_attach) { ?>
						
						<img src="<?echo(wp_get_attachment_image_url($arr_date_attach->ID,'size-for-posters'))?>" alt="">
						
					<?	}	?>

				</div>
			</article>
	<?php } ?>

</main>





<aside>
	<div id="right_sidebar">	
		<?php get_sidebar('right_sidebar'); ?> 
	</div>
</aside>

<?php get_footer(); ?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
