<div class="row @if( $index % 2 )flex-row-reverse @endif">
  <div class="col w-full lg:w-2/5 mb-6 lg:mb-0 {{ $index % 2 ? 'mr-auto' : '' }}">
    @if($icon)
      <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="lazyload h-16 w-auto mb-4">
    @endif
    {!! $content !!}
  </div>

  <div class="col w-full lg:w-1/2 {{ $index % 2 ? 'mr-auto' : 'ml-auto' }}">
    <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="lazyload img-fluid">
  </div>
</div>
