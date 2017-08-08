<div class="footer-container">
    <h3>Sociale Media</h3>
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    <h3>Info</h3>
    <ul>
        <li><a href="<?php echo get_page_link(74); ?>" id= "footertext">Disclaimer</a></li>
        <li><a href="<?php echo get_page_link(76); ?>" id= "footertext">Privacy Policy</a></li>
        <li><a href="<?php echo get_page_link(78); ?>" id= "footertext">Productiedossier</a></li>
    </ul> 
</div>

<?php wp_footer(); ?>
</body>
</html>
