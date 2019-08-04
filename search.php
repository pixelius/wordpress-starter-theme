<?php get_header(); ?>

<main class="main main--sidebar">
	<span class="php">search.php</span>
	
	<h1><?php wp_title( '' ); ?></h1>
	<hr>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				    
		<div class="mb-1">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
					
	<?php endwhile; else: ?>

		<p>No results :(</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
			
	<div class="paginacion">
		<?php previous_posts_link(); ?> 
		<?php next_posts_link(); ?>
	</div>
</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>