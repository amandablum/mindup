<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindup
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<img src="<?php echo get_stylesheet_directory_uri().'/images/logo-footer.gif' ; ?>">
			<?php dynamic_sidebar('footercol1'); ?>
			<?php dynamic_sidebar('footercol4'); ?>
			<?php dynamic_sidebar('footbottom'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
