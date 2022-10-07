@php
$text = 'Create your FREE Codefresh account and start making pipelines fast.';
$btnLabel = 'Create Account';
$btnUrl = site_url( 'codefresh-signup' );
@endphp

<div class="hero hero-post mt-4">
  <div id="hero-post-banner-wrap">
    <div class="hero-post__banner py-3 px-4 bg-oxford-blue md:text-center lg:flex lg:items-center lg:justify-center">
      <div class="hero-post__banner__content">
        <span class="block lg:inline-block mb-2 lg:mb-0 lg:text-lg text-white font-display align-middle text-light">
          {{ sprintf( __( '%s', 'codefresh' ), $text ) }}
        </span>
        <a href="{{ esc_url( $btnUrl ) }}" class="btn btn-outline-primary inline-block lg:ml-3">{{ sprintf( __( '%s', 'codefresh' ), $btnLabel ) }}</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="blog-topbar relative border-b border-light py-2 lg:py-1 overflow-hidden text-center lg:text-left lg:flex lg:items-center">
      <div class="blog-topbar__breadcrumb mb-3 lg:mb-0 text-xs font-bold font-display uppercase text-dark">
        <span><a href="{{ esc_url( site_url('/') ) }}" class="text-dark hover:text-primary">{{ __( 'Home', 'codefresh' ) }}</a></span>
        <i class="fas fa-chevron-right mx-1 align-baseline" style="font-size:8px;"></i>
        <span><a href="{{ esc_url( site_url( 'blog/' ) ) }}" class="text-dark hover:text-primary">{{ __( 'Blog', 'codefresh' ) }}</a></span>
      </div>
      <div class="blog-topbar__search mx-auto lg:ml-auto lg:mr-0 w-64">
        @include('partials.search-form')
      </div>
    </div>
  </div>
  <header class="hero-post__content">
    {!! $slot !!}
  </header>
</div>
