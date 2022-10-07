{{--
  Template Name: LP - 2021b
--}}

@extends('layouts.lp-2021b', ['bodyClass' => 'bg-white lp2021b'])

@section('content')
  @include('partials.lp-2021b')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
