<?php
// require_once("function.php");
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');



	// $args = array(
	// 	'post_type' => 'films',
	// 	'posts_per_page' => -1
	// 	);

	$args = array(
	    'post_type' => 'films',
	    'tax_query' => array(
	        array(
	            'taxonomy' => 'Genre',
	            'field'    => 'name',
	            'terms'    => 'boevik',
	        ),
	    ),
	);

	$arr_posts = get_posts($args);
	echo '<pre>'; print_r($arr_posts); echo '</pre>';



?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>