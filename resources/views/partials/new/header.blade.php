@php
$announcement_tag = get_field('home_hero_cta_tag') ?? __('New', 'codefresh');
$acf_link         = get_field('home_hero_cta_link');
$link             = App\_link($acf_link);
@endphp

<header class="header">
  @if (isset($link->url))
    <div class="w-full py-3 text-center" style="background: #142e4b; border-bottom: 1px solid #223b56;">
      <div class="container">
        <a
          href="{{ $link->url }}"
          target="{{ esc_attr( $link->target ) }}"
          class="font-display mx-auto text-white text-sm">
          <span class="inline-block bg-green-alpha rounded-pill px-2 text-green-light font-display font-black uppercase tracking-wider text-xs mr-2" style="line-height: 1.8;">
            {{ $announcement_tag }}
          </span>
          {!! $link->title !!}@include('partials.svg.chevron-right')
        </a>
      </div>
    </div>
  @endif

  @include('partials.new.header-insides')
</header>
