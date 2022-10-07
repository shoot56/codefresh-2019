@component('components.hero-wrapper', ['class' => is_singular('meet-a-codefresher') ? 'lg:mb-8' : 'mb-4 md:mb-8'])
  <div class="hero-pipes -z-1"></div>
  @if (is_singular('meet-a-codefresher'))
    <div class="font-display font-black text-3xl md:text-4xl"> @component('components.text-gradient') {!! __('Meet a Codefresher', 'codefresh') !!} @endcomponent </div>
  @else
    <h1 class="mb-0 text-3xl md:text-4xl"> @component('components.text-gradient') {!! __('Meet a Codefresher', 'codefresh') !!} @endcomponent </h1>
  @endif
@endcomponent
