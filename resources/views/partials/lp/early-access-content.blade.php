
<div class="asymm-header">
  <div class="container">
    <div class="flex -mx-3">
      <a href="{{ esc_url( site_url() ) }}"><img src="@asset('images/logo-white-green.svg')" alt="Codefresh"></a>
      @if($signIn)
        <div class="ml-auto md:hidden">
          <a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}">Sign in</a>
        </div>
      @endif
    </div>
  </div>
</div>

<section class="asymm-content">
  <span class="ea__tag inline-block mb-4">
    {!! get_field('highlighted_text') !!}
  </span>
  {!! get_field('content') !!}
</section>

<div class="asymm-aside">
  <div class="asymm-aside__inner">
    @if( $signIn )
      <div class="asymm-header--login"><a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}">Sign in</a></div>
    @endif

    <div class="asymm-aside__content">

      <div class="w-auto">
        <div class="ea__content ea__form text-dark">
          <div class="text-lg">
            {!! get_field('form_title') !!}
          </div>
          {!! gravity_form( get_field('form_id'), $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ) !!}
        </div>
      </div>

    </div>
  </div>
</div>
