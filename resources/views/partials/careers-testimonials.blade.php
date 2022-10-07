@php $i = 0; @endphp
<style scoped>
  .careers-title {
    color: #fff !important;
  }
</style>
<h2 class="mb-6 cf-title-line cf-title-line--l careers-title">What It's Like to Work Here</h2>
<div class="flex flex-wrap">
  <div
    class="w-full staff-testimonial-carousel"
    data-flickity='{ "cellAlign": "center", "groupCells": true, "contain": true }'>
    @if (is_array($testimonials))
      @foreach ($testimonials as $test)
        @php if ($i >= count($gradients)) $i = 0; @endphp

        <div class="col w-full md:w-1/2 pb-6">
          <div class="flex flex-col shadow-card rounded-xl overflow-hidden bg-white">
            <div class="relative w-full h-52 {{ $gradients[$i] }}">
              {!! wp_get_attachment_image($test['headshot'], 'medium', false, ['class' => 'absolute h-48 w-auto bottom-0 left-0']) !!}

              <div class="absolute left-0 -bottom-1 w-full py-4 flex justify-center items-center bg-shape bg-no-repeat bg-cover bg-bottom-px">
                <div class="w-14 h-14 bg-white border border-gray-400 rounded-full quotes bg-no-repeat bg-center bg-7/12"></div>
              </div>
            </div>

            <div class="px-6 pb-6 pt-3 text-dark-alt md:px-8 md:pb-8 mg:pt-4">
              {!! $test['quote'] !!}

              <div class="flex items-center mt-6">
                <span class="block font-bold text-primary text-sm mr-2">{{ $test['name'] }}</span>
                <span class="block font-bold text-xs text-body-light">{{ $test['title'] }}</span>
              </div>
            </div>
          </div>
        </div>
        @php $i++; @endphp
      @endforeach
    @endif
  </div>
</div>

@if (count($testimonials_link))
<div class="mt-16 mb-8 text-center lg:mt-2.5 lg:text-right">
  <a
    class="relative z-10 btn btn-link text-primary text-xl"
    href="{{ esc_url($testimonials_link['url']) }}"
    target="{{ esc_attr($testimonials_link['target']) }}">
    {{ $testimonials_link['title'] }}<i class="fas fa-arrow-right ml-3"></i>
  </a>
</div>
@endif
