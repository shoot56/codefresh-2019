@extends('layouts.app')

@section('hero')
	@include('partials.hero-meet-a-codefresher')
@endsection

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-single-meet-a-codefresher')
  @endwhile
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
