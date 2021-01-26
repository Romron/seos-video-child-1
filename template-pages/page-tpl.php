
<?php
	/*
	Template Name: Главная страница
	*/
?>

<?php get_header(); ?>


<div id="wrap_0">
	<aside class="sidebar" id="left_sidebar">
			<?php get_sidebar('left_sidebar'); ?>	
	</aside>

	<div id="main_content" >
		
		<?php 
			$args = array(
				'post_type' => 'films',
				'posts_per_page' => -1
				);
			$arr_posts = get_posts($args);
			foreach ($arr_posts as $post) { 
				$src_img = get_rnd_img_post($post);	
		?>
				<article id="post-<?php the_ID(); ?>" class="animate-article">
				<!-- <article id="#" class="page_article"> -->
					<div id="box_content">
						<div class="entry-content">
							<div class="title_article">
								<a href="<?echo($post->guid)?>"><h2><?the_title()?></h2></a>
								<img src="<?echo($src_img)?>" alt="">
							</div>
						</div><!-- .entry-content -->
					</div><!-- box_content -->
				</article><!-- #post-## -->
		<?  } ?>

	</div>

	<aside class="sidebar" id="right_sidebar">
			<?php get_sidebar('right_sidebar'); ?>
	</aside>
</div>	

<?php get_footer(); ?>




<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
