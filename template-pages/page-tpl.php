
<?php 
	/**
	 * Template Name: Page Template
	 *
	 */
?>
<?php 	get_header(); ?>


<?echo('+++++++++++   ' . the_ID());?>


<aside>
	<div id="left_sidebar">	 
		<?php get_sidebar('left_sidebar'); ?>	
	</div>
</aside>

<main>

	<?php 
		$args = array(
				'post_type' => 'any',
				'posts_per_page' => -1
				);
		$arr_posts = get_posts($args);
		foreach ($arr_posts as $post) { 
			$src_img = get_rnd_img_post($post);	
	?>		
			<article>
				<div class="title_article">
					<a href="<?echo($post->guid)?>"><h2><?the_title()?></h2></a>

						<img src="<?echo($src_img)?>" alt="">
						

				</div>
			</article>
	<? } ?>

</main>

<aside>
	<div id="right_sidebar">	
		<?php get_sidebar('right_sidebar'); ?> 
	</div>
</aside>

<?php get_footer(); ?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
