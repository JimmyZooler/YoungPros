<?php
/*
Template Name: Episodes Page
*/
?>

<?php get_header(); ?>
		
<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                    <header class="page-header">
                        <h1><?php single_post_title(); ?></h1>
                    </header>
                    <div id="episode-blog">    
                        <?php
                            //setup new WP_Query
                            $wp_query = new WP_Query( 
                                    array(
                                            'posts_per_page'	=>	-1,
                                            'post_type'			=>	'gallery'
                                    )
                            );

                            //begine loop
                            while ($wp_query->have_posts()) : $wp_query->the_post();

                                get_template_part( 'template-parts/content-episodes');

                        endwhile; 
                        
                        the_posts_navigation();
                        
                        ?>
                        
                </div>
            </main><!-- #main -->
    </div><!-- #primary -->
<?php get_template_part( 'template-parts/subscription-bar', 'none' ); ?>
<?php get_footer(); ?>
