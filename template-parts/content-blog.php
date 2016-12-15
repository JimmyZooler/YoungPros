<?php
/**
 * Template part for displaying blog posts on blog page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Young_Pros
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
    <div class='blog-container'>
        <a class="post-link" href="<?php echo get_permalink(); ?>" >
            <span class="category-box"><?php  $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }?></span>
            <header class="entry-header" >
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
            </header><!-- .entry-header -->
        </a>
    </div>
</article><!-- #post-## -->

