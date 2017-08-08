<?php get_header(); ?>
    <div class="main-container">
        <div class="main wrapper clearfix">
            <?php
            if(have_posts())
            {
                get_template_part('partials/content');
                while(have_posts())
                {
                    the_post();
                    echo '<article>';
                    //Print the title and the content of the current post
                    the_title('<h2 class="pagetitle_article">', '</h2>');
                    the_excerpt();
                    echo '<a href="' . get_permalink() . '">Lees meer...</a>';
                    echo '</article>';

                   
                }
            }
            else
            {
                echo 'Er is geen inhoud gevonden';
            }
            ?>

            <aside class="fixed">
                <?php dynamic_sidebar( 'primary-sidebar' ); ?>
            </aside>

           

        </div> <!-- #main -->
    </div> <!-- #main-container -->

<?php get_footer(); ?>