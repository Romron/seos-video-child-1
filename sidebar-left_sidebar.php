

  <style>


   #filters, #advertising_space_left, #similar_movies{
   	background: #807480;
   	width: auto;
   	height: 31%;
   	margin-bottom: 5px;
   	margin-top: auto;
   	margin-right: auto;
   	margin-left: auto;
   	text-align: center;
   }


  </style>


<div id="filters">
	<!-- <h3>filters</h3> -->

  <?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag"]' ); ?>




  <?php //if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
  <?php //dynamic_sidebar( 'left_sidebar' ); ?>
  <?php //endif; ?>



</div>
<div id="advertising_space_left">
	<h3>advertising_space</h3>
</div>
<div id="similar_movies">
	<h3>advertising_space</h3>
</div>




