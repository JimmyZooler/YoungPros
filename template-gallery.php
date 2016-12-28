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
        <?php get_template_part( 'template-parts/gallery'); ?>
    </div>
</div>

<?php get_footer(); ?>


