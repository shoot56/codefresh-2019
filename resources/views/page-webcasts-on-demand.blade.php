@extends('layouts.app', ['bodyClass' => 'bg-oxford-blue-50'])

@section('hero')
  @include('partials.hero-webcasts-on-demand')
@endsection

@section('content')
  @include('partials.content-webcasts-on-demand')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
