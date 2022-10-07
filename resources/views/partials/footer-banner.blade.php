@php
$btn1 = get_field( 'banner_btn_1', 'option' );
$btn2 = get_field( 'banner_btn_2', 'option' );
@endphp

@component('components/before-footer', ['shape' => $shape ?? false])
  <div class="container">
    <div class="cta-banner shadow-cf">
     <div class="sm:text-left md:w-1/2">
        {!! get_field( 'banner_content', 'option' ) !!}
        <div class="hero-btn-wrap mt-4">
          @if( $btn1['show'] )
            <a class="btn btn-primary block lg:inline-block mb-10 lg:mb-0 sm:mr-2 createAcct" href="{{ esc_url( $btn1['link']['url'] ) }}">{{ $btn1['link']['title'] }}</a>
          @endif
          @if( $btn2['show'] )
            <a class="btn btn-outline-primary block lg:inline-block" href="{{ esc_url( $btn2['link']['url'] ) }}">{{ $btn2['link']['title'] }}</a>
          @endif
        </div>
     </div>
    </div>
  </div>
@endcomponent
