


<?php get_header(); ?>
 <h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
 <?php the_content(''); ?>
 <?php endwhile; else: ?>
 <p>Поиск не дал результатов.</p>
 <?php endif;?>
 <?php get_footer(); ?>
 


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php get_header(); ?>
