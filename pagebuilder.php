<?php
/*
 * Template Name: Pagebuilder
 * Description: Utilize Pagebuilder Content Types
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

/*
*  get all custom fields and dump for testing
*/

$fields = get_fields();
var_dump( $fields ); 

/*
*  get all custom fields, loop through them and load the field object to create a label => value markup
*/

$fields = get_fields();

if( $fields )
{
	foreach( $fields as $field_name => $value )
	{
		// get_field_object( $field_name, $post_id, $options )
		// - $value has already been loaded for us, no point to load it again in the get_field_object function
		$field = get_field_object($field_name, false, array('load_value' => false));

		echo '<div>';
			echo '<h3>' . $field_name . '</h3>';
			echo $value;
		echo '</div>';
	}
}

?>
<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
