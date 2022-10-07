<article @php post_class() @endphp>
  <header class="hero-post mb-8 lg:mb-12">
    <div class="-mx-4 md:mx-0">
      <div class="relative pb-1/3 w-full overflow-hidden bg-ph">
        @if( !has_post_thumbnail() )
          <img class="lazyload absolute top-0 left-0 h-full w-full object-cover" src="@asset('images/placeholder.jpg')" alt="{!! get_the_title() !!}">
        @else
          {{ the_post_thumbnail('large', ['class' => 'absolute top-0 left-0 h-full w-full object-cover']) }}
        @endif
      </div>
      <div class="w-full relative bg-oxford-blue-50 py-8 pr-4 pl-4 md:pr-8 md:pl-8">
        <div class="extra-bg hidden lg:block -mt-8"></div>
        @include('partials/entry-meta', ['class' => 'entry-meta--single'])
        <h1 class="text-3xl lg:text-4xl font-bold mt-3 mb-4 lg:pr-32">{!! App::title() !!}</h1>
        <div class="text-body-light font-bold text-xs mb-8">{{ App::reading_time() }}</div>
      </div>
      @include('partials/entry-author-top')
    </div>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages( ['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'codefresh'), 'after' => '</p></nav>'] ) !!}
    @include('partials.author')
    @include('partials.share')
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
