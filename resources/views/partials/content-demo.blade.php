<div class="asymm-header">
	<a href="{{ esc_url(site_url()) }}"><img src="@asset('images/logo-white-green.svg')" alt="Codefresh"></a>
</div>

<section class="asymm-content">
	<h1 class="asymm-content__title">
		{{ $data['name'] }}
		Want to see how Codefresh can help you make better pipelines?
	</h1>

	<p class="asymm-content__subtitle">
		Just answer a few simple questions so we can personalize the right demo experience for you.
	</p>

	<h3 class="h5">You're in Good Company</h3>
	<div class="opacity-75">
		@include( 'partials.featured-customers' )
	</div>
</section>

<div class="asymm-aside">
	<div class="asymm-header asymm-header--login">
    <a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}">Sign in</a>
  </div>
	<div class="asymm-aside__content">
    {!! gravity_form(44, false, false, false, '', false) !!}
  </div>
</div>
