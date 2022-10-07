<article @php post_class('h-full flex flex-col overflow-hidden') @endphp>
	<div class="relative aspect-ratio-16/9 w-full overflow-hidden">
		<a href="{{ get_permalink() }}" aria-label="{{ sprintf(__('Read more about %s', 'codefresh'), get_the_title()) }}">
			@if(has_post_thumbnail())
        {!! the_post_thumbnail('thumbnail absolute top-0 left-0 h-full w-full object-cover') !!}
			@else
        <img
          src="@asset('images/placeholder.jpg')"
          alt="{!! get_the_title() !!}"
          class="thumbnail absolute top-0 left-0 h-full w-full object-cover lazyload">
			@endif
		</a>
	</div>

	<div class="pt-4">
		<header>
      <div class="font-display uppercase font-bold tracking-wider text-2xs mb-2 entry-meta--single">
        <a href="{{ esc_url(get_post_type_archive_link('meet-a-codefresher')) }}" class="text-primary hover:text-primary-dark">
          {!! __('Meet a Codefresher', 'codefresh') !!}
        </a>
      </div>

			<div class="font-display text-xl">
				<a href="{{ get_permalink() }}" class="font-bold">
          {!! get_the_title() !!}
        </a>
			</div>
		</header>
	</div>
</article>
