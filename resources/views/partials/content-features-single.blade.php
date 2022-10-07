@if ($features)
  <div class="mt-16 mb-20 space-y-16 md:space-y-32">
    @foreach ($features as $item)
      @include('components.feature-two-column', PageFeaturesSingle::featureData($item, $loop->index))
    @endforeach
  </div>
@endif

@include('components.banner-learn-more', PageFeaturesSingle::learnMoreLinks())

<div class="full-width">
  <div class="container">
    <div class="my-16 w-full md:my-24 md:w-1/2 lg:w-3/4 mx-auto">
      <div class="md:text-center mb-8 max-w-2xl mx-auto">
        {!! $go_advanced_content !!}
      </div>

      @if ($feature_comparison_images)
        <div id="featuresComparison">
          @foreach ($feature_comparison_images as $item)
            <img src="{{ esc_url($item['src']) }}" alt="{{ esc_attr($item['alt']) }}" class="img-fluid">
          @endforeach
        </div>
      @endif
    </div>

    @include('partials.section-testimonials')
  </div>
</div>
