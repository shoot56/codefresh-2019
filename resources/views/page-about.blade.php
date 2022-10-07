{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-about')
@endsection

@section('content')
  @include('partials.content-about')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
