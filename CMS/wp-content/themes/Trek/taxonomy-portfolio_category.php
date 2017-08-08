
<?php get_header(); ?>

    <div class="main-container">
        <div class="main wrapper clearfix">
            <h1 class="pagetitle_article"><?php the_title(); ?></h1>



            <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
                    echo '<article>';
                    //Print the title and the content of the current post
                    the_title('<h1 class="pagetitle_article">', '</h1>');
                    the_excerpt();
                    echo '<a href="' . get_permalink() . '">Lees meer...</a>';
                    echo '</article>';

                }
            }
            else
            {
                echo 'No content available';
            }
            ?>


            <aside class="fixed">
                <?php dynamic_sidebar( 'primary-sidebar' ); ?>
            </aside>

        </div> <!-- #main -->
    </div> <!-- #main-container -->

<?php get_footer(); ?>