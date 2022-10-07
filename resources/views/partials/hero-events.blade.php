@component('components.hero-wrapper', ['class' => 'hero--events bg-white'])
  <div class="row">
    <div class="col w-full">
      <h1 class="lg:text-5xl">
        @component('components.text-gradient')
          {{ get_field('page_title') }}
        @endcomponent
      </h1>

      <p>{{ get_field('page_subtitle') }}</p>

    </div>

  </div>
@endcomponent
