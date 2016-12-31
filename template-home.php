<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
    <section id="home-page-intro" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/images/hero_banner.png')">
        <div class="row text-center">
                <!--<h2>Welcome To</h2>-->
                <!--<h1>The Young Pros Show</h1>-->
                <h3>Conversations that<br><span>matter</span></h3>
        </div>
    </section>
    <section class="subscription-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/subscription-background.jpg');">
        <div class="row">
            <p><?php the_field('subscription_heading'); ?></p>
            
            <a href="#subscribe-popup" class="open-subscribe-popup">
                <!--<div id="orange-arrow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/images/arrow_orange.png');" ></div>-->
                <button class="subscription-button"><?php the_field('subscription_button_text'); ?></button>
            </a>
        </div>
        <div class='overlay-blue'></div>
    </section>
<section id="episodes">
    <div class="row text-center">
        <h2>Recent Episodes</h2>
        <?php get_template_part( 'template-parts/recent-gallery', 'none' ); ?>
    </div>
    <div class="view-all">
        <a href="<?php echo esc_url( home_url( '/episodes' ) ); ?>" ><button class="view-all-button">View All</button></a>
    </div>
</section>
<div class="row">
    <?php get_template_part( 'template-parts/subscription-popup', 'none' ); ?>
</div>
<?php get_template_part( 'template-parts/subscription-bar', 'none' ); ?>

<?php get_footer(); ?>
