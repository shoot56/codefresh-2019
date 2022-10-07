{{--
  Template Name: GitOps
--}}

@extends('layouts.app')

@section('hero')
  @include('partials.hero-gitops')
@endsection

@section('content')
  @include('partials.content-gitops')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
