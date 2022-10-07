@extends('layouts.app-glossary-index')

@section('banner')
@include('partials.glossary-index-banner')
@endsection

@section('module-clusters')
@include('partials.glossary-index-module-clusters')
@endsection

@section('content')
@include('partials.glossary-index-content')
@endsection


<!-- ^^ this is where the main and left sections will be specified -->