@include('partials.section-customers-slider')

<div class="py-4 lg:py-10">
  @if ($case_studies->have_posts())
    <div class="flex flex-wrap">
      <div class="flex flex-wrap -mx-3">
        @while ($case_studies->have_posts()) @php $case_studies->the_post() @endphp
          <div class="w-full md:w-1/2 lg:w-1/3 mb-6 px-3">
            @include('components.card-case-study', PageCaseStudies::cardDetails())
          </div>
        @endwhile
        @php wp_reset_postdata() @endphp
      </div>
    </div>
  @endif
</div>
