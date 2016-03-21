<?php
/**
 * ACF Hyperloop Layout Builder for all flexible content types
 *
 * to init: do_action( 'mindup_hyperloop' );
 *
 * @package mindup
 */

function mindup_acf_hyperloop() {

	// if we have flexible content_type
	if ( have_rows( 'content_type' ) ) :

		echo '<p>WE GOT STUFF!</p>';

		// start the hyperloop through the flexible content type layouts
		while ( have_rows( 'content_type' ) ) : the_row();

			/**
			 * Content Type : 1_column_hero
			 */
			if ( get_row_layout() == '1_column_hero' ) :

				// pull and sanitize vars
				$hero_videoorimage = get_sub_field( 'hero_videoorimage' );                    // Radio - image || video
				$hero_video        = get_sub_field( 'hero_video' );                           // oEmbed
				$hero_image        = get_sub_field( 'hero_image' );                           // Image
				$hero_headline     = sanitize_text_field( get_sub_field( 'hero_headline' ) ); // Text
				$hero_copy         = sanitize_text_field( get_sub_field( 'hero_copy' ) );     // Text
				$hero_cta_copy     = sanitize_text_field( get_sub_field( 'hero_cta_copy' ) ); // Text
				$hero_cta_link     = esc_url( get_sub_field( 'hero_cta_link' ) );             // Url

				// load the layout view
				require get_template_directory() . '/template-parts/acf-1columnhero.php';

			endif; // get_row_layout : 1_column_hero












		endwhile; // end while have_rows content_type

	else :
		echo '<p>Sorry, we can\'t find any content</p>';

	endif; // end if have_rows content_type

}
add_action( 'mindup_hyperloop', 'mindup_acf_hyperloop' );
