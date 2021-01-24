<?php get_header(); ?>


<div id="wrap_0">
	<aside class="sidebar" id="left_sidebar">
			<?php get_sidebar('left_sidebar'); ?>	
	</aside>

	<main id="content" class="main">
		<article id="post-<?php the_ID(); ?>" class="animate-article">
			<div id="box_content">
				<div class="entry-content">
					<?php 
						$arr_Date_Film = get_post_meta( $post->ID );
						$arr_media = get_attached_media('image');
					?>
					<div id="box_title"> 
						<h2 class="entry-title"> 
							<?php  echo $arr_Date_Film['Title'][0]; ?> 
						</h2>
					</div>
					<div id="box_posters">
						<?php 
							$count_posters = 1;		// для ограничения кол-во выводимых постеров
							foreach ($arr_media as $key => $value) {
								$count_posters ++;
								echo('<img src="'.wp_get_attachment_image_url($arr_media[$key]->ID, 'size-for-posters').'" class="poster" alt="#" />');
								if ($count_posters > 2) {
									break;
								}
							}
						?>
					</div>
					<div id="box_annotation">box_annotation</div>
					<div id="box_player">
						<?php
							echo $arr_Date_Film['Plear_films'][0];
						?>
					</div>
					<div id="box_film_information">
						<div class="str_box"><p class="box-film-information">В ролях: </p><span><?php  echo $arr_Date_Film['Actors'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Жанр:</p>	<span><?php  echo $arr_Date_Film['Genre'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Режисёры:</p>	<span><?php  echo $arr_Date_Film['Director'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Продюсеры:</p>	<span><?php  echo $arr_Date_Film['Producer'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Год:</p>	<span><?php  echo $arr_Date_Film['ProductionYear'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Сценарий:</p>	<span><?php  echo $arr_Date_Film['Scenario'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Продолжительность:</p>	<span><?php  echo $arr_Date_Film['Duration'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Премьера в мире:</p>	<span><?php  echo $arr_Date_Film['WorldPremiere'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Страна:</p>	<span><?php  echo $arr_Date_Film['Country'][0]; ?></span></div>
						<div class="str_box"><p class="box-film-information">Бюджет:</p>	<span><?php  echo $arr_Date_Film['CashFilm'][0]; ?></span></div>
					</div>


				</div><!-- .entry-content -->
			</div><!-- box_content -->
		</article><!-- #post-## -->

		<div id="box_comment">box_comment</div>

	</main>

	<aside class="sidebar" id="right_sidebar">
			<?php get_sidebar('right_sidebar'); ?>
	</aside>
</div>	

<?php get_footer(); ?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
