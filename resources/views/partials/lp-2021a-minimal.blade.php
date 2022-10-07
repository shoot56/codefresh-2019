<article @php post_class('h-full overflow-hidden text-center md:text-left') @endphp>

  @if ( get_field('show_hero_section'))
    <div class="cmp-21a-hero">
      <div class="bg-color-curve-blue pt-20 pb-10">
        <div class="container grid grid-cols-12">
          @if ( get_field('hero_video'))
          <div class="col-span-12 md:col-span-6">
          @else
          <div class="col-span-12 md:col-span-12">
          @endif
            <h1 class="text-4xl text-white">{!! get_field('hero_title') !!}</h1>
            <p class="text-2xl text-white mb-8">
              {!! get_field('hero_subtitle') !!}
            </p>
            @if ( get_field('cta_primary_button_text'))
              <div class="cta-buttons">
                <a href="{!! get_field('cta_primary_button_url') !!}" class="btn btn-primary">{!! get_field('cta_primary_button_text') !!}<i class="fas fa-sm fa-chevron-right ml-3"></i></a>
              </div>
            @endif
          </div>
          @if ( get_field('hero_video'))
            <div class="col-span-12 md:col-span-6 md:pl-8">
              <div class="">{!! get_field('hero_video') !!}</div>
            </div>
          @endif
        </div>
      </div>
      @if ( !get_field('bare_page'))
        <div class="pb-20 bg-curve-container bg-gradient-to-b from-bl-gradient-teal2 via-bl-gradient-mint2 to-white">
          @include('partials.bg-curve-top-blue')
        </div>
      @endif
    </div>
  @endif

  <div class="cmp-21a-minimal-content">
    <div class="container">
      <div class="">
         {!! get_field('main_content') !!}
      </div>
    </div>
  </div>

  @if ( get_field('form_title'))
    <div class="cmp-21a-form">
      <div class="pt-20 pb-40 bg-curve-container bg-gradient-to-t from-color-curve-powder-blue to-white">
        @include('partials.bg-curve-bottom-white')
        <div class="container">
          <div id="sign-up" class="max-w-md mx-auto">
            <div class="">
              <h2 class="text-4xl mb-2 text-primary @if ( !get_field('align_heading'))text-center @endif">{!! get_field('form_title') !!}</h2>
              <div class="text-xl @if ( !get_field('align_heading'))text-center @endif">{!! get_field('form_subtitle') !!}</div>
              <div class="form-wrapper">
                {!! gravity_form( get_field('form_id'), $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

  @if ( !get_field('bare_page'))
    <div class="bg-curve-container">
        @include('partials.bg-curve-bottom-blue')
    </div>
  @endif

</article>
