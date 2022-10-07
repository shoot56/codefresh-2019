<div class="md:full-vh-header">
  <div class="asymm-header bg-nk-blue-marine md:bg-split-horizontal-marine-light z-50">
    <div class="container">
      <div class="">
        <a class="bg-nk-blue-marine" href="{{ esc_url( site_url() ) }}"><img class="filter brightness-0 invert" src="@asset('images/logo.svg')" alt="Codefresh"></a>
      </div>
    </div>
  </div>

  <div class="md:flex md:mt-header md:justify-center md:items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-32 md:pt-8 w-full">

      <div class="order-first md:order-first text-white">
        <h1 class="text-4xl text-white mt-8">{!! App::title() !!}</h1>
        @php the_content() @endphp
        <div class="flex flex-wrap mb-8">
          <div class="w-full text-center md:text-left text-sm font-display font-bold uppercase tracking-wider mb-4">You're in Good Company</div>
          <div class="text-center md:text-left filter brightness-0 invert opacity-70">
            @include('partials.new.featured-case-studies-static-logos')
          </div>
          <div class="mt-6 flex flex-wrap w-full justify-center md:justify-start">
            @include('partials.featured-g2-small')
          </div>
        </div>
      </div>

      <div class="order-last md:order-last text-white md:text-black mb-12">
            @if( has_post_thumbnail() )
                <div class="w-32 mx-auto mt-6 lg:mt-0 lg:w-48">
                    <div class="relative aspect-ratio-4/5">
                        {{ the_post_thumbnail( 'medium', array( 'class' => 'img-full' ) ) }}
                    </div>
                </div>
            @endif
            @if ( get_field('hubspot_form_embed'))
              {!! get_field('hubspot_form_embed') !!}
            @else
              {!! gravity_form( $form_id, false, false, false, '', false ) !!}
            @endif
      </div>

    </div>
  </div>
</div>