<?php get_header(); ?>
    <div class="main-container">
        <div class="main wrapper clearfix">
            <?php
            
                if(have_posts()){
                    while(have_posts()){                        
                        the_post();
                        //Print the title and the content of the current post
                        echo '<article>';
                        the_title('<h2 class="pagetitle_article">', '</h2>');
                        the_content();
                        echo '<p id="author">Geschreven door: ';                        
                        the_author();
                        echo ('</p>');
                        echo '<a href="' . previous_post_link() . '"></a>' . ' | ';
                        echo '<a href="' . next_post_link() . '"></a>';
                        echo '</article>';
                        echo '<article>';
                        comments_template();
                        echo get_post_meta(get_the_ID(), 'NAAM_CUSTOM_FIELD', true);
                        echo '</article>'; 
                        if( has_post_thumbnail() ):
                            echo get_the_post_thumbnail();
                        endif;                         
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
