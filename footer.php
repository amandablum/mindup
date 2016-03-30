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
		<div class="footerCol1">
			<img src="<?php echo get_stylesheet_directory_uri().'/images/logo-footer.gif' ; ?>">
			<?php dynamic_sidebar('footercol1'); ?>
		</div>
		<div class="footerCol2">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-1','menu_class' => 'footerMenu' ) ); ?>
		</div>
		<div class="footerCol3">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-2','menu_class' => 'footerMenu' ) ); ?>
		</div>
		<div class="footerCol4">
			<?php dynamic_sidebar('footercol4'); ?>
		</div>
		<div class="footerBottom">
			<?php dynamic_sidebar('footbottom'); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
