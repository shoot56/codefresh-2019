<article @php post_class('h-full overflow-hidden text-center md:text-left') @endphp>

  @if ( get_field('show_hero_section'))
    <div class="cmp-21a-hero">
      <div class="@if ( get_field('hero_classes')){!! get_field('hero_classes') !!} @else bg-color-curve-blue pt-20 pb-4 @endif">
        <div class="container grid grid-cols-12">
          <div class="col-span-12 md:col-span-6">
            <h1 class="text-7xl bg-clip-text text-transparent bg-gradient-to-r from-green-light to-blue">{!! get_field('hero_title') !!}</h1>
            <div class="text-lg font-bold text-white mb-8">
              {!! get_field('hero_subtitle') !!}
            </div>
            @include('partials.cta-button-2021a')
            @if ( get_field('optional_hero_testimonial'))
            <div class="mt-8 text-xl text-gray2-aaa italic">{!! get_field('optional_hero_testimonial') !!}</div>
            <div class="mt-1 text-sm text-gray2-aaa italic">{!! get_field('optional_hero_attribution') !!}</div>
            @endif
          </div>
          <div class="col-span-12 md:col-span-6 md:pl-8 relative">
            <div class="">{!! get_field('hero_video') !!}</div>
          </div>
        </div>
      </div>
    </div>
    @if ( get_field('hero_bg_image_classes'))
      <div class="{!! get_field('hero_bg_image_classes') !!}">
        @if ( get_field('hero_bg_image_file'))
          <img class="{!! get_field('hero_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('hero_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_form'))
    @if ( get_field('show_form_at_top'))
      @include('partials.form-2021a')
    @endif
  @endif

  @if ( get_field('show_codefresh_argo_platform_wheel'))
    <div class="cmp-21a-cap-wheel text-left">
      <div class="@if ( get_field('cap_classes')){!! get_field('cap_classes') !!} @else  @endif">
        <div class="container">
          @include('partials.cap-wheel')
        </div>
      </div>
    </div>
    @if ( get_field('cap_bg_image_classes'))
      <div class="{!! get_field('cap_bg_image_classes') !!}">
        @if ( get_field('cap_bg_image_file'))
          <img class="{!! get_field('cap_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('cap_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_1'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_1_classes')){!! get_field('flexible_1_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_1_text') !!}
          </div>
          @if ( get_field('flexible_1_show_cta_buttons'))
            <div class="{!! get_field('flexible_1_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_1_bg_image_classes'))
      <div class="{!! get_field('flexible_1_bg_image_classes') !!}">
        @if ( get_field('flexible_1_bg_image_file'))
          <img class="{!! get_field('flexible_1_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_1_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_tabbed_section'))
    <div class="cmp-21a-detail-tabs">
      <div class="@if ( get_field('detail_tabs_classes')){!! get_field('detail_tabs_classes') !!} @else pt-28 pb-40 bg-curve-container bg-gradient-to-t from-color-curve-powder-blue to-white @endif">
        <div class="container">
          <h2 class="text-4xl">{!! get_field('detail_tabs_title') !!}</h2>
          <p class="text-2xl text-oxford-blue-400">{!! get_field('detail_tabs_description') !!}</p>

          <?php
          /*
          https://codeconvey.com/simple-css-tabs-without-javascript/
          or
          https://levelup.gitconnected.com/tabbed-interfaces-without-javascript-661bab1eaec8
          */
          ?>
          <div class="tab-wrap">
            <input type="radio" id="tab1" name="tabGroup1" class="tab hidden" checked>
            <label for="tab1" class="text-xl font-semibold text-dark-alt">{!! get_field('detail_tab_1_name') !!}</label>
            <input type="radio" id="tab2" name="tabGroup1" class="tab hidden">
            <label for="tab2" class="text-xl font-semibold text-dark-alt">{!! get_field('detail_tab_2_name') !!}</label>
            <input type="radio" id="tab3" name="tabGroup1" class="tab hidden">
            <label for="tab3" class="text-xl font-semibold text-dark-alt">{!! get_field('detail_tab_3_name') !!}</label>
            <div class="tab__content">
              {!! get_field('detail_tab_1_content') !!}
            </div>
            <div class="tab__content">
              {!! get_field('detail_tab_2_content') !!}
            </div>
            <div class="tab__content">
              {!! get_field('detail_tab_3_content') !!}
            </div>
          </div>
          @include('partials.cta-button-2021a')
        </div>
      </div>
    </div>
    @if ( get_field('detail_tabs_bg_image_classes'))
      <div class="{!! get_field('detail_tabs_bg_image_classes') !!}">
        @if ( get_field('detail_tabs_bg_image_file'))
          <img class="{!! get_field('detail_tabs_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('detail_tabs_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_trust_section'))
    <div class="cmp-21a-trust">
      <div class="@if ( get_field('trust_classes')){!! get_field('trust_classes') !!} @else  @endif">
        <div class="container">
          <div class="pricing-hero-text mt-20 mb-12 text-center">
            <h2 class="text-3xl text-oxford-blue mb-2">@if ( get_field('trust_title')) {!! get_field('trust_title') !!} @else Customers who love deploying with Codefresh @endif</h2>
            <p class="text-lg text-oxford-blue w-3/4 mx-auto mb-0">@if ( get_field('trust_title')) {!! get_field('trust_description') !!} @else Codefresh Enterprise is loved by companies doing healthcare, defense, finance, retail, and more. Designed for scale, enterprise-grade security, and including award-winning 24/7 support. @endif</p>
          </div>
          @include('partials.new.featured-case-studies-ticker-static')
        </div>
      </div>
    </div>
    @if ( get_field('trust_image_classes'))
      <div class="{!! get_field('trust_bg_image_classes') !!}">
        @if ( get_field('trust_image_file'))
          <img class="{!! get_field('trust_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('trust_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_testimonial_trio_section'))
    <div class="cmp-21a-testimonial-trio">
      <div class="@if ( get_field('testimonial_trio_classes')){!! get_field('testimonial_trio_classes') !!} @else  @endif">
        <div class="container">
          @include('partials.testimonial-trio')
        </div>
      </div>
    </div>
    @if ( get_field('testimonial_trio_image_classes'))
      <div class="{!! get_field('testimonial_trio_bg_image_classes') !!}">
        @if ( get_field('testimonial_trio_image_file'))
          <img class="{!! get_field('testimonial_trio_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('testimonial_trio_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_2'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_2_classes')){!! get_field('flexible_2_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_2_text') !!}
          </div>
          @if ( get_field('flexible_2_show_cta_buttons'))
            <div class="{!! get_field('flexible_2_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_2_bg_image_classes'))
      <div class="{!! get_field('flexible_2_bg_image_classes') !!}">
        @if ( get_field('flexible_2_bg_image_file'))
          <img class="{!! get_field('flexible_2_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_2_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_benefits_section'))
    <div class="cmp-21a-benefits">
      <div class="@if ( get_field('benefits_classes')){!! get_field('benefits_classes') !!} @else pt-16 pb-28 bg-gradient-to-t from-white via-bl-gradient-mint3 to-white @endif">
        <div class="container text-center">
          {!! get_field('benefits_optional_intro') !!}
          <h2 class="text-4xl mb-0">{!! get_field('benefits_title') !!}</h2>
          <div class="md:grid md:grid-cols-3">
            <div class="p-12 text-left">
              <div class="benefit-title text-4xl font-bold mb-4" style="{!! get_field('benefit1_color') !!}">{!! get_field('benefit1_title') !!}</div>
              <div class="benefit-description text-lg">{!! get_field('benefit1_description') !!}</div>
            </div>
            <div class="p-12 text-left">
              <div class="benefit-title text-4xl font-bold mb-4" style="{!! get_field('benefit2_color') !!}">{!! get_field('benefit2_title') !!}</div>
              <div class="benefit-description text-lg">{!! get_field('benefit2_description') !!}</div>
            </div>
            <div class="p-12 text-left">
              <div class="benefit-title text-4xl font-bold mb-4" style="{!! get_field('benefit3_color') !!}">{!! get_field('benefit3_title') !!}</div>
              <div class="benefit-description text-lg">{!! get_field('benefit3_description') !!}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if ( get_field('benefits_bg_image_classes'))
      <div class="{!! get_field('benefits_bg_image_classes') !!}">
        @if ( get_field('benefits_bg_image_file'))
          <img class="{!! get_field('benefits_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('benefits_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_3'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_3_classes')){!! get_field('flexible_3_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_3_text') !!}
          </div>
          @if ( get_field('flexible_3_show_cta_buttons'))
            <div class="{!! get_field('flexible_3_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_3_bg_image_classes'))
      <div class="{!! get_field('flexible_3_bg_image_classes') !!}">
        @if ( get_field('flexible_3_bg_image_file'))
          <img class="{!! get_field('flexible_3_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_3_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_4'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_4_classes')){!! get_field('flexible_4_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_4_text') !!}
          </div>
          @if ( get_field('flexible_4_show_cta_buttons'))
            <div class="{!! get_field('flexible_4_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_4_bg_image_classes'))
      <div class="{!! get_field('flexible_4_bg_image_classes') !!}">
        @if ( get_field('flexible_4_bg_image_file'))
          <img class="{!! get_field('flexible_4_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_4_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_5'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_5_classes')){!! get_field('flexible_5_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_5_text') !!}
          </div>
          @if ( get_field('flexible_5_show_cta_buttons'))
            <div class="{!! get_field('flexible_5_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_5_bg_image_classes'))
      <div class="{!! get_field('flexible_5_bg_image_classes') !!}">
        @if ( get_field('flexible_5_bg_image_file'))
          <img class="{!! get_field('flexible_5_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_5_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_6'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_6_classes')){!! get_field('flexible_6_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_6_text') !!}
          </div>
          @if ( get_field('flexible_6_show_cta_buttons'))
            <div class="{!! get_field('flexible_6_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_6_bg_image_classes'))
      <div class="{!! get_field('flexible_6_bg_image_classes') !!}">
        @if ( get_field('flexible_6_bg_image_file'))
          <img class="{!! get_field('flexible_6_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_6_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_7'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_7_classes')){!! get_field('flexible_7_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_7_text') !!}
          </div>
          @if ( get_field('flexible_7_show_cta_buttons'))
            <div class="{!! get_field('flexible_7_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_7_bg_image_classes'))
      <div class="{!! get_field('flexible_7_bg_image_classes') !!}">
        @if ( get_field('flexible_7_bg_image_file'))
          <img class="{!! get_field('flexible_7_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_7_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_8'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_8_classes')){!! get_field('flexible_8_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_8_text') !!}
          </div>
          @if ( get_field('flexible_8_show_cta_buttons'))
            <div class="{!! get_field('flexible_8_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_8_bg_image_classes'))
      <div class="{!! get_field('flexible_8_bg_image_classes') !!}">
        @if ( get_field('flexible_8_bg_image_file'))
          <img class="{!! get_field('flexible_8_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_8_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_flexible_9'))
    <div class="cmp-21a-flexible">
      <div class="@if ( get_field('flexible_9_classes')){!! get_field('flexible_9_classes') !!} @else text-left @endif">
        <div class="container">
          <div class="">
            {!! get_field('flexible_9_text') !!}
          </div>
          @if ( get_field('flexible_9_show_cta_buttons'))
            <div class="{!! get_field('flexible_9_buttons_align') !!}">
              @include('partials.cta-button-2021a')
            </div>
          @endif
        </div>
      </div>
    </div>
    @if ( get_field('flexible_9_bg_image_classes'))
      <div class="{!! get_field('flexible_9_bg_image_classes') !!}">
        @if ( get_field('flexible_9_bg_image_file'))
          <img class="{!! get_field('flexible_9_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('flexible_9_bg_image_file') !!}.svg" />
        @endif
      </div>
    @endif
  @endif

  @if ( get_field('show_form'))
    @if ( ! get_field('show_form_at_top'))
      @include('partials.form-2021a')
    @endif
  @endif

  @if ( get_field('footer_bg_image_file'))
    <div class="{!! get_field('footer_bg_image_classes') !!}">
      <img class="{!! get_field('footer_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('footer_bg_image_file') !!}.svg" />
    </div>
  @endif

</article>
