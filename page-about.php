<?php get_header('top'); ?>

<div class="box-profile">	
	<?php // THE LOOP

		while ( have_posts() ) : the_post();
			the_content(); 
		endwhile; // end of the loop.
	
	?>
</div>

<?php get_footer('profile'); ?>