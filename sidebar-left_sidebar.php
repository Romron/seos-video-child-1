



  <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
  <?php dynamic_sidebar( 'left_sidebar' ); ?>
  <?php endif; ?>


<div id="filters">
	<h3>Подбор фильмов</h3>


	<?

		$args = array(
			'public'   => true,
			'_builtin' => false
		);
		$output = 'names';
		$list_taxonomys = get_taxonomies($args,$output);
		foreach ($list_taxonomys as $taxonomy) {
			$arr_terms = get_terms( $taxonomy, array("hide_empty" => false));

		}





	?>


	<nav class="menu-films">
		<ul>
			<?

			foreach ($arr_terms as $obj_term) {
				$link_to_page_terms = get_term_link($obj_term->slug,$obj_term->taxonomy);
				// echo '<pre>'; print_r($link_to_page_terms); echo '</pre>';
			?>	
				<li><a href="<?echo($link_to_page_terms)?>"><?echo($obj_term->slug)?></a></li>

			<?
			}
			?>
		</ul>

	</nav>


</div>
<div id="advertising_space_left">
	<h3>advertising_space</h3>


  
</div>
<div id="similar_movies">
	<h3>advertising_space</h3>
</div>









<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>