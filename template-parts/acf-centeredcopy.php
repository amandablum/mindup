<?php
/**
 * ACF Content Type View : centered_copy
 *
 * @package mindup
 */
?>

<section class="acf centeredcopy">
	<div class="container">

		<p><?php echo $centered_headline; ?></p>

		<p><?php echo $centered_copy; ?></p>

		<?php
		if ( $centered_cta_copy && $centered_cta_link ) : ?>

			<p><a href="<?php echo $centered_cta_link; ?>" class="btn"><?php echo $centered_cta_copy; ?></a></p>

		<?php
		endif; ?>

	</div>
</section>
