<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Young_Pros
 */

get_header(); ?>

<div class="row">
    <div class="column medium-9">
        <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                        <?php
                        while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', get_post_format() );

                                the_post_navigation();

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                endif;

                        endwhile; // End of the loop.
                        ?>
		</main><!-- #main -->
	</div><!-- #primary -->
    </div>
    <div class="column medium-3">
        <aside id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside><!-- #secondary -->
    </div>
</div>

<?php
//get_sidebar();
get_footer();
