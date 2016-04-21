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
			<?php
			$recent_args = array (
				'post_type'      => 'post',
				'no_found_rows'  => true, // Skip SQL_CALC_FOUND_ROWS for performance (no pagination)
				'posts_per_page' => 6
			);
			$recent_posts = new WP_Query( $recent_args );

			if ( $recent_posts->have_posts() ) :
				while ( $recent_posts->have_posts() ) : $recent_posts->the_post();

					$post_title = get_the_title();
					$post_title_short = wp_trim_words( $post_title, 10, '&hellip;' ); ?>

					<div class="postList">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php echo get_permalink( get_the_ID() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
						<?php endif; ?>
						<h4><a href="<?php echo get_permalink( get_the_ID() ); ?>" title="<?php the_title_attribute(); ?>"><?php echo $post_title_short; ?></a></h4>
					</div>
				<?php
				endwhile;
			else:
				echo '<p>no recent posts</p>';
			endif;
			wp_reset_postdata(); ?>
		</div>
	</aside><!-- #secondary -->

<?php
endif;
?>
