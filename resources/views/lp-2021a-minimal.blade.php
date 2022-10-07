{{--
  Template Name: LP - 2021a Minimal
--}}

@extends('layouts.lp-2021a', ['bodyClass' => 'bg-white lp2021a'])

@section('content')
  @include('partials.lp-2021a-minimal')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
