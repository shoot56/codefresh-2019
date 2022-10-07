{{--
  Template Name: Comparison
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-comparison' )
@endsection

@section('content')
  @include('partials.content-comparison' )
@endsection

@section('before_footer')
  @include('partials.footer-banner', ['shape' => true])
@endsection