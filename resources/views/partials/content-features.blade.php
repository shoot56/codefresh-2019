@php
$quotes_link     = get_field( 'quotes_link' );
$s3_link         = get_field( 's3_link' );
$s4_link         = get_field( 's4_link' );
$s5_link_1       = get_field( 's5_link_1' );
$s5_link_2       = get_field( 's5_link_2' );
$s2_img          = get_field( 's2_img' );
$s3_img          = get_field( 's3_img' );
$s4_img          = get_field( 's4_img' );
$s6_img          = get_field( 's6_img' );
$s7_link         = get_field( 's7_link' );
$s7_link_arr     = App\acf_link( $s7_link );
$enterprise_feat = get_field( 'enterprise_feat' )[ 's5_features' ];
$count = 1;
@endphp

<section id="UltraFast" class="md:my-12">
  <div class="flex flex-wrap -mx-4 items-center">

    <div class="w-full md:w-1/2 px-4 md:order-last">
      <div class="flex flex-wrap">

          <div class="w-full">
            <span class="cf-feat-header">{{ get_field( 's2_header' ) }}</span>
            <h2 class="mb-10">{{ get_field( 's2_title' ) }}</h2>
          </div>

          @if( have_rows( 's2_features' ) )
            @while( have_rows( 's2_features' ) ) @php the_row() @endphp
              <div class="w-full mb-3">
                {!! get_sub_field( 'desc' ) !!}
              </div>
            @endwhile
          @endif

      </div>
    </div>

    <div class="w-full md:w-1/2 px-4 md:order-first">
      <img src="{{ $s2_img['url'] }}" alt="{{ $s2_img['alt'] }}">
    </div>

  </div>
</section>

{{-- Section --}}
<section class="full-width bg-oxford-blue-50 py-16">

  <div class="container">

    <div class="text-center">{!! get_field( 's3_title' ) !!}</div>

    <img src="{{ $s3_img['url'] }}" alt="{{ $s3_img['alt'] }}" class="w-90 block mx-auto">

    <div class="flex flex-wrap -mx-4 justify-center">

      @if( have_rows( 's3_features' ) )
        @while( have_rows( 's3_features' ) ) @php the_row() @endphp
          @php $icon = get_sub_field( 'icon' ) @endphp

          <div class="w-full md:w-1/2 px-4 mb-4">
            <div class="w-full mb-4">
              <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="h-16 w-auto mb-4">
              {!! get_sub_field( 'desc' ) !!}
            </div>
          </div>
        @endwhile
      @endif
    </div>

    @if( $s3_link['show'] )
      <div class="text-center mt-6">
        <a href="{{ $s3_link['link']['url'] }}" target="{{ $s3_link['link']['target'] ? $s3_link['link']['target'] : '_self' }}" class="btn inline-block btn-primary">{{ $s3_link['link']['title'] }}</a>
      </div>
    @endif

</section>

{{-- Section --}}
<section id="HandlesAnyWorkflow" class="mt-16">
  <div class="container">
    <div class="text-center"><span class="cf-feat-header">{{ get_field( 's4_header' ) }}</span></div>
    <h2 class="text-center mb-10">{{ get_field( 's4_title' ) }}</h2>

    <div class="flex flex-wrap -mx-4 items-center">
      <div class="w-full md:w-1/2 px-4"md:>

        <img src="{{ $s4_img['url'] }}" alt="{{ $s4_img['alt'] }}" class="block ml-auto mb-6 md:mb-0">
      </div>
      <div class="w-full md:w-1/2 px-4"md:>
        {!! get_field( 's4_subtitle' ) !!}
      </div>
    </div>
  </div>
</section>

  <div class="mx-auto" style="max-width:1800px;">
    <img class="my-16 block mx-auto" src="@asset('images/features-icons.png')" alt="">
  </div>

  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">

      @if( have_rows( 's4_features' ) )
        @while( have_rows( 's4_features' ) ) @php the_row() @endphp
          @php $icon = get_sub_field( 'icon' ) @endphp

          <div class="w-full lg:w-1/3 px-4 flex">
            <div class="bg-white p-4 lg:p-6 text-center shadow-lg rounded-lg">
              <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="h-16 w-auto mx-auto mb-3">
              {!! get_sub_field( 'desc' ) !!}
            </div>
          </div>

        @endwhile
      @endif

    </div>

  </div>

{{-- Section --}}
<section id="EnterpriseReady" class="enterprise-ready full-width my-16 pt-24">
  <div class="container">
    {{-- <div class="text-center"><span class="cf-feat-header text-center">{{ get_field( 's5_header' ) }}</span></div>
    <h2 class="text-center">{{ get_field( 's5_title' ) }}</h2>
    <p class="text-center">{{ get_field( 's5_subtitle' ) }}</p> --}}

    {{-- <div class="flex flex-wrap -mx-4 my-16">
      <div class="w-full md:w-1/2 px-4"md:>
        {!! get_field( 's5_text' ) !!}
      </div>
      <div class="w-full md:w-1/2 px-4 md:mt-3 mt-md-0">

        <div class="container">
          <div class="flex flex-wrap -mx-4 justify-center mb-4">

            @if( have_rows( 's5_features' ) )

              @while( have_rows( 's5_features' ) ) @php the_row() @endphp

                @php $icon = get_sub_field( 'icon' ) @endphp

                <div class="w-full">
                  <div class="flex flex-wrap mb-6">
                    <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="h-16 w-16 rounded-full mr-4">
                    <div class="flex-1">
                      {!! get_sub_field( 'desc' ) !!}
                    </div>
                  </div>
                </div>

              @endwhile

            @endif

          </div>
        </div>

      </div>
    </div> --}}

    <h2 class="md:text-center mb-10 mt-4 max-w-4xl mx-auto">
      Security. Power. Control. Codefresh Enterprise has everything your business needs:
    </h2>
    <div class="flex flex-wrap">

        @if( $enterprise_feat )

          @foreach ( $enterprise_feat as $item )

            @if( $count == 1 )
              <div class="w-full lg:w-1/4 mx-auto">
                <ul class="list-none p-0 mb-6">
                  <li class="mb-3"><i class="fas fa-badge-check text-primary mr-3"></i>{{ $item['item'] }}</li>
              @php $count++ @endphp
            @elseif( $count == 3 )
                  <li class="mb-3"><i class="fas fa-badge-check text-primary mr-3"></i>{{ $item['item'] }}</li>
                </ul>
              </div>
              @php $count = 1 @endphp
            @else
              <li class="mb-3"><i class="fas fa-badge-check text-primary mr-3"></i>{{ $item['item'] }}</li>
              @php $count++ @endphp
            @endif

          @endforeach

          @endif

    </div>

    <div class="md:text-center mt-6">

      @if( $s5_link_1['show'] )
        <a href="{{ $s5_link_1['link']['url'] }}" target="{{ $s5_link_1['link']['target'] ? $s5_link_1['link']['target'] : '_self' }}" class="btn block md:inline-block btn-outline-primary md:mr-4 mb-6 md:mb-0">{{ $s5_link_1['link']['title'] }}<i class="fas fa-arrow-right ml-3"></i></a>
      @endif

      @if($s5_link_2['show'])
        <a href="{{ $s5_link_2['link']['url'] }}" target="{{ $s5_link_2['link']['target'] ? $s5_link_2['link']['target'] : '_self' }}" class="btn block md:inline-block btn-outline-primary">{{ $s5_link_2['link']['title'] }}<i class="fas fa-arrow-right ml-3"></i></a>
      @endif

    </div>

  </div>

</section>

{{-- Section --}}
<section id="PowerfulFeatures" class="full-width mt-16 py-16 bg-oxford-blue-50">

  <div class="container">

      <h2 class="md:text-center mb-10 mb-lg-5 title-top">
        {!! get_field( 's6_header' ) !!}
      </h2>

      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/3 px-4">
            <img src="{{ $s6_img['url'] }}" alt="{{ $s6_img['alt'] }}" class="ml-auto mb-6 md:mb-0">
        </div>
        <div class="w-full lg:w-1/2 px-4">
            {!! get_field( 's6_text' ) !!}
        </div>
      </div>

      <div class="flex flex-wrap -mx-4 justify-center my-16">

        @if( have_rows( 's6_features' ) )
          @while( have_rows( 's6_features' ) ) @php the_row() @endphp
            @php $img = get_sub_field( 'img' ) @endphp

            <div class="w-full md:w-1/4 px-4 flex">
              <div class="bg-white text-center">
                <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" class="img-fluid">
                <div class="p-4">{!! get_sub_field( 'desc' ) !!}</div>
              </div>
            </div>

          @endwhile
        @endif

      </div>

      @if( have_rows( 's6_list' ) )
        <div class="max-w-70 mx-auto mt-12">

          <ul class="list-none p-0 md:text-center">
            @while( have_rows( 's6_list' ) ) @php the_row() @endphp
              <li class="inline-block mb-4">
                <i class="fas fa-badge-check text-primary mx-2"></i>
                {{ get_sub_field( 'item' ) }}
              </li>
            @endwhile
          </ul>

        </div>
      @endif

    </div>
</section>

<section>
  <div class="mb-12 md:mb-16 mt-20 md:mt-40 md:text-center">{!! __( get_field( 's7_header' ), 'codefresh' ) !!}</div>
  @if ( have_rows( 's7_features' ) )
    <div class="flex flex-wrap -mx-4 mb-20">
      @while ( have_rows( 's7_features' ) ) @php the_row() @endphp
        <div class="w-full md:w-1/2 px-4 mb-4">
          <div class="md:flex md:flex-col h-full w-full p-8 bg-white rounded-lg shadow-lg">
            <div class="mb-4">
              {!! wp_get_attachment_image( get_sub_field( 'icon' ), 'medium', false, [ 'class' => 'h-20 w-20' ] ) !!}
            </div>
            <div class="text-xl font-display font-bold cf-title-line cf-title-line--l">{{ __( get_sub_field( 'title', 'codefresh' ) ) }}</div>
            <div class="text-body-light">{!! __( get_sub_field( 'text', 'codefresh' ) ) !!}</div>
          </div>
        </div>
      @endwhile
    </div>
  @endif
  <div class="full-width bg-oxford-blue-50 py-8">
    <div class="wrapper-wave">
      <span class="bg-wrapper-wave"></span>
      <span class="wave">
        @include('elements.wave')
      </span>
    </div>
    <div class="container">
      <div class="md:text-center">{!! __( get_field( 's7_sub_header' ), 'codefresh' ) !!}</div>
      @if ( have_rows( 's7_sub_features' ) )
        @while ( have_rows( 's7_sub_features' ) ) @php the_row() @endphp
          @php $isImgLeft = get_sub_field( 'side' ) === 'left' ? true : false @endphp
          <div class="flex flex-wrap -mx-4 items-center {{$isImgLeft ? 'flex-row-reverse' : ''}}">
            <div class="w-full lg:w-1/2 my-4 px-4">
              <div class="px-8 md:p-8">
                {!! wp_get_attachment_image( get_sub_field( 'img' ), 'medium_large', false, [ 'class' => 'w-full' ] ) !!}
              </div>
            </div>
            <div class="w-full lg:w-1/2 px-4">
              <div class="text-xl font-display font-bold text-dark-alt cf-title-line cf-title-line--l">{{ __( get_sub_field( 'title' ), 'codefresh' ) }}</div>
              <div>{!! __( get_sub_field( 'text' ), 'codefresh' ) !!}</div>
            </div>
          </div>
        @endwhile
      @endif

      {{-- Button --}}
      @if( count( $s7_link_arr ) )
        <div class="my-8 text-center">
          <a class="btn btn-primary" href="{{ esc_url( $s7_link_arr['url'] ) }}" target="{{ esc_attr( $s7_link_arr['target'] ) }}">{{ esc_html( $s7_link_arr['title'] ) }}<i class="fas fa-arrow-right ml-3"></i></a>
        </div>
      @endif
    </div>
  </div>
</section>
