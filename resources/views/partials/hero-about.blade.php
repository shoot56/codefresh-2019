@component('components.hero-wrapper', ['class' => 'hero--about'])
  <div class="flex flex-wrap -mx-4">
    <div class="w-full md:w-1/2 px-4">
      <h1 class="mb-8">{!! get_field( 'cf_about_hero_title' ) !!}</h1>
      <div class="mb-2 text-primary uppercase font-bold">{!! get_field( 'cf_about_hero_subtitle' ) !!}</div>
      <p class="text-xl text-body-light max-w-xs">{!! get_field( 'cf_about_hero_body' ) !!}</p>
    </div>
    <div class="w-full md:w-1/2 px-4 relative">
      <img src="@asset('images/about/hero.png')" alt="Hero" class="about-img">
    </div>
  </div>
@endcomponent
