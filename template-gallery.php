<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>
<section id="episode-page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/subscription-background.jpg');">
        <div class="row">
            <h2><?php the_field('page_header'); ?></h2>
        </div>
        <div class='overlay-blue'></div>
</section>
<div class="container">
    <div class="row">
        <div class="content">

            <ul class="photogal">

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
                ?>

                <li class="element">
                    <div class="gallery-image" style="background-image: url('<?php $size= "album-grid"; echo the_post_thumbnail_url( $size ); ?>');">
                        <a class="" rel="" 
                        href="
                                <?php the_permalink(); ?> 
                        ">
                            <div class="watch-now">
                                <h3>Episode <?php the_field('episode_number') ?></h3>
                                <p><?php echo get_the_title(); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-meta" style="display: none;">
                        <p>Download or Listen on iTunes</p>
                    </div>
                </li><!--end li-->

                <?php endwhile; // end of the loop. ?>
            </ul><!--end photogallery-->

        </div><!--end content-->
    </div>
</div>
<?php get_template_part( 'template-parts/subscription-bar', 'none' ); ?>
<?php get_footer(); ?>


