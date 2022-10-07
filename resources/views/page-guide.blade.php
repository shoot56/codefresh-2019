{{--
  Template Name: LP - Guide
--}}

@extends('layouts.app-no-header-footer')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-no-header-footer', ['signIn' => 0])
  @endwhile
@endsection
