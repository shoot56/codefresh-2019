@extends('layouts.app', ['class' => 'pt-0'])

@section('hero')
	@include('partials.hero-'.get_post_type())
@endsection

@section('content')
	@if (!have_posts())
		<div class="alert alert-warning">
			{{ __('Sorry, no results were found.', 'codefresh') }}
		</div>
		{!! get_search_form(false) !!}
	@endif

	@if (have_posts())
		<div class="row mb-8">
			@while (have_posts()) @php the_post() @endphp
				<div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
					@include('partials.content-'.get_post_type())
				</div>
			@endwhile
		</div>
	@endif

  {!! cf_pagination() !!}
@endsection

@section('before_footer')
	@include('partials.new.cta-banner')
@endsection
