<?php get_header();?>

<main class="main main--sidebar">

    <span class="php">index.php</span>

    <ul>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <li class="mb-4">
            <time><?php echo the_time('F jS Y'); ?> by <?php the_author_posts_link(); ?></time>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('smallest');?>">
            <?php endif;?>

            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>
        </li>
    <?php endwhile; endif;?>        
    </ul>
    
    <div class="paginacion">
        <?php previous_posts_link(); ?> 
        <?php next_posts_link(); ?>
    </div>
</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer();?>