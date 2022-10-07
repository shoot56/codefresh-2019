<style scoped>
  
  .hero--careers {
    background-image: unset !important;
    background-repeat: unset !important;
    background-position: unset !important;
    background-size: unset !important;
    background: rgb(0,102,120) !important;
    background: linear-gradient(0deg, rgba(0,102,120,1) 0%, rgba(4,145,150,1) 100%) !important;
  }

  .hero-careers-title, .hero-careers-content {
    color: #fff;
  }
</style>
@component('components.hero-wrapper', ['class' => 'hero--careers'])
  <div class="md:flex items-center">
    <div class="w-full md:max-w-md relative z-10">
      <h1 class="mb-6 text-5xl hero-careers-title">{!! $hero_title !!}</h1>
      <p class="text-body-light hero-careers-content">{!! $hero_subtitle !!}</p>

      <a href="#opening" class="btn btn-primary inline-block md:mt-4">
        {!! $hero_btn_label !!} <i class="fas fa-arrow-right ml-2"></i>
      </a>

      <div class="flex justify-center space-x-8 pt-12 pb-12 md:justify-start lg:pb-0">
        <a
          href="{{ esc_url('https://www.glassdoor.co.uk/Reviews/Codefresh-Reviews-E2889021.htm') }}"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-block w-40">
          @svg('badges.glassdoor', 'h-auto w-full')
        </a>
          @svg('badges.great-place-to-work', 'h-auto w-20')
      </div>
    </div>

    <div class="w-full md:flex-1">
      <div class="lg:pl-16 mt-4 md:mt-0">
        {!! wp_get_attachment_image($hero_img_id, 'large') !!}
      </div>
    </div>
  </div>
@endcomponent
