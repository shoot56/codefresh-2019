@php
$term = get_queried_object();
@endphp

@extends('layouts.app-glossary')

@section('banner')
@include('partials.glossary-banner')
@endsection

@section('module-article-content')
@include('partials.glossary-module-article-content')
@endsection

@section('content')
@include('partials.glossary-content')
@endsection

@section('module-related-articles')
@include('partials.glossary-module-related-articles')
@endsection