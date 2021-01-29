



  <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
  <?php dynamic_sidebar( 'left_sidebar' ); ?>
  <?php endif; ?>

	<?
		$args = array(
			'public'   => true,
			'_builtin' => false
			);
		$output = 'object';
		$list_taxonomys = get_taxonomies($args,$output);
	?>

<div id="filters">
	<nav class="menu-films">
		<div class="menu-films__title">
			<h3>Подбор фильмов</h3>
		</div>
			<!-- Меню подбора фильмов -->
			<? foreach ($list_taxonomys as $taxonomy) { 
					if (($taxonomy->label == 'Актёры') || ($taxonomy->label == 'Режиссеры') || ($taxonomy->label == 'Сценаристы') || ($taxonomy->label == 'Директора')){ 
						continue;}
			?>
					<ul class="ul-first-level">	
						<li class="ul-first-level__li-first-level">
							<h4 class="ul-first-level__li-first-level__h4">
								<?  echo($taxonomy->label)?>
							</h4>
							<? 
								$arr_terms = get_terms( $taxonomy->name, array("hide_empty" => false));
								foreach ($arr_terms as $obj_term) {
									$link_to_page_terms = get_term_link($obj_term->slug,$obj_term->taxonomy);
							?>	
							<ul class="ul-second-level">	 						
								<li class="ul-second-level__li-second-level">
									<a href="<?echo($link_to_page_terms)?>"><?echo($obj_term->name)?></a>
								</li>
							</ul>
							<? } ?>
						</li>
					</ul>
			<?	} ?>
			




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