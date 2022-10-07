@extends('layouts.app')

@section('before_content')
@include('components.banner-top')
@include('partials.blog-header')
@endsection

@section('content')
@include('partials.page-header')

@if (!have_posts())
<div class="alert alert-warning">
	{{ __('Sorry, no results were found.', 'codefresh') }}
</div>
{!! get_search_form(false) !!}
@endif

<div class="flex flex-wrap -mx-3">
	@while (have_posts()) @php the_post() @endphp
	<div class="w-full md:w-1/2 px-4 mb-8">
		@include('partials.content-'.get_post_type())
	</div>
	@endwhile
</div>

{!! cf_pagination() !!}
@endsection

@section('before_footer')
@include('partials.new.cta-banner')
@endsection