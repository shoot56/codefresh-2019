@component('components.hero-wrapper', ['class' => 'hero--s-feat-alt', 'shape' => 1])
  <div class="max-w-50 mx-auto">
    <h1>{!! App::title() !!}</h1>
    {!! get_field( 'hero_content' ) !!}
    <a href="{{ esc_url( 'https://codefresh.io/codefresh-signup' ) }}" class="btn btn-primary inline-block mr-2">Sign up <i class="fas fa-long-arrow-right ml-2"></i></a>
    <a href="{{ esc_url( 'https://codefresh.io/request-a-demo' ) }}" class="btn btn-secondary inline-block">Request Demo</a>
  </div>
@endcomponent
