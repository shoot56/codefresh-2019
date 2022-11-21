{{--
  Template Name: Pricing Editable Template
--}}

@extends('layouts.containerless', ['bodyClass' => 'bg-nk-silver'])

@section('content')
<?php if ( have_rows( 'promo_section' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
		<?php $section_backgroung_image = get_sub_field( 'section_backgroung_image' ); ?>
    <section class="price-promo-section from-nk-blue-marine bg-gradient-to-b to-nk-blue-midnight">
      <div class="price-promo-section__bg">
        <?php if ( $section_backgroung_image ) : ?>
          <img src="<?php echo esc_url( $section_backgroung_image['url'] ); ?>" alt="<?php echo esc_attr( $section_backgroung_image['alt'] ); ?>" />
        <?php endif; ?>
      </div>
      <div class="container">
          <div class="price-promo-section__head">
              <h1 class="price-promo-section__title"><?php the_sub_field( 'section_title' ); ?></h1>
              <div class="price-promo-section__subtitle"><?php the_sub_field( 'section_description' ); ?></div>
          </div>
          <div class="price-promo-section__frame">
          <?php if ( have_rows( 'pricing_plans' ) ) : ?>
            <?php $numrows = count( get_field( 'pricing_plans' ) ); ?>
            <div class="pricing-columns" style="--colCounter: <?php echo $numrows;?>">
              <?php while ( have_rows( 'pricing_plans' ) ) : the_row(); ?>
                <?php $plan_button = get_sub_field( 'plan_button' ); ?>
                <div class="pricing-columns__item pricing-item" style="--planColor: <?php the_sub_field( 'plan_color' ); ?>;">
                    <div class="pricing-item__name <?php the_sub_field( 'plan_name_font_weight' ); ?>"><?php the_sub_field( 'plan_name' ); ?></div>
                    <?php if ( have_rows( 'plan_price' ) ) : ?>
                      <?php while ( have_rows( 'plan_price' ) ) : the_row(); ?>
                        <div class="pricing-item__price">
                          <span class="pricing-item__price-currency"><?php the_sub_field( 'currency' ); ?></span>
                          <span class="pricing-item__price-value"><?php the_sub_field( 'value' ); ?></span>
                          <span class="pricing-item__price-description"><?php the_sub_field( 'price_description' ); ?></span>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pricing-item__description">
                      <?php the_sub_field( 'description' ); ?>
                    </div>
                    <div class="pricing-item__button">
                      <?php if ( $plan_button ) : ?>
                        <?php the_sub_field( 'button_style' ); ?>
                        <a class="btn-bl block" href="<?php echo esc_url( $plan_button['url'] ); ?>" target="<?php echo esc_attr( $plan_button['target'] ); ?>"><?php echo esc_html( $plan_button['title'] ); ?></a>
                      <?php endif; ?>
                    </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php if ( have_rows( 'plans_include' ) ) : ?>
            <?php while ( have_rows( 'plans_include' ) ) : the_row(); ?>
              <div class="plans-include">
                <div class="plans-include__title"><?php the_sub_field( 'title' ); ?></div>
                <?php if ( have_rows( 'include_list' ) ) : ?>
                  <div class="plans-include-list">
                    <?php while ( have_rows( 'include_list' ) ) : the_row(); ?>
                    <div class="plans-include-list__item">
                        <?php the_sub_field( 'text' ); ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
      </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'customers_section' ) ) : ?>
	<?php while ( have_rows( 'customers_section' ) ) : the_row(); ?>
		
		
    <section class="pricing-customers">
      <div class="container">
        <div class="pricing-customers__head">
          <div class="pricing-customers__title"><?php the_sub_field( 'section_title' ); ?></div>
          <div class="pricing-customers__description"><?php the_sub_field( 'section_description' ); ?></div>
        </div>
        <?php if ( have_rows( 'testimonial_list' ) ) : ?>
          <div class="pricing-testimonial">
            <?php while ( have_rows( 'testimonial_list' ) ) : the_row(); ?>
              <div class="pricing-testimonial__item">
                <div class="pricing-testimonial__content"><?php the_sub_field( 'testimonial_text' ); ?></div>
                <div class="pricing-testimonial__author"><?php the_sub_field( 'testimonial_author' ); ?></div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <div class="logos">
          @include('partials.new.featured-case-studies-ticker-static')
        </div>
      </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>
  
  
  <div class="bg-nk-blue-midnight text-white">
    <div class="container pb-16">
      <h2 class="text-2xl pt-2 -mb-10 text-center mx-auto">Frequently Asked Questions</h2>
      
    </div>
  </div>
  @include('partials.new.cta-banner')
@endsection
