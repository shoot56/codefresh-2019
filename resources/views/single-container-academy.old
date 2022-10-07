@extends('layouts.app')

@section('hero')
  @include('partials.hero-single-'.get_post_type())
@endsection

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
