<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
    <section id="home-page-intro">
        <div class="row text-center">
                <h2>Welcome To</h2>
                <h1>The Young Pros Show</h1>
                <div id="video-container"></div>
                <h3>Conversations that matter with incredible human beings...</h3>
        </div>
    </section>
    <section class="subscription-bar" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/subscription-background.jpg');">
        <div class="row">
            <p><?php the_field('subscription_heading'); ?></p>
            <button><?php the_field('subscription_button_text'); ?></button>
        </div>
        <div class='overlay-blue'></div>
    </section>

<?php get_footer(); ?>
