{{--
  Template Name: Thank you - Demo
--}}

@extends('layouts.app-no-header-footer', ['bodyClass' => 'bg-oxford-blue-50'])

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-thx-demo')
  @endwhile
@endsection
