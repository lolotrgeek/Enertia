<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package energy
 */

?>
        <a href="#content" class="scrollToTop button icon fa-chevron-up"></a>	
	</div><!-- #content -->
        
        <footer id="footer" id="colophon" role="contentinfo">
            <div class="container 75%">
                <?php dynamic_sidebar( 'footer' ); ?>
                
                <ul class="icons">
                    <?php dynamic_sidebar( 'footer-social' ); ?>
                </ul>
                <?php dynamic_sidebar( 'footer-menu' ); ?>
                <div class="site-info" >
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'energy' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'energy' ), 'WordPress' ); ?></a>
                    		
                            <ul class="copyright">
                                <li>&copy; <?php bloginfo( 'name' ); ?> All rights reserved.</li>
                                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                                <li>Theme: <a href="https://automattic.com/" rel="designer">Underscores.me</a></li> 	
                            </ul>
                </div><!-- .site-info -->
            </div><!--.container-->
        </footer><!--#footer-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
