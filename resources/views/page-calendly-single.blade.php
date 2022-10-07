{{--
  Template Name: Calendly Single
--}}

@extends('layouts.app-no-header-footer')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-calendly-single')
  @endwhile
@endsection
