{{--
  Template Name: Careers
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-careers')
@endsection

@section('content')
  @include('partials.content-careers')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
