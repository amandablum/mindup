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


			/**
			 * Content Type : 2_column_
			 */
			if ( get_row_layout() == '2_column_' ) :

				// pull and sanitize vars


				// load the layout view
				#require get_template_directory() . '/template-parts/acf-2column-leftmedia-rightcopy.php';

			endif; // get_row_layout : 2_column_


			/**
			 * Content Type : 2_column_copy_left_imagevideo_right
			 */
			if ( get_row_layout() == '2_column_copy_left_imagevideo_right' ) :

				// pull and sanitize vars


				// load the layout view
				#require get_template_directory() . '/template-parts/acf-2column-leftcopy-rightmedia.php';

			endif; // get_row_layout : 2_column_copy_left_imagevideo_right


			/**
			 * Content Type : 3_column
			 */
			if ( get_row_layout() == '3_column' ) :

				// pull and sanitize vars
				$three_col_headline1 = sanitize_text_field( get_sub_field( '3col_headline1' ) ); // Text
				$three_col_image1    = get_sub_field( '3col_image1' );                           // Image
				$three_col_copy1     = wp_kses_post( get_sub_field( '3col_copy1' ) );            // Text Area
				$three_col_ctacopy1  = sanitize_text_field( get_sub_field( '3col_ctacopy1' ) );  // Text
				$three_col_ctalink1  = esc_url( get_sub_field( '3col_ctalink1' ) );              // Url

				$three_col_headline2 = sanitize_text_field( get_sub_field( '3col_headline2' ) ); // Text
				$three_col_image2    = get_sub_field( '3col_image2' );                           // Image
				$three_col_copy2     = wp_kses_post( get_sub_field( '3col_copy2' ) );            // Text Area
				$three_col_ctacopy2  = sanitize_text_field( get_sub_field( '3col_ctacopy2' ) );  // Text
				$three_col_ctalink2  = esc_url( get_sub_field( '3col_ctalink2' ) );              // Url

				$three_col_headline3 = sanitize_text_field( get_sub_field( '3col_headline3' ) ); // Text
				$three_col_image3    = get_sub_field( '3col_image3' );                           // Image
				$three_col_copy3     = wp_kses_post( get_sub_field( '3col_copy3' ) );            // Text Area
				$three_col_ctacopy3  = sanitize_text_field( get_sub_field( '3col_ctacopy3' ) );  // Text
				$three_col_ctalink3  = esc_url( get_sub_field( '3col_ctalink3' ) );              // Url

				// load the layout view
				require get_template_directory() . '/template-parts/acf-3column.php';

			endif; // get_row_layout : 3_column


			/**
			 * Content Type : centered_copy
			 */
			if ( get_row_layout() == 'centered_copy' ) :

				// pull and sanitize vars
				$centered_headline = sanitize_text_field( get_sub_field( 'centered_headline' ) ); // Text
				$centered_copy     = wp_kses_post( get_sub_field( 'centered_copy' ) );            // Wysiwyg Editor
				$centered_cta_copy = sanitize_text_field( get_sub_field( 'centered_cta_copy' ) ); // Text
				$centered_cta_link = esc_url( get_sub_field( 'centered_cta_link' ) );             // Url

				// load the layout view
				require get_template_directory() . '/template-parts/acf-centeredcopy.php';

			endif; // get_row_layout : centered_copy


			/**
			 * Content Type : call_out
			 */
			if ( get_row_layout() == 'call_out' ) :

				// pull and sanitize vars
				$callout_headline = sanitize_text_field( get_sub_field( 'callout_headline' ) ); // Text
				$call_out_copy    = sanitize_text_field( get_sub_field( 'call_out_copy' ) );    // Text

				// load the layout view
				require get_template_directory() . '/template-parts/acf-callout.php';

			endif; // get_row_layout : call_out


			/**
			 * Content Type : constellation
			 */
			if ( get_row_layout() == 'constellation' ) :

				// pull and sanitize vars


				// load the layout view
				#require get_template_directory() . '/template-parts/acf-constellation.php';

			endif; // get_row_layout : constellation


		endwhile; // end while have_rows content_type

	else :
		echo '<p>Sorry, we can\'t find any content</p>';

	endif; // end if have_rows content_type

}
add_action( 'mindup_hyperloop', 'mindup_acf_hyperloop' );