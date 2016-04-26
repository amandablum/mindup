<?php
/**
 * Repo Template - Archive of everything but News
 *
 * Template Name: All But News Archive
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
				<a href="permalink"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="permalink">STATIC title</a></h2>
				<div class="entry-meta">
					<span class="byline"> BY <span class="author vcard">authorname</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
					<p>STATIC: Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<span class="comments-link"><a href="http://dev1.dapperdigital.net/webinar-2/#respond">Leave a comment</a></span><span class="tags-links"><a href="http://dev1.dapperdigital.net/tag/tag-1/" rel="tag">tag 1</a>, <a href="http://dev1.dapperdigital.net/tag/tag-2/" rel="tag">tag 2</a>, <a href="http://dev1.dapperdigital.net/tag/tag-3/" rel="tag">tag 3</a>, <a href="http://dev1.dapperdigital.net/tag/tag-4/" rel="tag">tag 4</a></span><a href="http://dev1.dapperdigital.net/webinar-2/" rel="bookmark">Read More ></a>
				</footer><!-- .entry-footer -->
			</article> <!-- /hero one -->


			<article class="hero-two">
				<a href="/webinar-2/"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="">STATIC second non-news post.</a></h2>
				<div class="entry-meta">
					<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
					<p>STATIC: Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article> <!-- /hero two -->


			<article class="hero-three">
				<a href="/webinar-2/"><img src="/wp-content/uploads/2016/03/150528074702-amy-schumer-file-overlay-tease.jpg"></a>
				<h2><a href="">STATIC third non-news post.</a></h2>
				<div class="entry-meta">
					<span class="byline"> BY <span class="author vcard">Amanda</span></span> | <span class="posted-on"><time class="entry-date published" datetime="2016-03-15T21:10:09+00:00">March 15, 2016</time><time class="updated" datetime="2016-03-31T13:53:35+00:00">March 31, 2016</time></span>
				</div><!-- .entry-meta -->

				<div class="entry-content">
					<p>STATIC: Asymmetrical shoreditch affogato, cred plaid 8-bit pour-over. Meditation thundercats mixtape, paleo bushwick occupy sriracha DIY wolf ennui freegan leggings offal post-ironic.</p>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php mindup_posted_on(); ?><?php mindup_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article> <!-- /hero three -->

		</div> <!-- /three hero posts -->

		<?php

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		$repo_args = array(
			'post_type' => 'post',
			'category__not_in' => 1,
			'posts_per_page' => 4,
			'paged' => $paged,
		);

		$repo_query = new WP_Query( $repo_args );

		if ( $repo_query->have_posts() ) :

			while ( $repo_query->have_posts() ) : $repo_query->the_post();

				get_template_part( 'template-parts/content', 'post' );

			endwhile;

		wp_reset_postdata();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?>
		<div id="pagination">
		<?php
		if ( function_exists( mindup_pagination_tplrepo() ) )
			mindup_pagination_tplrepo();
		?>
		</div><!-- end pagination -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
