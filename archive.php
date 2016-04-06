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

        <div class="hero-post">
                <img src="/wp-content/uploads/2016/03/daff-768x576.jpg">
                <h2>This is the first news post.</h2>
                <div class="entry-meta">
                        <span class="byline"> BY <span class="author vcard"><a class="url fn n" href="http://dev1.dapperdigital.net/author/amanda/">amanda</a></span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
                </div><!-- .entry-meta -->

                <div class="entry-content">
                        <p>Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                        <?php mindup_entry_footer(); ?>
                </footer><!-- .entry-footer -->
        </div> <!-- /hero post -->


	<?php
	if ( have_posts() ) : ?>

		<?php

		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
