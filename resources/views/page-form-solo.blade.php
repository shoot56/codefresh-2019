{{--
  Template Name: Form Solo
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-form-solo')
@endsection

@section('content')
  @include('partials.content-form-solo')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
