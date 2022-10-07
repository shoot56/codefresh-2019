<article @php post_class('w-full md:w-1/2 md:px-3 mb-6') @endphp>
  <div class="flex p-4 md:p-8 bg-white h-full w-full">
    <div class="relative h-12 w-12 rounded-full overflow-hidden shadow">
      <a href="{{ get_permalink() }}">
        <img
          src="{{ esc_url(PageWebcastsOnDemand::cardThumbnailURL()) }}"
          alt="{!! App::title() !!}" class="lazyload absolute top-0 left-0 h-full w-full object-cover">
      </a>
    </div>

    <div class="flex-1 flex flex-col w-full h-full ml-4">
      <h3 class="text-base md:text-lg">
        <a href="{{ get_the_permalink() }}" class="text-dark hover:text-primary">
          {!! App::title() !!}
        </a>
      </h3>

      @if(count(PageWebcastsOnDemand::cardTags()))
        <ul class="list-none p-0">
          @foreach (PageWebcastsOnDemand::cardTags() as $tag)
            <li class="inline-block px-3 py-1 text-xs mr-1 mb-1 text-primary bg-light rounded-lg">
              {{ $tag }}
            </li>
          @endforeach
        </ul>
      @endif

      <div class="mt-auto">
        <a href="{{ get_permalink() }}" class="underline inline-block text-dark hover:text-primary mt-4">
          {!! PageWebcastsOnDemand::cardLinkLabel() !!}<i class="fas fa-long-arrow-right ml-1"></i>
        </a>
      </div>
    </div>
  </div>
</article>
