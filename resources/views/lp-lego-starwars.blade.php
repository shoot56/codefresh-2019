{{--
  Template Name: LP - Lego Star Wars
--}}

@extends('layouts.app-no-header-footer')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @include('partials.lp.lego-starwars-content')
  @endwhile
@endsection
