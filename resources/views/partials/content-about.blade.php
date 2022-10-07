@include('partials.featured')

<section class="about-story py-16 md:py-32">
  <div class="container">
    <div class="flex flex-wrap items-center">
      <div class="w-full lg:w-1/2 px-4">
        {!! wp_get_attachment_image(get_field('cf_about_img'), 'large', false, ['class' => 'lg:pr-12']) !!}
      </div>

      <div class="w-full lg:w-1/2 px-4">
        <div class="max-w-lg">
          <h2 class="cf-title">{!! get_field('cf_about_title') !!}</h2>

          <div class="text-body-light text-lg">
            {!! get_field('cf_about_body') !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-map full-width py-16 md:py-24 bg-oxford-blue-50">
  <div class="container">
    <div class="w-full p-4">
      <h2 class="text-5xl lg:text-8xl leading-none">{!! get_field('cf_about_map_title') !!}</h2>

      <div class="my-32"></div>

      @if (get_field('cf_about_map_body'))
        <div class="text-right md:w-2/5 ml-auto lg:mr-32">{!! get_field('cf_about_map_body') !!}</div>
      @endif
    </div>
  </div>
</section>

<section class="full-width py-16 md:py-32 grad-light-t-b">
  <div class="container">
    <div class="max-w-lg mx-auto mb-12 text-center">
      <h2>{!! get_field('cf_about_team_title') !!}</h2>

      @if (get_field('cf_about_team_body'))
        <p class="text-body-light">{!! get_field('cf_about_team_body') !!}</p>
      @endif
    </div>

    @include('partials.team')
  </div>
</section>

@include('partials.investors', ['title' => 'Investors', 'class' => 'bg-primary py-12'])
