<?php
/**
 * Template part for displaying gallery (episode) posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Young_Pros
 */

?>

<div class="row">
    <div class="column medium-9">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <header class="entry-header">
                <div class="header-content">
                    <span class="episode-box"><h3>Episode <?php the_field('episode_number') ?></h3></span>
                    <?php

                    if ( is_single() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                            <?php youngpros_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php
                    endif; ?>
                </div>
            </header><!-- .entry-header -->
            <div class="blog-row">
                <div class="entry-content">
                    <?php youngpros_post_date(); ?>
                        <?php
                                the_content( sprintf(
                                        /* translators: %s: Name of current post. */
                                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'youngpros' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );

                                wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'youngpros' ),
                                        'after'  => '</div>',
                                ) );
                        ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                        <?php youngpros_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </div>
        </article><!-- #post-## -->
    </div>
    <div class="column medium-3">
        <aside id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside><!-- #secondary -->
    </div>
</div>

