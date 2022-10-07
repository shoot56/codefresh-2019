@php
$features = get_field( 'home_features' );
@endphp

<div class="cf-home-feature mx-auto mb-16">
  <div class="flex flex-wrap -mx-3">

    @if ( $features )
      @foreach ( $features as $feat )
      @php $img = $feat['image'] @endphp


      <div class="w-full lg:w-1/2 md:flex px-3">
        <article class="shadow-xl rounded-lg overflow-hidden md:flex mt-6">
          <div class="cf-home-feature__img-wrap relative overflow-hidden" style="background-color: {{ $feat['background_color'] }}">
            <img class="lazyload cf-home-feature__img cf-home-feature__img--{{$loop->iteration}}" src="{{ $img['url'] }}" alt="{{ $img['alt'] }}">
            <img src="@asset('images/shape-vertical.svg')" alt="Shape" class="absolute top-0 -right-2 h-full w-auto hidden md:block">
          </div>
          <div class="p-8 md:flex md:flex-col items-start">
            <span class="cf-home-feature__header title-top title-top--bg-primary">{{ $feat[ 'head_tag' ] }}</span>
            <h3 class="text-2xl mb-4">{!! $feat[ 'heading' ] !!}</h3>
            <p>{!! $feat[ 'text' ] !!}</p>

            <div class="mt-auto">
              <a href="{{ esc_url( $feat[ 'url' ] ) }}" class="btn btn-outline-primary inline-block mt-3">{{ $feat[ 'label' ] }} <i class="fas fa-long-arrow-right fa-sm" style="margin-left:3px;"></i></a>
            </div>
          </div>
        </article>
      </div>
      @endforeach
    @endif

  </div>
</div>
