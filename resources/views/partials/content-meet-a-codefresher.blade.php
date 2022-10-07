<style scoped>
  .object-cover {
    width: 100% !important;
    height: unset !important;
  }
</style>
<article @php post_class('bg-white h-full flex flex-col overflow-hidden') @endphp>
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

	<div class="pt-6">
		<header>
			<div class="font-display uppercase font-bold tracking-wider text-xs mb-2 text-oxford-blue-400 entry-meta--single meet-a-codefresher-label">
        {!! __('Meet a Codefresher', 'codefresh') !!}
      </div>

			<h2 class="entry-title text-xl lg:text-2xl">
				<a href="{{ get_permalink() }}" class="font-bold">
          {!! get_the_title() !!}
        </a>
			</h2>

			<div class="-mt-4 meet-a-codefresher-excerpt">
      	{!! get_the_excerpt() !!}
			</div>
		</header>
	</div>
</article>
