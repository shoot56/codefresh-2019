<div class="before-footer full-width bg-oxford-blue-50 py-4 md:py-12">
    @if( $shape ?? false )
    <div class="wrapper-wave">
      <span class="bg-wrapper-wave"></span>
      <span class="wave">
        @include('elements.wave')
      </span>
    </div>
    @endif
  {!! $slot !!}
</div>
