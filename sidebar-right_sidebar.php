  <style>

   #announcement_movies, #advertising_space_right{
   	background: #807480;
   	width: auto;
   	height: 40%;
   	margin-bottom: 5px;
   	margin-top: auto;
   	margin-right: auto;
   	margin-left: auto;
   	text-align: center;
   }

   #serch{
    height: 5%;
    padding-top: 4%;
    /*width: auto;*/
    text-align: center;
   }

  </style>






	<div id="serch">
    <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'right_sidebar' ); ?>
    <?php endif; ?>



	</div>
	<div id="announcement_movies">
		<h3>announcement_space</h3>
	</div>
	<div id="advertising_space_right">
		<h3>advertising_space</h3>
	</div>




