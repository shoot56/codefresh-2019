<section class="full-width py-12 bg-light">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="px-4 w-full lg:w-4/6">
        <h2>
          @component('components.text-gradient')
            {!! $section1_title !!}
          @endcomponent
        </h2>

        <div class="font-semibold font-display text-oxford-blue-400">
          {!! $section1_content !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-20 md:py-32">
  <div class="container">
    <div class="flex flex-wrap -mx-4 items-center">
      <div class="px-4 w-full lg:w-1/2">
        <h2>
          @component('components.text-gradient')
            {!! $section2_title !!}
          @endcomponent
        </h2>

        <div class="mb-6 styled-content">
          {!! $section2_content !!}
        </div>

        <a href="{{ esc_url($section2_link['url']) }}" target="{{ esc_attr($section2_link['target']) }}" class="font-bold font-display">
          {!! $section2_link['title'] !!} <i class="fas fa-arrow-right fa-sm ml-1"></i>
        </a>
      </div>
      <div class="px-4 w-full lg:w-1/2">
        <div class="mt-8 text-center lg:mt-0">
          {!! wp_get_attachment_image($section2_image, 'large', false, [
            'class' => 'lg:px-8',
          ]) !!}
        </div>
      </div>
    </div>
  </div>
</section>

@if ($features)
  <section class="full-width">
    <div class="container">
      <div class="max-w-3xl mx-auto">
        <h2 class="text-center oxford-blue-400">
          @component('components.text-gradient')
            {!! $features_title !!}
          @endcomponent
        </h2>

        @foreach ($features as $feature)
          <div class="mb-8 p-8 shadow-2xl rounded-xl">
            <h3 class="text-xl text-oxford-blue-400">
              {!! $feature['title'] !!}
            </h3>
            {!! $feature['description'] !!}
          </div>
        @endforeach

        <div class="mt-12 mb-24 text-center">
          {!! wp_get_attachment_image($features_footer_image, 'large', false, [
            'class' => 'inline-block h-16 w-auto lg:h-18',
          ]) !!}
        </div>
      </div>
    </div>
  </section>
@endif

<div class="full-width">
  <div class="bg-oxford-blue pt-12 pb-8">
    <div class="container">
      <div class="text-center lg:text-left lg:grid lg:grid-cols-3 gap-6 items-center py-10 px-6 bg-oxford-blue-600 rounded-xl lg:px-16">
        <div class="lg:col-span-2">
          <h2 class="text-xl md:text-4xl text-white">
            @component( 'components.text-gradient' )
              {!! $cta_title !!}
            @endcomponent
          </h2>

          {!! App\set_attrs_dom_element($cta_content, ['class' => 'text-white']) !!}
        </div>

        <div class="lg:col-span-1 lg:self-center justify-self-end">
          @component('components.button', [ 'type' => 'primary', 'url' => site_url('request-a-demo'), 'class' => '' ])
          {{ __('Schedule Demo', 'codefresh') }}
          @endcomponent
        </div>
      </div>
    </div>
  </div>
</div>
