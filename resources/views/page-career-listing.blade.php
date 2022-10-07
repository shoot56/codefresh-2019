@extends('layouts.app')

@section('content')
  @include('partials.content-career-listing')
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection
