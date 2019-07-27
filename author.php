<?php get_header(); ?>

<main class="main main--sidebar">

   <span class="php">author.php</span>

		<?php
			$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
		?>

		<div>	
			<?php echo get_avatar( $curauth->ID ); ?>
			<h1><?php echo $curauth->display_name; ?></h1>
			<p><?php echo $curauth->user_description; ?></p>
			<p><?php echo $curauth->user_email; ?></p>	
			<p><a href="https://pixelius.es"><?php echo $curauth->user_url; ?></a></p>	
		</div>			    			    

	    <h3>Recent Posts</h3>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<ul>
			<li class="mb-1"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo the_time('l, F jS, Y'); ?> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></p></li>

		<?php endwhile; ?>
		</ul>
		<?php else: ?>
			<p>No posts :(</p>
		<?php endif; ?>

		<div class="paginacion">
			<?php previous_posts_link(); ?> 
			<?php next_posts_link(); ?>
		</div>    

</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>