{{--
  Template Name: Ebooks
--}}

@extends('layouts.app')

@section('hero')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.hero-ebooks')
  @endwhile
@endsection

@section('content')
  @include('partials.content-ebooks')
@endsection
