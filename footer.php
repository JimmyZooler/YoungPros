<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Young_Pros
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
<!--                <div class="column medium-4">
                     Begin MailChimp Signup Form 
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <form action="//facebook.us14.list-manage.com/subscribe/post?u=aafca6008e577c3f07f4452bc&amp;id=f88e40bfc2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">

                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                    <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                    </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div class="mc-field-group">
                            <label for="mce-FNAME">First Name </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name </label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                            <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>     real people should not fill this in and expect good things - do not remove this or risk form bot signups
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_aafca6008e577c3f07f4452bc_f88e40bfc2" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    End mc_embed_signup
                </div>-->
                <div>
                <h2>Connect With Us</h2>
                <?php get_template_part( 'template-parts/social-icon-bar', 'none' ); ?>
                </div>
                <div class="row site-info" style="clear: all;">
			© Young Pros 2016
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Development %1$s by %2$s', 'youngpros' ), '', '<a href="http://geometricwebdesign.com" rel="designer">Craig Rushon</a>' ); ?>
		</div><!-- .site-info -->
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
