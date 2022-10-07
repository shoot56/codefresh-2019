@component('components.hero-wrapper', ['class' => 'pb-12 text-center', 'shape' => 0])
  <div class="max-w-40 mx-auto">
    {!! get_the_content() !!}
  </div>
@endcomponent
