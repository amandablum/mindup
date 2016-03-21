<?php
/**
 * ACF Content Type : 1_column_hero
 *
 * @package mindup
 */
?>

<section class="acf 1columnhero">
	<div class="container">

		<?php
		if ( $hero_videoorimage == 'video' ) : ?>

			<div class="embed-container">
				<?php echo $hero_video; ?>
			</div>

		<?php
		elseif ( $hero_videoorimage == 'image' ) : ?>

			<div class="image-responsive">
				<img class="image-responsive" src="<?php echo $hero_image['url'] ?>" alt="">
			</div>

			<p><?php echo $hero_headline; ?></p>

			<p><?php echo $hero_copy; ?></p>

			<?php
			if ( $hero_cta_copy && $hero_cta_link ) : ?>

				<div class="">
					<a href="<?php echo $hero_cta_link ?>" class="btn"><?php echo $hero_cta_copy ?></a>
				</div>

			<?php
			endif;

		endif; ?>

	</div>
</section>
