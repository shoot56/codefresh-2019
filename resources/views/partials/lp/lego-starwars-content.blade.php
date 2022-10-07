<section class="lpLegoStarWars w-full">
  <div class="flex flex-wrap -mx-3 items-center">
    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
      <a href="{{ site_url() }}">
        <img src="@asset('images/logo-white-green.svg')" alt="Codefresh" class="mx-auto md:ml-0">
      </a>
      <h1 class="lpLegoStarWars__title">{{ get_field('title') }}</h1>
      <img class="lpLegoStarWars__logo" src="@asset('images/lp/lego-starwars/lego-starwars-logo.svg')" alt="Lego StarWars logo">
      <a class="btn btn-outline-primary btn-lg inline-block mt-6" href="{{ get_field('btn_url') }}">{{ get_field('btn_label') }}</a>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <img class="lpLegoStarWars__img" src="@asset('images/lp/lego-starwars/legos-and-superfresh.png')" alt="Legos and Superfresh">
    </div>
  </div>
  <small class="mt-6">{{ get_field('footnote') }}</small>
</section>

<div class="starsWrap">
  <div id="stars-group-1"></div>
  <div id="stars-group-2"></div>
  <div id="stars-group-3"></div>
  <div id="stars-group-4"></div>
  <div id="stars-group-5"></div>
  <div id="stars-group-6"></div>
</div>
