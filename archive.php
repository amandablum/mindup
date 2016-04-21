<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mindup
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		/*
		 * mobile only search
		 */
		get_template_part( 'template-parts/mobile', 'search' ); ?>


		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if( 1 == $paged ) {
			$args = array(
				'posts_per_page' => '1',
				'ignore_sticky_posts' => true,
				'paged' => false,
			);
			$query = new WP_query ( $args );
			if ( $query->have_posts() ) :

				while ( $query->have_posts() ) : $query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" class="hero-post">
					<a href="<?php echo the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'full' );
					}
					?>
					</a>
					<?php
					the_title( '<h2 class="hero-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
					<div class="entry-meta">
						<?php mindup_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php mindup_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article> <!-- /hero post -->

				<?php
				endwhile;
			rewind_posts();
			endif;
		}

		if ( have_posts() ) :

		while ( have_posts() ) : the_post();?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="thumbnail">
				<a href="<?php echo the_permalink(); ?>">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'medium' );
				}
				?>
				</a>
			</div>
			<div class="content">
				<header class="entry-header">
					<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php mindup_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif;
					?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div> <!-- content -->
		</article><!-- #post-## -->

		<?php endwhile;

		else:
			get_template_part( 'template-parts/content', 'none' );

		endif;
			get_template_part( 'template-parts/pagination' );
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
