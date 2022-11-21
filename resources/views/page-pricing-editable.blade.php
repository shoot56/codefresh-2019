{{--
  Template Name: Pricing Editable Template
--}}

@extends('layouts.containerless', ['bodyClass' => 'bg-nk-silver'])

@section('content')
  
  <section class="price-promo-section">
    <div class="price-promo-section__bg">
        <img src="" alt="">
    </div>
    <div class="container">
        <div class="price-promo-section__head">
            <div class="price-promo-section__title"></div>
            <div class="price-promo-section__subtitle"></div>
        </div>
        <div class="price-promo-section__frame">
            <div class="pricing-columns">
                <div class="pricing-columns__item pricing-item">
                    <div class="pricing-item__name"></div>
                    <div class="pricing-item__description">

                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  
  
  <div class="bg-nk-blue-midnight text-white">
    <div class="container pb-16">
      <h2 class="text-2xl pt-2 -mb-10 text-center mx-auto">Frequently Asked Questions</h2>
      
    </div>
  </div>
  @include('partials.new.cta-banner')
@endsection
