@php
$heroTitle      = get_field('bfg_hero_content');
$heroImgId      = get_field('bfg_hero_img');
$heroBg         = get_field('bfg_hero_bg');
$heroBtnLabel   = get_field('bfg_hero_btn_label') ?? 'Submit a post';
$charitiesTitle = get_field('bfg_charities_title');
$charitiesColor = get_field('bfg_charities_color_rep');
$charitiesWhite = get_field('bfg_charities_white_rep');
$charitiesImgId = get_field('bfg_charities_img');
$stepsTitle     = get_field('bfg_how_it_works_title');
$steps          = get_field('bfg_how_it_works_rep');
$more           = get_field('bfg_more');
$sections       = get_field('bfg_two_col_img_rep');
$formTitle      = get_field('bfg_form_title');
$formText       = get_field('bfg_form_text');
$formId         = get_field('bfg_form_id') ?? 44;
@endphp

<div class="full-width bfg-hero py-4 md:py-32 bg-cover lazyload" style="background-image:url({{ $heroBg }});">
  <div class="container">
    <div class="mb-8"><img src="@asset('images/logo.svg')" alt="Codefresh"></div>
    <div class="flex flex-wrap -mx-4 items-center">
      <div class="w-full md:w-1/2 px-4">
        {!! $heroTitle !!}
        <a href="#submit" class="btn btn-primary inline-block mt-2 md:mt-6">{{ __( $heroBtnLabel, 'codefresh' ) }}</a>
      </div>
      <div class="w-full md:w-1/2 px-4">
        {!! wp_get_attachment_image( $heroImgId, 'medium_large', false, [ 'class' => 'w-full' ] ) !!}
      </div>
    </div>
  </div>
</div>

@if ( $charitiesWhite )
<div class="full-width bg-primary py-12 md:py-20">
  <div class="container">
    <div class="md:flex md:flex-wrap md:items-center md:justify-center text-white">
      <div class="text-lg text-center mb-8 md:mt-8 md:mb-0 xl:mt-0">{{ __( 'Charities', 'codefresh' ) }}</div>
      @foreach ( $charitiesWhite as $item )
        <div style="max-width: {{ $item['width'] ?? 'none' }}px;" class="mx-auto mt-6 md:mt-8 md:mx-8 xl:mt-0 xl:mx-4">
          {!! wp_get_attachment_image( $item['logo'], 'medium', false, [ 'class' => 'mx-auto w-full h-auto' ] ) !!}
        </div>
      @endforeach
    </div>
  </div>
</div>
@endif

@if ( $steps )
  <div class="full-width bg-oxford-blue-50 py-16 md:py-24">
    <div class="container">

      <h2 class="mb-12">{{ __( $stepsTitle, 'codefresh' ) }}</h2>

      @foreach ( $steps as $step )
        <div class="bfg-step mt-32 p-4 md:px-12 md:py-16 bg-white rounded-lg shadow-lg">
          <div class="flex flex-wrap -mx-4{{ $step['img_side'] === 'right' ? ' flex-row-reverse' : ' text-right' }}">
            <div class="w-full md:w-1/3 px-4 relative">
              {!! wp_get_attachment_image( $step['img'], 'medium_large', false, [ 'class' => 'h-auto w-full px-8 md:absolute md:bottom-0 mb-4 -mt-16 md:mt-0 lg:-mb-12' ] ) !!}
            </div>
            <div class="w-full md:w-2/3 px-4">
              <h3 class="text-xl cf-title-line cf-title-line--{{ $step['img_side'] === 'right' ? 'l' : 'r' }}">{{ __( $step['title'], 'codefresh' )}}</h3>
              <p>{{ __( $step['text'], 'codefresh' ) }}</p>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endif

@if ( $charitiesColor )
  <div class="full-width bg-oxford-blue-50 py-16">
    <div class="container">

      <h2 class="mb-8 md:mb-20 md:text-center">{{ __( $charitiesTitle, 'codefresh' ) }}</h2>

      <div class="bfg-support">
        <div class="flex flex-wrap -mx-4 items-center justify-center">

          <div class="w-full md:w-1/3 px-4 lg:order-1 lg:pr-24">
            @foreach ( $charitiesColor as $item )
              @if ( $loop->index < 3 )
                <a href="{{ esc_url( $item['url'] ) }}" target="_blank" rel="noopener noreferrer">
                  <div class="relative h-48 px-8 py-12 bg-white shadow-md rounded-lg my-6 hover:shadow-lg transition-all duration-200 ease-in">
                    <div style="max-width: {{ $item['width'] ?? 'none' }}px;" class="bfg-support__logo">
                      {!! wp_get_attachment_image( $item['logo'], 'medium', false, [ 'class' => 'mx-auto w-full h-auto' ] ) !!}
                    </div>
                  </div>
                </a>
              @endif
            @endforeach
          </div>

          <div class="w-full md:w-1/3 px-4 lg:order-3 lg:pl-32">
             @foreach ( $charitiesColor as $item )
              @if ( $loop->index > 2 )
                <a href="{{ esc_url( $item['url'] ) }}" target="_blank" rel="noopener noreferrer">
                  <div class="relative h-48 px-8 py-12 bg-white shadow-md rounded-lg my-6 hover:shadow-lg transition-all duration-200 ease-in">
                    <div style="max-width: {{ $item['width'] ?? 'none' }}px;" class="bfg-support__logo">
                      {!! wp_get_attachment_image( $item['logo'], 'medium', false, [ 'class' => 'mx-auto w-full h-auto' ] ) !!}
                    </div>
                  </div>
                </a>
              @endif
            @endforeach
          </div>

          <div class="w-full lg:w-1/3 px-4 lg:order-2">
            {!! wp_get_attachment_image( $charitiesImgId, 'large', false, [ 'class' => 'w-full' ] ) !!}
          </div>

        </div>
      </div>

      <div class="text-center text-xl mt-4 lg:mt-10">
        {!! $more !!}
      </div>

    </div>
  </div>
@endif

@if ( $sections )
  <div class="bfg-section full-width bg-oxford-blue-50 py-16 md:py-20">
    <div class="container">
      @foreach ( $sections as $item )
        <div class="flex flex-wrap -mx-4 items-center{{ $item['img_side'] === 'right' ? ' flex-row-reverse' : ' text-right' }}">
          <div class="w-full md:w-1/2 lg:w-3/5 px-4 mb-12 md:mb-0">
            <div class="p-4 bg-white shadow-lg rounded-lg">
              {!! wp_get_attachment_image( $item['img'], 'large', false, [ 'class' => 'w-full' ] ) !!}
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-2/5 px-4">
            {!! $item['text'] !!}
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endif

<div id="submit" class="bfg-form full-width py-16 bg-primary">
  <div class="container">
    <h2 class="relative z-10 md:text-center mb-12 text-3xl text-white">
      {{ __( $formTitle, 'codefresh' ) }}
    </h2>
    <div class="relative z-10 -mx-4 md:mx-0 px-4 py-8 md:py-12 md:px-16 bg-white shadow-lg md:rounded-lg">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 px-4">
          {!! $formText !!}
        </div>
        <div class="w-full md:w-1/2 px-4">
          {!! gravity_form( $formId, false, false, false, '', false ) !!}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="md:flex py-8">
  <img src="@asset('images/logo.svg')" alt="Codefresh" class="lazyload mb-2 md:mb-0">
  <small class="ml-auto">{{ sprintf( __( '© %s Codefresh. All rights reserved', 'codefresh' ), date( 'Y' ) ) }}</small>
</div>
