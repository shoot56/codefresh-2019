<?php if ( have_rows( 'g2_global_badges', 'option' ) ) : ?>
	<?php while ( have_rows( 'g2_global_badges', 'option' ) ) : the_row(); ?>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php if ( $image ) : ?>
			<img class="w-auto h-28" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>