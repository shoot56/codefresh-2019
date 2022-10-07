<div class="full-width bg-dark">
  <div class="py-4 md:pt-24">
    <div class="container">
      <div class="hero__content pt-28 pb-10 md:py-20">
        <div class="flex flex-wrap -mx-4">
          <div class="px-4 w-full max-w-2xl mx-auto text-center">
            <h1 class="lg:text-7xl">
              @component('components.text-gradient')
                {!! $hero_title !!}
              @endcomponent
            </h1>

            <div class="text-white md:text-xl font-bold font-display">
              {!! $hero_content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
