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

	</div><!-- #content -->
	
        <footer id="footer" id="colophon" role="contentinfo">
            <div class="container 75%">

                <header id="contact" class="major last">
                    <h2>Questions or comments?</h2>
                </header>

                <p>All inputs and ideas are welcome, <a href="<?php echo esc_url( home_url( '/' ) ); ?>/register">join our community</a> or contact us below.</p>

                <form method="post" action="https://formspree.io/jonjamesit@gmail.com">
                    <div class="row">
                        <div class="6u 12u(mobilep)">
                            <input type="text" name="name" placeholder="Name" />
                        </div>
                        <div class="6u 12u(mobilep)">
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <textarea name="message" placeholder="Message" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <!--<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>-->
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://github.com/lolotrgeek" class="icon fa-github"><span class="label">Github</span></a></li>
                    <!--<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
                </ul>
                <div class="site-info" >
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'energy' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'energy' ), 'WordPress' ); ?></a>
                    <?php printf( '		
                            <ul class="copyright">
                                <li>&copy; Untitled. All rights reserved.</li>
                                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                                <li>Theme: <a href="https://automattic.com/" rel="designer">Underscores.me</a></li> 		
                            </ul>' ); ?>
                </div><!-- .site-info -->
            </div><!--.container-->
        </footer><!--#footer-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
