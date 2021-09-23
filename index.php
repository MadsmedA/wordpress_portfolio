<main>  
    <?php get_header(); ?>

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>

            <a href="<?php the_permalink() ?>"><h1><?php the_title()?></h1></a>
            <?php
            // the_tags();
        }
    }

?>

    <?php get_footer();?>
</main>
