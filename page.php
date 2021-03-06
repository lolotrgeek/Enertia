<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package energy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			if ( is_front_page() ) : ?>
                    <?php dynamic_sidebar( 'home-header' ); ?>
				<div class="box alt container">
                
					<section class="feature left">
                        <a href="/projects/" class="image icon fa-leaf"><img src="<?php echo esc_url( get_stylesheet_directory_uri( ) ); ?>/images/pic02.jpg" alt="" /></a>
						<div class="content">
                            <?php dynamic_sidebar( 'home-def-1' ); ?>
						</div>
					</section>
					<section class="feature right">
                        <a href="/about/#approach" class="image icon fa-bolt"><img src="<?php echo esc_url( get_stylesheet_directory_uri( ) ); ?>/images/pic01.jpg" alt="" /></a>
						<div class="content">
							<?php dynamic_sidebar( 'home-def-2' ); ?>
						</div>
						
					</section>
					<section class="feature left">
						<a href="/about/#vision" class="image icon fa-heart"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/pic03.jpg" alt="" /></a>
						<div class="content">
                            <?php dynamic_sidebar( 'home-def-3' ); ?>
						</div>
					</section>
                </div><!--box alt container-->
                <?php dynamic_sidebar( 'home-statement' ); ?>
                <!--<div class="major container">
                       

                <!--</div> .box container-->
            <?php else: ?>
            
             <div class="major container">
                 <?php   
                 //The Loop
                 
                while ( have_posts() ) : the_post();
                    
                    the_post_thumbnail();
                    
                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.

                
			?></div><!--.box container-->
            <?php endif; ?>
            
            
            <?php dynamic_sidebar( 'home-footer' ); ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
