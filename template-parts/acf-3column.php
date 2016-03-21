<?php
/**
 * ACF Content Type View : 3_column
 *
 * @package mindup
 */
?>

<section class="acf 3column">
	<div class="container">

		<div class="tab1">
			<p><?php echo $three_col_headline1; ?></p>

			<img class="image-responsive" src="<?php echo $three_col_image1['url']; ?>" alt="">

			<p><?php echo $three_col_copy1; ?></p>

			<?php
			if ( $three_col_ctacopy1 && $three_col_ctalink1 ) : ?>

				<p><a href="<?php echo $three_col_ctalink1; ?>" class="btn"><?php echo $three_col_ctacopy1; ?></a></p>

			<?php
			endif; ?>
		</div>

		<div class="tab2">
			<p><?php echo $three_col_headline2; ?></p>

			<img class="image-responsive" src="<?php echo $three_col_image2['url']; ?>" alt="">

			<p><?php echo $three_col_copy2; ?></p>

			<?php
			if ( $three_col_ctacopy2 && $three_col_ctalink2 ) : ?>

				<p><a href="<?php echo $three_col_ctalink2; ?>" class="btn"><?php echo $three_col_ctacopy2; ?></a></p>

			<?php
			endif; ?>
		</div>

		<div class="tab3">
			<p><?php echo $three_col_headline3; ?></p>

			<img class="image-responsive" src="<?php echo $three_col_image3['url']; ?>" alt="">

			<p><?php echo $three_col_copy3; ?></p>

			<?php
			if ( $three_col_ctacopy3 && $three_col_ctalink3 ) : ?>

				<p><a href="<?php echo $three_col_ctalink3; ?>" class="btn"><?php echo $three_col_ctacopy3; ?></a></p>

			<?php
			endif; ?>
		</div>

	</div>
</section>
