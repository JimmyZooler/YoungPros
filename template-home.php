<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
    <section id="home-page-intro" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/images/hero_banner.png')">
        <div class='webinar-helper'>    
            <div class="webinar text-center">
                <h1>The Young Pros Show</h1>
                <h2>Get Your <span>12</span> month<br><span id="game-plan">game plan</span></h2>
                <p>Free Step-By-Step Webinar to turn<br>Your Vision into Reality.</p>
                <div class="form-inner">
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <form action="//facebook.us14.list-manage.com/subscribe/post?u=aafca6008e577c3f07f4452bc&amp;id=f88e40bfc2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">


                    <div class="mc-field-group mc-name" style="float: left; padding-right: 5px;">
                            <label for="mce-FNAME" style="display: none;">Full Name </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your First Name">
                    </div>
                    <div class="mc-field-group">
                        <!--<div class="indicates-required"><span class="asterisk">*</span> Required</div>-->
                            <label for="mce-EMAIL" style="display: none;">Email Address <span class="asterisk">*</span></label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email *">
                    </div>
                            <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>     <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_aafca6008e577c3f07f4452bc_f88e40bfc2" tabindex="-1" value=""></div>
                        <input type="submit" value="Let's Do It!" name="subscribe" id="mc-embedded-subscribe" class="button">
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                </div>
            </div>
        </div>
    </section>
    <section class="subscription-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/subscription-background.jpg');">
        <div class="row">
            <p><?php the_field('subscription_heading'); ?></p>
            
            <a href="#subscribe-popup" class="open-subscribe-popup">
                <div id="orange-arrow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/images/arrow_orange.png');" ></div>
                <button class="subscription-button"><?php the_field('subscription_button_text'); ?></button>
            </a>
        </div>
        <div class='overlay-blue'></div>
    </section>
<?php get_template_part( 'template-parts/subscription-bar', 'none' ); ?>

<?php get_footer(); ?>
