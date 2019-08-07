<?php get_header(); ?>

 <main class="main main--sidebar">

 	<span class="php">tag.php</span>
				
	<h1><?php wp_title( '' ); ?></h1>
	<hr>

	<ul>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li class="mb-1">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p>By <?php the_author_posts_link(); ?> on <?php echo the_time('l, F jS, Y'); ?> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
			</p>
		</li>
	<?php endwhile; endif; ?>	
	</ul>

	<div class="paginacion">
		<?php previous_posts_link(); ?> 
		<?php next_posts_link(); ?>
	</div>   
</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>