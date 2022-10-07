<article @php post_class('bg-white h-full flex flex-col border border-gray rounded-md overflow-hidden') @endphp>
	<div class="relative pb-1/3 w-full overflow-hidden">
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

	<div class="p-6">
		<header>
			@include('partials/entry-meta')

			<h2 class="entry-title text-xl">
				<a href="{{ get_permalink() }}" class="text-dark hover:text-primary font-bold">
          {!! get_the_title() !!}
        </a>
			</h2>
		</header>
	</div>

	<div class="px-6 pb-6 mt-auto">
		@include('partials/entry-author')
	</div>
</article>
