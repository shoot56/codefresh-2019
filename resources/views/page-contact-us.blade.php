{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-contact-us')
@endsection

@section('content')
  @include('partials.content-contact-us')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
