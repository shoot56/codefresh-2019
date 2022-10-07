{{--
  Template Name: LP - 2021a
--}}

@extends('layouts.lp-2021a', ['bodyClass' => 'bg-white lp2021a'])

@section('content')
  @include('partials.lp-2021a')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
