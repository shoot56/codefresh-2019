<div class="full-width">
  <div class="relative pt-16 bg-oxford-blue text-center">
    @if ($link_1['video'])
      <a href="{{ $link_1['video'] }}" target="foobox" class="block text-lg font-bold mr-md-3 mb-2 mb-md-0 md:inline-block">
        <i class="fas fa-play mr-2"></i>
        {{ $link_1['label'] }}
      </a>
    @endif

    @if ($link_2['url'])
      <a href="{{ $link_2['url'] }}" class="block text-lg font-bold md:inline-block" role="button" target="_blank" rel="noopener noreferrer" aria-label="Read Codefresh Documentation">
        <i class="fas fa-book-open mr-2"></i>
        {{ $link_2['label'] }}
      </a>
    @endif

    <img src="@asset('images/superfresh-laptop.png')" alt="Superfresh Laptop" class="lazyload block mt-12 mx-auto h-auto w-38">

    <div class="absolute bottom-0 left-0 h-1 w-full bg-gradient-to-r from-green-light to-blue"></div>
  </div>
</div>
