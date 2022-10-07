{{--
  Template Name: Enterprise
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-enterprise')
@endsection

@section('content')
  @include('partials.content-enterprise')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
