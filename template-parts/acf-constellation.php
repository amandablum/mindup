<?php
/**
 * ACF Content Type View : constellation
 *
 * @package mindup
 * @author ChuckReynolds <chuck@vuurr.com>
 */
?>

<section class="acf constellation">
	<div class="container">

	<?php
	// lets make a loop to save on the redundancy
	$max_const = 5; // max number of tabs/cols in acf
	for ( $const = 1; $const <= $max_const; $const++ ) :
		// pull and sanitize vars
		$const_label   = sanitize_text_field( get_sub_field( 'const_label' . $const ) );   // Text
		$const_icon    = get_sub_field( 'const_icon' . $const );                           // Image
		$const_copy    = wp_kses_post( get_sub_field( 'const_copy' . $const ) );           // Text Area
		$const_ctacopy = sanitize_text_field( get_sub_field( 'const_ctacopy' . $const ) ); // Text
		$const_ctalink = esc_url( get_sub_field( 'const_ctalink' . $const ) );             // Url
		#var_dump( $const, $const_label, $const_icon, $const_copy, $const_ctacopy, $const_ctalink );
	?>
		<div class="tab<?php echo $const; ?>">

			<p>why is this here? <?php echo $const . " of " . $max_const; ?></p>

			<h3><?php echo $const_label; ?></h3>

			<p><img class="image-responsive" src="<?php echo $const_icon['url']; ?>" alt=""></p>

			<p><?php echo $const_copy; ?></p>

			<?php
			if ( $const_ctacopy && $const_ctalink ) : ?>

				<p><a href="<?php echo $const_ctalink; ?>" class="btn"><?php echo $const_ctacopy; ?></a></p>

			<?php
			endif; ?>
		</div>
	<?php
	endfor; ?>

	</div>
</section>
