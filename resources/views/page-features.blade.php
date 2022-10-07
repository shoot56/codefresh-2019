{{--
  Template Name: Features
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-features')
@endsection

@section('content')
  @include('partials.content-features')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
