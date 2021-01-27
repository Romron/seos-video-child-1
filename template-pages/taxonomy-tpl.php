
<?php
	/*
	Template Name: Страница таксономий
	*/
?>

<?php get_header(); ?>

<div id="wrap_0">
	<aside class="sidebar" id="left_sidebar">
			<?php get_sidebar('left_sidebar'); ?>	
	</aside>

	<div id="main_content" >
		
		<? 	
			$term_curent_tax = get_queried_object(); 
				$args = array(
					  'name' => $term_curent_tax->taxonomy
					);
			$output = 'objects';
			$arr_taxonomy = get_taxonomies( $args, $output );
			foreach ($arr_taxonomy as $taxonomy) {}
		?>
		<header id="header_main_content">
			<h1 id="title_main_content"><? echo $taxonomy->description;  echo $term_curent_tax->name ?></h1>
		</header>

		<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
		<?php 	$src_img = get_rnd_img_post($post);	?>
				<article id="post-<?php the_ID(); ?>" class="animate-article">
					<div id="box_content">
						<div class="entry-content">
							<div class="title_article">
								<a href="<?echo($post->guid)?>"><h2><?the_title()?></h2></a>
								<img src="<?echo($src_img)?>" alt="">
							</div>
						</div><!-- .entry-content -->
					</div><!-- box_content -->
				</article><!-- #post-## -->
			<?php } } else { ?>
				<p>По вашему запросу фильмов не найдено</p>
			<?php } ?>

	</div>
	<aside class="sidebar" id="right_sidebar">
			<?php get_sidebar('right_sidebar'); ?>
	</aside>
</div>	

<?php get_footer(); ?>






<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
