<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

		<div class="three-hero-posts">

			<article class="hero-one">
			<a href="/webinar-2/"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="">This is the first news post FIRSTINDEX.</a></h2>
				<div class="entry-meta">
					<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
					<p>Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article> <!-- /hero one -->


			<article class="hero-two">
				<a href="/webinar-2/"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="">This is the second news post.</a></h2>
				<div class="entry-meta">
					<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
						<p>Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article> <!-- /hero two -->


			<article class="hero-three">
			<a href="/webinar-2/"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="">This is the third news post.</a></h2>
				<div class="entry-meta">
						<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
						<p>Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
				<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- /hero three -->

	</div><!-- /three hero posts -->



	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

		<?php
		endif;

		query_posts( 'cat=-1' ); // exclude News category

		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="thumbnail">
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark"><?php echo the_post_thumbnail('large');?></a>
					<?php } ?>
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


		<?php
		endwhile;

		#the_posts_navigation();

		else:

			get_template_part( 'template-parts/content', 'none' );

		endif;


		get_template_part( 'template-parts/pagination' );

	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
