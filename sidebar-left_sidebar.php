



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
		$output = 'object';
		$list_taxonomys = get_taxonomies($args,$output);
	?>


	<nav class="menu-films">
		<ul>
			<!-- Меню подбора фильмов -->
				   <!-- -----  wp_nav_menu ------ -->
					<?php  
						// if (has_nav_menu('menu_left_sibear_top')) {
						// 	wp_nav_menu([
						// 		// 'menu' => 'Первое меню',
						// 		'theme_location' => 'menu_left_sibear_top',
						// 	]);
						// }
					?>
				   <!-- -----  wp_nav_menu ------ -->

			<? foreach ($list_taxonomys as $taxonomy) { ?>
					<ul>	<h4><?  echo($taxonomy->label)?></h4>
						<? $arr_terms = get_terms( $taxonomy->name, array("hide_empty" => false));
						foreach ($arr_terms as $obj_term) {
							$link_to_page_terms = get_term_link($obj_term->slug,$obj_term->taxonomy);
						?>	
							<li><a href="<?echo($link_to_page_terms)?>"><?echo($obj_term->slug)?></a></li>
						<? } ?>
						</ul>
			<?	} ?>
			












		</ul>

	</nav>


</div>
<div id="advertising_space_left">
	<h3>advertising_space</h3>

	<!-- Меню для тестов -->
		<?php  
			// if (has_nav_menu('menu_left_sibear_button')) {
			// 	wp_nav_menu([
			// 		// 'menu' => 'Второе меню',
			// 		'theme_location' => 'menu_left_sibear_button',
			// 		// 'container' => false,
			// 		// 'container' => 'div',

			// 	]);
			// }

		?>

  
</div>
<div id="similar_movies">
	<h3>advertising_space</h3>
</div>









<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>