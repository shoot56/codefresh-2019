@component('components.hero-wrapper', ['class' => 'hero--webcasts-ondemand'])
  <h1>{!! App::title() !!}</h1>
  @include('components.search')
@endcomponent
