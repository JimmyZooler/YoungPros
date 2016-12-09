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
		<div class="site-info">
			© Young Pros 2016
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Development %1$s by %2$s.', 'youngpros' ), '', '<a href="http://geometricwebdesign.com" rel="designer">Craig Rushon</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
