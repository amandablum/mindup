<?php
/**
 * ACF Content Type View : 2_column_copy_left_imagevideo_right
 *
 * @package mindup
 */
?>

<section class="acf 2column-leftcopy-rightmedia">
	<div class="container">

		<div class="2column-leftcopy">

			<p><?php echo $two_col_headlineleft; ?></p>

			<p><?php echo $two_col_copyleft; ?></p>

			<?php
			if ( $two_col_ctacopyleft && $two_col_ctalinkleft ) : ?>

				<p><a href="<?php echo $two_col_ctalinkleft; ?>" class="btn"><?php echo $two_col_ctacopyleft; ?></a></p>

			<?php
			endif; ?>
		</div>
		<div class="2column-rightmedia">
			<?php
			if ( $two_col_video_or_imageright == 'video' ) : ?>

				<div class="embed-container">
					<?php echo $two_col_videoright; ?>
				</div>

			<?php
			elseif ( $two_col_video_or_imageright == 'image' ) : ?>

				<img class="image-responsive" src="<?php echo $two_col_imageright['url']; ?>" alt="">

			<?php
			endif; ?>
		</div>

	</div>
</section>
