<div class="h-full p-4 md:p-12 rounded-lg shadow-lg bg-white text-center">
  <div class="w-9/12 mx-auto mb-4">
    <div class="relative aspect-ratio-square overflow-hidden rounded-full bg-white">
      @if (has_post_thumbnail())
        {!! the_post_thumbnail('thumbnail', ['class' => 'absolute h-full w-full object-cover']) !!}
      @else
        <img
          src="@asset('images/placeholder.jpg')"
          alt="{!! App::title() !!}"
          class="lazyload absolute h-full w-full object-cover">
      @endif
    </div>
  </div>

  <div class="font-display font-bold mb-2">{!! App::title() !!}</div>
  <div class="text-xs text-body-light">{!! PageAbout::teamMemberRole() !!}</div>
</div>
