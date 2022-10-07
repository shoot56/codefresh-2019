<div class="asymm-header">
	<div class="container">
		<div class="flex -mx-3">
			<a href="{{ esc_url(site_url()) }}">
				@svg('logo-current', 'text-white')
			</a>

			@if ($signIn)
				<div class="ml-auto md:hidden">
					<a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}">Sign in</a>
				</div>
			@endif
		</div>
	</div>
</div>

<section class="asymm-content">
	<h1 class="asymm-content__title">
		{!! App::title() !!}
	</h1>

	@php the_content() @endphp

	@if (get_field('customers'))
	<div class="my-10">
		<div class="text-xs font-display font-bold uppercase tracking-wider">You're in Good Company</div>
		<div class="opacity-75 text-white">
			@include('partials.featured-customers')
		</div>
	</div>
	@endif
</section>

<div class="asymm-aside">
	<div class="asymm-aside__inner">
		@if ($signIn)
			<div class="asymm-header--login"><a href="{{ esc_url( $GLOBALS['APP_URL_LOGIN'] ) }}">Sign in</a></div>
		@endif

		<div class="asymm-aside__content">
			@if (!get_field('signup'))
				@if (has_post_thumbnail())
					{!! the_post_thumbnail('medium', ['class' => 'mx-auto mt-6 lg:mt-0']) !!}
				@endif

				@switch(get_field('form_type'))
					@case('gravity_form')
						{!! gravity_form( App::form(), false, false, false, '', false ) !!}
						@break
					@case('hubspot_form')
						@if(get_field('hubspot'))
              {!! get_field( 'hubspot' ) !!}
            @endif
						@break
					@default
						@include('partials.signup-options')
				@endswitch
			@else
				@include('partials.signup-options')
			@endif
		</div>
	</div>
</div>
