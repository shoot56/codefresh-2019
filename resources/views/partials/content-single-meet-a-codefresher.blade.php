<article @php post_class() @endphp>
  <header class="hero-post">
    <div class="-mx-4 md:mx-0">
      <div class="relative aspect-ratio-16/9 w-full">
        @if( !has_post_thumbnail() )
          <img class="lazyload absolute top-0 left-0 h-full w-full object-cover" src="@asset('images/placeholder.jpg')" alt="{!! get_the_title() !!}">
        @else
          {{ the_post_thumbnail('large', ['class' => 'absolute top-0 left-0 h-full w-full object-cover']) }}
        @endif
      </div>

      <div class="w-full relative pt-8 pr-4 pl-4 md:pr-8 md:pl-0">
        <div class="font-display uppercase font-bold tracking-wider text-xs mb-2 entry-meta--single">
          <a href="{{ esc_url(get_post_type_archive_link('meet-a-codefresher')) }}" class="text-primary hover:text-primary-dark">
            {!! __('Meet a Codefresher', 'codefresh') !!}
          </a>
        </div>
        <h1 class="text-3xl lg:text-4xl font-bold mt-3 mb-0 lg:pr-32">{!! App::title() !!}</h1>
      </div>
    </div>
  </header>

  <div class="entry-content pb-12">
    @php the_content() @endphp
  </div>
</article>
