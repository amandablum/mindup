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


	<article class="hero-post">
		<a href=""><img src="/wp-content/uploads/2016/03/150326100937-restricted-backstreet-boys-exlarge-169.jpg"></a>
		<h2 class="hero-title"><a href="">This is the first news post.</a></h2>
		<div class="entry-meta">
			<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<p>Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php mindup_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article> <!-- /hero post -->

	<?php
	if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post();?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="thumbnail">
			<a href="<?php echo the_permalink(); ?>">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
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
