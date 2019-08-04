<?php get_header();?>

<main class="main main--sidebar">

    <span class="php">single.php</span>

    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <article>

        <time><?php echo the_time('F jS Y'); ?> by <?php the_author_posts_link(); ?></time>
        <h1><?php the_title();?></h1>
        <hr>

        <div class="mb-1">
            <p>Post Category: <?php the_category( ', ' );?></p>
            <p>Post Tag: <?php the_tags('', ', ');?></p>
        </div>

        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('largest');?>">
        <?php endif;?>

        <?php the_content();?>
        
    <?php endwhile; endif;?>
    </article>

    <?php comments_template(); ?>
</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer();?>