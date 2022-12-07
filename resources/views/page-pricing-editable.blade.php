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
                        <?php 
                          if(get_sub_field( 'button_style' ) == 'outline') {
                            $buttonStyle = 'btn-bl-outline';
                          } else {
                            $buttonStyle = 'btn-bl-primary';
                          }
                        ?>
                        <a class="btn-bl block <?php echo $buttonStyle; ?>" href="<?php echo esc_url( $plan_button['url'] ); ?>" target="<?php echo esc_attr( $plan_button['target'] ); ?>"><?php echo esc_html( $plan_button['title'] ); ?></a>
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
                      <div class="plans-include-list__item-text">
                        <?php the_sub_field( 'text' ); ?>
                      </div>
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
        <div class="pricing-customers__head text-oxford-blue">
          <?php if (get_sub_field( 'section_title' )): ?>
            <h2 class="pricing-customers__title"><?php the_sub_field( 'section_title' ); ?></h2>
          <?php endif; ?>
          <?php if (get_sub_field( 'section_description' )): ?>
            <div class="pricing-customers__description text-lg"><?php the_sub_field( 'section_description' ); ?></div>
          <?php endif; ?>
        </div>
        <?php get_field( 'testimonial_template' ); ?>
        <?php $state = true; ?>
        <?php if (get_field( 'testimonial_template' ) == 'video'): ?>
          <?php if ( have_rows( 'testimonial_video_list' ) ) : ?>
            <?php $count = 0; ?>
            <div class="relative testimonials">
    
              <div class="md:w-4/5 mx-auto">
            
                <div class="items-center" demo="tabs" role="tablist">
                  <?php while ( have_rows( 'testimonial_video_list' ) ) : the_row(); ?>
                    <?php $count++;  ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php if ( $logo ) : ?>
                      
                      <input name="tabs" type="radio" id="tab-<?php echo $count; ?>" aria-labelledby="tab-label-<?php echo $count; ?>" aria-roledescription="tab" <?php if ($count == 1): ?> checked="" <?php endif; ?>>
                      <label role="tab" for="tab-<?php echo $count; ?>" id="tab-label-<?php echo $count; ?>" aria-hidden="true"><img src="<?php echo esc_url( $logo['url'] ); ?>"></label>
                    <?php endif; ?>
                  <?php endwhile; ?>
                  <a class="btn-bl btn-bl-primary-text align-middle bl-fas bl-fa-chevron-right" href="/case-studies/" id="tab-label-5" aria-hidden="true">See all case studies</a>

                  <?php $count = 0; ?>
                  <?php while ( have_rows( 'testimonial_video_list' ) ) : the_row(); ?>
                    <?php $count++;  ?>
                    <?php $testimonial_case_study = get_sub_field( 'testimonial_case_study' ); ?>
                    <?php $testimonial_preview_image = get_sub_field( 'testimonial_preview_image' ); ?>
                    <div role="tabpanel" aria-labelledby="tab-label-<?php echo $count; ?>">
                      <div class="md:grid grid-cols-2">
                        <div class="md:inline-block align-top text-white bg-gradient-to-r from-oxford-blue to-nk-blue-marine p-10 rounded-lg relative z-20 shadow-nk-qd2">
                          <p class="text-2xl font-bold font-display mb-6">"<?php the_sub_field( 'text' ); ?>"</p>
                          <p class="text-lg font-bold font-display mb-1"><?php the_sub_field( 'author_name' ); ?></p>
                          <p class="text-sm mb-6"><?php the_sub_field( 'author_post' ); ?></p>
                          <?php if ( $testimonial_case_study ) : ?>
                            <p class="mb-0"><a class="btn-bl btn-bl-white-text bl-fas bl-fa-chevron-right" href="<?php echo get_permalink( $testimonial_case_study ); ?>">View the Case Study</a></p>
                          <?php endif; ?>
                        </div>
                        <div class="hidden md:inline-block align-top bg-nk-gray1 text-center rounded-lg relative z-10 md:top-10 md:-left-10">
                          <?php if ( $testimonial_preview_image ) : ?>
                            <a href="javascript:void(0)" onclick="lightbox_open('videoTestimonial<?php echo $count; ?>', 'light<?php echo $count; ?>', 'fade<?php echo $count; ?>');" class="inline-block rounded" style="background-position:center; background-size:cover; height:100%; position:relative; width:100%; background-image:url(<?php echo esc_url( $testimonial_preview_image['url'] ); ?>);"><i class="absolute bottom-8 right-8 fas fa-3x fa-play-circle text-white bg-nk-blue-marine rounded-full"></i></a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <?php $count = 0; ?>
              <?php while ( have_rows( 'testimonial_video_list' ) ) : the_row(); ?>
                <?php $count++;  ?>
                <?php if ( get_sub_field( 'testimonial_video' ) ) : ?>
                  <div id="light<?php echo $count; ?>">
                    <a class="boxclose" id="boxclose" onclick="lightbox_close('videoTestimonial<?php echo $count; ?>', 'light<?php echo $count; ?>', 'fade<?php echo $count; ?>');"></a>
                    <video id="videoTestimonial<?php echo $count; ?>" width="640" controls>
                      <source src="<?php the_sub_field( 'testimonial_video' ); ?>" type="video/mp4">
                    </video>
                  </div>
                  <div id="fade<?php echo $count; ?>" onClick="lightbox_close('videoTestimonial<?php echo $count; ?>', 'light<?php echo $count; ?>', 'fade<?php echo $count; ?>');"></div>
                <?php endif; ?>
              <?php endwhile; ?>
            
              <script>
                function lightbox_open(videoIdToOpen, lightId, fadeId) {
                  var videoElementToOpen = document.getElementById(videoIdToOpen);
                  var lightElement = document.getElementById(lightId);
                  var fadeElement = document.getElementById(fadeId);
                  lightElement.style.display = 'block';
                  fadeElement.style.display = 'block';
                  videoElementToOpen.play();
                }
                function lightbox_close(videoIdToClose, lightId, fadeId) {
                  var videoElementToClose = document.getElementById(videoIdToClose);
                  var lightElement = document.getElementById(lightId);
                  var fadeElement = document.getElementById(fadeId);
                  lightElement.style.display = 'none';
                  fadeElement.style.display = 'none';
                  videoElementToClose.pause();
                }
              </script>
            
            </div>

            
            
            
          <?php endif; ?>


          
        <?php elseif (get_field( 'testimonial_template' ) == 'text'): ?>
          <?php if ( have_rows( 'testimonial_list' ) ) : ?>
            <div class="pricing-testimonial">
              <?php while ( have_rows( 'testimonial_list' ) ) : the_row(); ?>
                <div class="pricing-testimonial__item shadow-lg bg-white">
                  <div class="pricing-testimonial__content mb-4 text-base"><?php the_sub_field( 'testimonial_text' ); ?></div>
                  <?php if (get_sub_field( 'testimonial_author' )): ?>
                    <div class="pricing-testimonial__author text-sm"><?php the_sub_field( 'testimonial_author' ); ?></div>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <div class="logos">
            @include('partials.new.featured-case-studies-ticker-static')
          </div>
        
        <?php endif; ?>
        
      </div>
    </section>
	<?php endwhile; ?>
<?php endif; ?>

















  
  
  <div class="bg-nk-blue-midnight text-white faq-section">
    <div class="container pb-16">
      <h2 class="text-2xl pt-2 -mb-10 text-center mx-auto">Frequently Asked Questions</h2>
      <section class="faq">
        <?php 
        $faq_posts = get_posts( array(
          'numberposts' => -1,
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'faq',
        ) );
        ?>
        <?php if ($faq_posts): ?>
          <ul class="accordion list-none p-0 my-16 mx-auto max-w-3xl" id="faq">
            <?php global $post; ?>
            <?php foreach( $faq_posts as $post ):?>
              <?php setup_postdata( $post ); ?>
                <li id="post-@php the_id() @endphp" class="border-b-2 border-light">
                  <button class="accordionBtn flex items-center text-left py-5 px-4 w-full shadow-none bg-transparent font-normal md:text-xl focus:outline-none" type="button">
                    @php the_title() @endphp
                    <i class="fas fa-chevron-down fa-xs ml-auto"></i>
                  </button>
          
                  <div class="accordionItem hidden px-4">
                    @php the_content() @endphp
                  </div>
                </li>
            <?php endforeach; ?>
          </ul>
        <?php else:?>
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'codefresh') }}
          </div>
        <?php endif; ?>
  
        <?php wp_reset_postdata(); ?>
      </section>

    </div>
  </div>
  <script type="text/javascript">
  var scrollToAndOpenFaqItem = function(faqId) {
    var faqIdName = 'post-' + faqId;
    var faqOpenButton = '#' + faqIdName + ' .accordionItem';
    document.querySelector(faqOpenButton).style.display = 'block';
    document.getElementById(faqIdName).scrollIntoView({behavior: 'smooth'});
  }

  const scrollbtn = document.querySelector('.scroll-to-faq');
  scrollbtn.addEventListener("click", function() {
    let target = this.dataset.target;
    scrollToAndOpenFaqItem(target);
  });


  </script>
  @include('partials.new.cta-banner')
@endsection
