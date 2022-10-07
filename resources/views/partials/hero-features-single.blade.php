@component('components.hero-wrapper', ['class' => 'hero--s-feat bg-oxford-blue'])
  <h1>@component('components.text-gradient'){!! App::title() !!}@endcomponent</h1>

  <div class="text-white">
    {!! get_field('hero_content') !!}
  </div>
@endcomponent
