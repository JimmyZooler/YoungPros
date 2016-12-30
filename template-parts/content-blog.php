<?php
/**
 * Template part for displaying blog posts on blog page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Young_Pros
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class='post-wrap'>
        <div class="blog-thumbnail" style="background-image: url('<?php $size = 'blog-thumbnail'; echo the_post_thumbnail_url($size); ?>'); background-size: cover; background-position: center;">
            <a class="post-link" href="<?php echo get_permalink(); ?>" >
                <span class="category-box"><?php  $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }?></span>
            </a>
        </div>
        <div class='title-column'>       
            
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
                    <div class='post-excerpt'>
                        <?php  the_excerpt(); ?>
                    </div>
                    <a class="read-more" href='<?php  echo get_permalink(); ?>'><p>View Post</p></a>
        </div>
    </div>
</article><!-- #post-## -->

