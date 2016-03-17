<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindup
 */

if ( ! is_active_sidebar( 'fullwidthtemplatesidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'fullwidthtemplatesidebar' ); ?>
</aside><!-- #secondary -->
