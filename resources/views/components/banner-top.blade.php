@php
$color = $color ?? 'oxford-blue';
$message = $message ?? 'Create your FREE Codefresh account and start making pipelines fast.';
$btnLabel = $btnLabel ?? 'Create Account';
$btnUrl = $btnUrl ?? site_url( 'codefresh-signup' );
$disabled = App\disable_cta_top();
@endphp

@if ( !$disabled )
  <div class="messages bg-{{$color}} rounded-xl shadow-md">
    <div class="hero-post__banner mt-4 p-6 md:p-4 md:text-center lg:flex lg:items-center lg:justify-center">
      <div class="hero-post__banner__content">
        <span class="block lg:inline-block mb-4 lg:mb-0 lg:text-lg text-white font-display align-middle">
          {{ sprintf( __( '%s', 'codefresh' ), $message ) }}
        </span>
        @if ( $btnUrl )
          <a href="{{ esc_url( $btnUrl ) }}" class="btn btn-outline-primary inline-block lg:ml-3">{{ sprintf( __( '%s', 'codefresh' ), $btnLabel ) }}</a>
        @endif
      </div>
    </div>
  </div>
@endif
