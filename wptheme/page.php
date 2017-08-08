
<?php get_header(); ?>
<div class="main-container">
    <div class="main wrapper clearfix">
        <article>
            <?php
            get_template_part( 'loop' );
            ?>

        </article>


        <aside class="fixed">
            <?php dynamic_sidebar( 'primary-sidebar' ); ?>
        </aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>