





<div id="filters">
	<!-- <h3>filters</h3> -->

  <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
  <?php dynamic_sidebar( 'left_sidebar' ); ?>
  <?php endif; ?>



</div>
<div id="advertising_space_left">
	<h3>advertising_space</h3>


<form action="<?php bloginfo( 'url' ); ?>" method="get">
<input  type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
<input type="submit" value="Найти"/>
</form>


  
</div>
<div id="similar_movies">
	<h3>advertising_space</h3>
</div>




