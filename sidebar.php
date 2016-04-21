<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package mindup
 */

if ( is_page() && is_active_sidebar( 'fullwidthtemplatesidebar' ) ) : ?>

	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'fullwidthtemplatesidebar' ); ?>
	</aside><!-- #secondary -->

<?php
endif;

if ( is_single() || is_archive() || is_home() ) : ?>

	<aside id="secondary" class="widget-area" role="complementary">

		<?php get_search_form(); ?>

		<ul class="tabs">
			<li><a href="#tab1">Popular</a></li>
			<li><a href="#tab2">Recent</a></li>
		</ul>
		<div id="tab1">
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href=""><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
			</div>
		</div>
		<div id="tab2">
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
			<div class="postList">
					<a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
					<h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
			</div>
		</div>
	</aside><!-- #secondary -->

<?php
endif;
?>
