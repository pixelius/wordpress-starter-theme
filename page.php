<?php get_header();?>

<main class="main">

    <span class="php">page.php</span>

    <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <h1><?php the_title();?></h1>
        <hr>
        <?php the_content();?>

    <?php endwhile; endif;?>    

</main>

<?php get_footer();?>