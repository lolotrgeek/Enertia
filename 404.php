<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package energy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="box alt container">
                <section class="error-404 not-found feature left">
                    <div class="content">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'energy' ); ?></h1>
                        </header><!-- .page-header -->

                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'energy' ); ?></p>

                        <?php
                            get_search_form();?>
                    </div><!-- .content -->
                </section><!-- .error-404 -->
                <section class="error-404 not-found feature right">
                    <div class="content">
                        <?php
                            the_widget( 'WP_Widget_Recent_Posts' );

                            // Only show the widget if site has multiple categories.
                            if ( energy_categorized_blog() ) :
                        ?>

                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'energy' ); ?></h2>
                            <ul>
                            <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ) );
                            ?>
                            </ul>
                        </div><!-- .widget -->
                    
                        <?php
                            endif;
                        ?>
                    </div><!-- .content -->
                    
                </section><!-- .error-404 -->
            </div><!--.box alt container-->
            
            <footer class="major container 75%">
                <?php dynamic_sidebar( 'home-footer' ); ?>
            </footer>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
