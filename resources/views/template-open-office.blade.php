{{--
    Template Name: Open Office Hours
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-open-office')
@endsection

@section('content')
  @include('partials.content-open-office')
@endsection

@section('before_footer')
  <div class="full-width">
    <div class="wrapper-wave">
      <span class="bg-wrapper-wave"></span>
      <span class="wave">
        @include('elements.wave')
      </span>
    </div>
  </div>
@endsection
