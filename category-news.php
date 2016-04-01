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
		while ( have_posts() ) : the_post();?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumbnail">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('medium');
		} ?>
	</div>

	<div class="content">
        <header class="entry-header">
                <?php
                        if ( is_single() ) {
                                the_title( '<h1 class="entry-title">', '</h1>' );
                        } else {
                                the_title( '<h2 class="entry-title">', '</h2>' );
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
                <?php mindup_entry_footer(); ?>
        </footer><!-- .entry-footer -->
	</div> <!-- content -->
</article><!-- #post-## -->




		<?php endwhile;

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>



<?php 
echo '<div id="pagination">';
global $wp_query;
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'next_text' => '>>',
        'prev_text' => '',
        'mid_size' => 3
) );
echo '</div> <!-- end pagination -->';

?>



	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
