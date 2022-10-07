{{--
  Template Name: Home New
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-home')
@endsection

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-home')
  @endwhile
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
