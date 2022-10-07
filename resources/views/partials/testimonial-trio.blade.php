<div class="mt-20 mb-12 text-center">
  <h2 class="text-4xl text-oxford-blue mb-2">{!! get_field('testimonials_title') !!}</h2>
  <p class="text-lg text-oxford-blue w-3/4 mx-auto mb-0">{!! get_field('testimonials_description') !!}</p>
</div>

<div class="testimonial-trio-cards row">

  <div class="testimonial-trio-card-wrapper w-full lg:w-1/3">
    <div class="testimonial-trio-card">
      <div class="testimonial-trio-quote">
        <i class="fas fa-quote-left fa-lg block mb-3"></i>
        {!! get_field('testimonial1_body') !!}
      </div>
      <div class="testimonial-trio-attribution">
        <div class="testimonial-trio-name">
          {!! get_field('testimonial1_author') !!}
          <em class="testimonial-trio-title">{!! get_field('testimonial1_position') !!}</em>
        </div>
        <div class="testimonial-trio-company">{!! get_field('testimonial1_company') !!}</div>
      </div>
    </div>
  </div>

  <div class="testimonial-trio-card-wrapper w-full lg:w-1/3">
    <div class="testimonial-trio-card">
      <div class="testimonial-trio-quote">
        <i class="fas fa-quote-left fa-lg block mb-3"></i>
        {!! get_field('testimonial2_body') !!}
      </div>
      <div class="testimonial-trio-attribution">
        <div class="testimonial-trio-name">
          {!! get_field('testimonial2_author') !!}
          <em class="testimonial-trio-title">{!! get_field('testimonial2_position') !!}</em>
        </div>
        <div class="testimonial-trio-company">{!! get_field('testimonial2_company') !!}</div>
      </div>
    </div>
  </div>

  <div class="testimonial-trio-card-wrapper w-full lg:w-1/3">
    <div class="testimonial-trio-card">
      <div class="testimonial-trio-quote">
        <i class="fas fa-quote-left fa-lg block mb-3"></i>
        {!! get_field('testimonial3_body') !!}
      </div>
      <div class="testimonial-trio-attribution">
        <div class="testimonial-trio-name">
          {!! get_field('testimonial3_author') !!}
          <em class="testimonial-trio-title">{!! get_field('testimonial3_position') !!}</em>
        </div>
        <div class="testimonial-trio-company">{!! get_field('testimonial3_company') !!}</div>
      </div>
    </div>
  </div>

</div>
