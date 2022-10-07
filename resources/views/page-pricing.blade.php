{{--
  Template Name: Pricing
--}}

@extends('layouts.containerless', ['bodyClass' => 'bg-nk-silver'])

@section('content')
  <div class="bg-gradient-to-b from-nk-blue-marine to-nk-blue-midnight has-separator relative">
    <div class="wrap container">
      @include('partials.pricing-plans')
    </div>
  </div>
  <div class="separator-container bg-nk-silver">
    <img src="/wp-content/themes/codefresh-2019/dist/images/nk/sep-blue-midnight.svg">
  </div>
  <div class="wrap container">
    <div class="mb-10">
      @include('partials.pricing-customer-trio')
    </div>
  </div>
  <?php /*
  <div class="separator-container bg-nk-blue-midnight">
    <img src="/wp-content/themes/codefresh-2019/dist/images/nk/sep-silver.svg">
  </div>
  <div class="bg-nk-blue-midnight">
    @include('partials.cta-sales-dark')
  </div>
  <div class="separator-container bg-nk-silver">
    <img src="/wp-content/themes/codefresh-2019/dist/images/nk/sep-blue-midnight.svg">
  </div>
  */?>
  <div class="separator-container bg-nk-blue-midnight">
    <img src="/wp-content/themes/codefresh-2019/dist/images/nk/sep-silver.svg">
  </div>
  <div class="bg-nk-blue-midnight text-white">
    <div class="container pb-16">
      <h2 class="text-2xl pt-2 -mb-10 text-center mx-auto">Frequently Asked Questions</h2>
      @include('partials.content-faq')
    </div>
  </div>
  <?php/* Begin footer below */?>
  @include('partials.new.cta-banner')
@endsection
