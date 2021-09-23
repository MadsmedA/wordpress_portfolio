
<main>
    <?php get_header(); ?>

<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="case-study-layout">
                <div class="title">
                    <h1><em><?php the_title()?></em>*</h1>
                    <p><?php the_excerpt()?></p>
                </div>

                <div class="keyword-container">
                    <hr class="alt-line">
                    <h4>KEYWORDS</h4>
                    <div class="keywords">
                        <?php
                            $tags = get_the_tags();
                            $i = 0;
                            $colors = array('blue', 'green', "purple");

                            foreach($tags as $tag) {
                                echo "<h4><em class='$colors[$i]'>$tag->name</em></h4>";
                                $i += 1;
                            }  
                        ?>
                    </div>
                    <hr class="alt-line">
                </div>
                <div class="description">
                    <?php the_content();?>
                </div>
            </div>
            <?php
            
        }
    }

?>

    <?php get_footer(); ?>
</main>
