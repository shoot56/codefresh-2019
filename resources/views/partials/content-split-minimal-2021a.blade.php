<div class="md:full-vh-header">
  <div class="asymm-header bg-nk-blue-marine">
    <div class="container">
      <div class="">
        <a href="{{ esc_url( site_url() ) }}"><img class="filter brightness-0 invert @if ( get_field('one_column') ) mx-auto @endif" src="@asset('images/logo.svg')" alt="Codefresh"></a>
      </div>
    </div>
  </div>

  <div class="md:flex md:mt-header md:justify-center md:items-center">
    <div class="grid grid-cols-1 @if ( get_field('one_column') ) max-w-md @else md:grid-cols-2 md:gap-x-32 @endif md:pt-8 w-full">

      <div class="order-first mb-12 md:order-first text-center @if ( get_field('one_column') ) @else md:text-left @endif text-white">
        {!! get_field('primary_content') !!}
        <div class="flex flex-wrap mb-8">
          @if ( get_field('show_logos') )
            <div class="w-full text-center @if ( get_field('one_column') ) @else md:text-left @endif text-sm font-display font-bold uppercase tracking-wider mb-4">You're in Good Company</div>
            <div class="filter brightness-0 invert opacity-70">
              @include('partials.new.featured-case-studies-static-logos')
            </div>
          @endif
          @if ( get_field('show_g2_badges') )
            <div class="mt-6 flex flex-wrap w-full justify-center @if ( get_field('one_column') ) @else md:justify-start @endif">
              @include('partials.featured-g2-small')
            </div>
          @endif
        </div>
      </div>

      @if ( get_field('one_column') )
      @else
        <div class="order-last md:order-last mb-12">
          {!! get_field('secondary_content') !!}
          @if ( get_field('sign_up_links') )
            <div class="flex flex-wrap w-full">
              @include('partials.signup-options-2021a')
            </div>
          @endif
        </div>
      @endif

    </div>
  </div>
</div>