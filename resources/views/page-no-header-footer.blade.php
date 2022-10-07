{{--
  Template Name: No Header & Footer - Dark
--}}

@extends('layouts.app-no-header-footer', ['bodyClass' => 'bg-oxford-blue-50'])

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-no-header-footer', ['signIn' => 1])
  @endwhile
@endsection
