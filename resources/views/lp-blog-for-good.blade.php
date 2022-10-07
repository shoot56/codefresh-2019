{{--
  Template Name: LP - Blog for Good
--}}

@extends('layouts.no-header-footer')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.lp.blog-for-good')
  @endwhile
@endsection
