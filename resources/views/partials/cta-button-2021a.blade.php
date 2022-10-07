@if ( get_field('cta_primary_button_url'))
  <div class="cta-buttons">
    <a href="{!! get_field('cta_primary_button_url') !!}" class="btn btn-primary border border-transparent mb-8 mr-4">{!! get_field('cta_primary_button_text') !!}<i class="fas fa-sm fa-chevron-right ml-3"></i></a>
    @if ( get_field('cta_secondary_button_url'))
      <a href="{!! get_field('cta_secondary_button_url') !!}" class="btn mb-8 mr-4 {!! get_field('cta_secondary_button_classes') !!}">{!! get_field('cta_secondary_button_text') !!}{!! get_field('cta_secondary_button_icon') !!}</a>
    @endif
  </div>
@endif

<?php /*<i class="fas fa-sm fa-play-right ml-3"></i>*/?>