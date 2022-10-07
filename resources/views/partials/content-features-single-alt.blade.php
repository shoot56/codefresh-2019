@php
$s1_rep = get_field('s1_rep');
$s2_rep = get_field('s2_rep');
$s3_rep = get_field('s3_rep');
$s4_rep = get_field('s4_rep');
$s1_img = get_field('s1_img');
$s2_img = get_field('s2_img');
$s5_btn = get_field('s5_button');
@endphp

<div class="mb-16">

  <div class="max-w-50 mx-auto lg:text-center mb-10">
    {!! get_field('s1_title') !!}
  </div>

  <div class="flex flex-wrap">
    <div class="w-full">
      <img src="{{ $s1_img['url'] }}" alt="{{ $s1_img['alt'] }}" class="img-fluid shadow mb-3">
    </div>

    <div class="w-full">
      <div class="flex flex-wrap -mx-4">

        @if( $s1_rep )
          @foreach ( $s1_rep as $item )
            <div class="w-full lg:w-1/3 px-4">
              <div class="flex flex-wrap mt-3">
                <img src="{{ $item['icon']['url'] }}" alt="$item['icon']['alt']" class="mr-3 mb-3">
                <div>
                  {!! $item['content'] !!}
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>

<div class="full-width mb-16">
  <div class="container">

    <div class="max-w-50 mx-auto lg:text-center mb-10">
      {!! get_field( 's2_title' ) !!}
    </div>

    <div class="mb-4 max-w-80 mx-auto s-feat-alt-img">
      <img src="{{ $s2_img['url'] }}" alt="{{ $s2_img['alt'] }}" class="img-main">
      <img src="@asset('images/circuit-1.svg')" alt="Circuit" class="img-circut-1 hidden md:block">
      <img src="@asset('images/circuit-2.svg')" alt="Circuit" class="img-circut-2 hidden md:block">
    </div>

    <div class="flex flex-wrap -mx-3">
      @if( $s2_rep )
        @foreach ( $s2_rep as $item )
          <div class="w-full lg:w-1/2 px-3 flex w-100">
            <div class="p-2 md:py-4 md:px-6 bg-white shadow-lg rounded-lg mb-4">
              {!! $item['content'] !!}
            </div>
          </div>
        @endforeach
      @endif
    </div>

  </div>
</div>

<div class="s-feat-alt-support full-width bg-oxford-blue-50 overflow-hidden">

  <div class="container mb-16">

    <div class="text-center mb-10">
      {!! get_field( 's3_title' ) !!}
    </div>

    <div class="flex flex-wrap -mx-3 justify-items-center">
        @if( $s3_rep )
        @foreach ($s3_rep as $item)
          <div class="w-1/2 md:w-1/4 mb-6">
            <img src="{{ $item['icon']['url'] }}" alt="$item['icon']['alt']" class="block mx-auto mb-4" width="80" height="80">
            <div class="text-center text-body-light font-display font-bold text-lg">{!! $item['desc'] !!}</div>
          </div>
        @endforeach
      @endif

    </div>
  </div>

</div>

<div class="container mb-16">

  <div class="max-w-60 mx-auto text-center mb-6 md:mb-10">
    {!! get_field( 's4_title' ) !!}
  </div>


  @if( $s4_rep )
    @foreach ( $s4_rep as $item )
    @php $dottedSide = $loop->iteration % 2 ? 'right' : 'left'; @endphp

      <div class="flex flex-wrap -mx-3 mt-16 items-center {{ $loop->iteration % 2 ? 'flex-row-reverse' : '' }}">
        <div class="w-full lg:w-1/2 px-3">
          <div class="with-dotted-bg">
            <img src="{{ $item['img']['url'] }}" alt="{{ $item['img']['alt'] }}" class="with-dotted-bg__main mb-3 img-fluid shadow">
            <img src="@asset('images/el-dotted.svg')" alt="Dotted" class="with-dotted-bg__dotted with-dotted-bg__dotted--{{$dottedSide}}">
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-3">
          <div class="md:p-6">
            {!! $item['content'] !!}
            <a href="{{ $item['url'] }}" class="btn btn-outline-primary inline-block mt-6">{{ $item['label'] }}<i class="fas fa-long-arrow-right ml-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    @endif

</div>

<div class="feat-s-alt-cta full-width py-6 text-white bg-oxford-blue md:text-center lg:py-10">
  <div class="container">
    <div class="max-w-60 mx-auto">{!! get_field( 's5_title' ) !!}</div>
    <a href="{{ esc_url( $s5_btn['url'] ) }}" class="btn btn-outline-primary inline-block mt-6">{{ $s5_btn['label'] }} <i class="fas fa-long-arrow-right ml-2"></i></a>
  </div>
</div>
