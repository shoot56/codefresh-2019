@php
$heading            = get_field('home_main_heading');
$short_desc         = get_field('home_main_short_text');
$note_link          = App\acf_link(get_field('home_hero_cta_link'));
$note_color         = get_field('home_hero_cta_color');
@endphp

@if ( get_field('takeover_enable'))
  @php
    $acf_link_primary   = get_field('takeover_link_primary');
    $acf_link_secondary = get_field('takeover_link_secondary');
  @endphp
@else
  @php
    $acf_link_primary   = get_field('home_link_primary');
    $acf_link_secondary = get_field('home_link_secondary');
  @endphp
@endif

@php
$link_primary       = App\_link($acf_link_primary);
$link_secondary     = App\_link($acf_link_secondary);
$video              = get_field('home_video');
@endphp

<div class="full-width">
  <div class="pt-24 pb-12 overflow-hidden md:pt-24">
    <div class="container">
      <div class="hero__content">
        <div class="grid lg:grid-cols-2 gap-y-6 md:gap-y-16 lg:gap-4 @if ( get_field('takeover_enable')) @else items-center @endif">
          @if ( get_field('takeover_enable'))
            <div class="relative lg:block lg:col-span-1 lg:order-last lg:pl-10">{!! get_field('takeover_side_content') !!}</div>
          @else
          <div id="animationContainer" class="animation-container hidden lg:block lg:col-span-1 lg:order-last"></div>
          @endif
          <div class="lg:col-span-1">
            <div class="max-w-90">
              <h1 class="mb-3 text-3xl lg:text-7xl lg:leading-xs">
                @component('components.text-gradient')
                  @if ( get_field('takeover_enable'))
                    {!! get_field('takeover_heading') !!}
                  @else
                    {!! $heading !!}
                  @endif
                @endcomponent
              </h1>

              @if ( get_field('takeover_enable'))
                {!! get_field('takeover_short_desc') !!}
              @else
                <div class="lead font-bold text-white">
                  {!! $short_desc !!}
                </div>
              @endif

              <div class="mt-4">
                @component('components.button', ['type' => 'primary', 'url' => $link_primary->url, 'class' => 'mt-2'])
                  {{ $link_primary->title }}
                @endcomponent

                <a class="new-link new-link-primary h-10 leading-10 inline-block ml-2 lg:ml-6 mt-2" href="{{ $link_secondary->url }}">
                  {{ $link_secondary->title }}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php /* @include('partials.new.customers') */ ?>
    </div>
  </div>

  <div class="hero-gradient"></div>
</div>
