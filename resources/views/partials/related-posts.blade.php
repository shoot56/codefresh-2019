@if ($related_posts->have_posts())
	<div class="related-content">
		<div class="share-custom-title mt-4 mb-2">
			<h3>{!! __('Related Posts', 'codefresh') !!}</h3>
		</div>

		<div class="flex flex-wrap -mx-4 mb-12">
			@while ($related_posts->have_posts()) @php $related_posts->the_post() @endphp
				<div class="w-full md:w-1/2 px-4 mb-8">
					@include('partials.content-'.get_post_type())
				</div>
			@endwhile
			@php wp_reset_postdata() @endphp
		</div>
	</div>
@endif
