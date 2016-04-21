<?php
/**
 * Post Nav / pagination
 *
 * @package mindup
 * @author ChuckReynolds <chuck@vuurr.com>
 */
?>

<div id="pagination">
	<?php
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
	?>
</div> <!-- end pagination -->
