{{--
  Template Name: Features Single Alt
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-features-single-alt')
@endsection

@section('content')
  @include('partials.content-features-single-alt')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
