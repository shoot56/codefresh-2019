<div class="hero {{ $class ?? '' }}">
  @if ( $shape ?? false )
    <img class="hero-bg" src="@asset( 'images/shape-top.svg' )" alt="Wavy Background">
  @endif
  <div class="container">
    <div class="hero__content {{ $class_content ?? '' }}">
      {!! $slot !!}
    </div>
  </div>
</div>
