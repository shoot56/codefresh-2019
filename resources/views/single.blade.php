@extends('layouts.app')

@section('before_content')
  @include('components.banner-top')
  @include('partials.blog-header')
@endsection

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile

  @include('partials.related-posts')
  @include('partials.newsletter')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
