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
        <div class="row">
            <?php get_template_part( 'template-parts/subscription-popup', 'none' ); ?>
        </div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
                <div>
                <h2>Connect With Us</h2>
                <?php get_template_part( 'template-parts/social-icon-bar', 'none' ); ?>
                </div>
                <div class="row site-info" style="clear: all;">
			© Young Pros 2016
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Made with ♥ by %2$s', 'youngpros' ), '', '<a href="http://geometricwebdesign.com" rel="designer">Geometric</a>' ); ?>
		</div><!-- .site-info -->
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
