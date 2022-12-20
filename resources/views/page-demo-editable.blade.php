{{--
    Template Name: Demo Editable
--}}

@extends('layouts.containerless', ['bodyClass' => 'bg-nk-silver'])

@section('content')

<?php if ( have_rows( 'promo_section' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
        <?php $section_image = get_sub_field( 'section_image' ); ?>
        <section class="demo-promo-section">
            <div class="container">
                <div class="demo-promo-section__wrap">
                    <?php if ( $section_image ) : ?>
                        <div class="demo-promo-section__visual">
                            <span class="demo-promo-section__visual-img"><img class="not-auto" src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" /></span>
                        </div>
                    <?php endif; ?>
                    <div class="demo-promo-section__frame">
                        <div class="demo-promo-section__label"><?php the_sub_field( 'section_label' ); ?></div>
                        <h1 class="demo-promo-section__title"><?php the_sub_field( 'section_title' ); ?></h1>
                        <h2 class="demo-promo-section__description"><?php the_sub_field( 'section_description' ); ?></h2>
                        <div class="demo-promo-section__form shadow-form">
                            <?php the_sub_field( 'section_form_code' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'logo_section' ) ) : ?>
	<?php while ( have_rows( 'logo_section' ) ) : the_row(); ?>
		<?php $logos_images = get_sub_field( 'logos' ); ?>
        <section class="logos-section">
            <div class="container">
                <div class="logos-section__title"><?php the_sub_field( 'section_title' ); ?></div>
                <?php if ( $logos_images ) :  ?>
                    <ul class="partneers-logos">
                        <?php foreach ( $logos_images as $logos_image ): ?>
                            <li><img class="not-auto" src="<?php echo esc_url( $logos_image['url'] ); ?>" alt="<?php echo esc_attr( $logos_image['alt'] ); ?>" width="<?php echo $logos_image['width']; ?>" height="<?php echo $logos_image['height']; ?>"></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
	<?php endwhile; ?>
<?php endif; ?>



<?php if ( have_rows( 'reviews_section' ) ) : ?>
	<?php while ( have_rows( 'reviews_section' ) ) : the_row(); ?>
        <section class="reviews-g2-section">
            <div class="container">
                <h2 class="text-3xl mb-8 text-center"><?php the_sub_field( 'section_title' ); ?></h2>
                <?php the_sub_field( 'reviews_embed_code' ); ?>
            </div>
        </section>
	<?php endwhile; ?>
<?php endif; ?>




@endsection