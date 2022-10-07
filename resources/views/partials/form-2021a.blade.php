<div class="cmp-21a-form">
  <div class="@if ( get_field('form_classes')){!! get_field('form_classes') !!} @else  @endif">

    @if ( get_field('form_bg_image_file'))
      <div class="{!! get_field('form_bg_image_classes') !!}">
        <img class="{!! get_field('form_bg_image_file') !!}" src="/wp-content/themes/codefresh-2019/dist/images/{!! get_field('form_bg_image_file') !!}.svg" />
      </div>
    @endif

    <div class="container">
      <div id="sign-up" class="max-w-md mx-auto">
        <div class="">
          <h2 class="text-4xl mb-2 @if ( !get_field('align_heading'))text-center @endif">{!! get_field('form_title') !!}</h2>
          <div class="text-xl @if ( !get_field('align_heading'))text-center @endif">{!! get_field('form_subtitle') !!}</div>
          <div class="form-wrapper text-left">
            @if ( get_field('optional_hubspot_embed') )
              {!! get_field('optional_hubspot_embed') !!}
            @else
              {!! gravity_form( get_field('form_id'), $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ) !!}
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>