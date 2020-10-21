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
		<?php $arr_Date_Film = get_post_meta( $post->ID ); ?>

			<div id="box_title"> <h2 class="entry-title">'<?php  echo $arr_Date_Film['Title'][0]; ?> </h2></div>
			<div id="box_posters">box_posters</div>
			<div id="box_annotation">box_annotation</div>
			<div id="box_player">
				<?php
					$plear_films = get_post_meta( $post->ID, $Id_kinopisk, true );
					echo $plear_films['Id_kinopisk'][0];
				?>
			</div>
			<div id="box_film_information">
			
				<p class="box-film-information">В ролях: </p><span><?php  echo $arr_Date_Film['Actors'][0]; ?></span>
				<p class="box-film-information">Жанр:</p>	<span><?php  echo $arr_Date_Film['Genre'][0]; ?></span>
				<p class="box-film-information">Режисёры:</p>	<span><?php  echo $arr_Date_Film['Director'][0]; ?></span>
				<p class="box-film-information">Продюсеры:</p>	<span><?php  echo $arr_Date_Film['Producer'][0]; ?></span>
				<p class="box-film-information">Год:</p>	<span><?php  echo $arr_Date_Film['ProductionYear'][0]; ?></span>
				<p class="box-film-information">Сценарий:</p>	<span><?php  echo $arr_Date_Film['Scenario'][0]; ?></span>
				<p class="box-film-information">Продолжительность:</p>	<span><?php  echo $arr_Date_Film['Duration'][0]; ?></span>
				<p class="box-film-information">Премьера в мире:</p>	<span><?php  echo $arr_Date_Film['WorldPremiere'][0]; ?></span>
				<p class="box-film-information">Страна:</p>	<span><?php  echo $arr_Date_Film['Country'][0]; ?></span>
				<p class="box-film-information">Бюджет:</p>	<span><?php  echo $arr_Date_Film['CashFilm'][0]; ?></span>

			</div>
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
