{{--
  Template Name: Calendly
--}}

@extends('layouts.blank')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-calendly')
  @endwhile
@endsection
