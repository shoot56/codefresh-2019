@php
$heading = get_field( 'cf_infra_heading', 'options' );
$feats   = get_field( 'cf_infra_rep', 'options' );
@endphp

<div class="full-width bg-oxford-blue-50 py-16 md:py-32 cf-list {{$class ?? ''}}">

  @if( $wave )
    <div class="wrapper-wave">
      <span class="bg-wrapper-wave"></span>
      <span class="wave">@include('elements.wave')</span>
    </div>
  @endif

  <div class="container">

    @if ( $heading )
      <div class="md:text-center mb-10 md:mb-16">{!! __( $heading, 'codefresh' ) !!}</div>
    @endif

    <div class="flex flex-wrap -mx-4 justify-center">
      @if ( $feats )
        @foreach ( $feats as $feat )
          @php
            $link    = $feat['link'] ?: [];
            $linkArr = App\acf_link( $link );
          @endphp

          <div class="w-full md:w-1/2 px-4 mb-6">
            <div class="flex flex-col h-full w-full p-8 rounded-lg shadow-cf lg:p-12 {{ $loop->first ? 'bg-primary cf-list--light pattern-square' : 'bg-oxford-blue pattern-square-dark' }}">
              <div class="flex flex-wrap mb-8 lg:mb-6">
                <div class="relative mb-6 mr-6 w-24">
                  {!! wp_get_attachment_image( $feat['icon'], 'medium', false, [ 'class' => 'h-24 w-auto' ] ) !!}
                </div>
                <div class="w-full text-3xl font-display font-bold text-white leading-tight md:text-3xl lg:flex-1 lg:w-auto lg:max-w-2xs">
                  {!! __( $feat['title'], 'codefresh' ) !!}
                </div>
              </div>
              <div class="text-white">
                {!! __( $feat['text'], 'codefresh' ) !!}
              </div>

              {{-- Button --}}
              @if ( count( $linkArr ) )
                <div class="mt-auto">
                  <a class="btn btn-link text-white icon-anim mt-12" href="{{ esc_url( $linkArr['url'] ) }}" target="{{ esc_attr( $linkArr['target'] ) }}">
                    {{ $linkArr['title'] }} <i class="fas fa-arrow-right ml-1"></i>
                  </a>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      @endif
    </div>

  </div>

</div>
