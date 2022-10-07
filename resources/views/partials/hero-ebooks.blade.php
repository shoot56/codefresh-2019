@component('components.hero-wrapper', ['class' => 'hero-title-gradient mb-0'])
  <div class="md:flex items-center">
    <div class="w-full md:max-w-2xl">
      @php the_content() @endphp
    </div>
  </div>
@endcomponent
