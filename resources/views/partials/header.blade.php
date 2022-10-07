<header class="header">
  <div class="container">

    <a class="logo" href="{{ esc_url( site_url() ) }}" aria-label="Codefresh">
      <span class="helper"></span>
      @include('elements.logo')
    </a>

    <button id="mobile-menu-trigger" class="hamburger hamburger--slider lg:hidden ml-auto" type="button" aria-label="Mobile Menu">
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <div id="search"></div>

    <nav class="main-menu">
      <ul>
        <li class="main-menu__item" data-content="about">
          <a href="{{ esc_url( site_url( 'features' ) ) }}" class="main-menu__link">Features</a>
          {{-- @include('partials.nav-dropdown-feat') --}}
        </li>
        <li class="main-menu__item">
          <a href="{{ esc_url( site_url( 'pricing' ) ) }}" class="main-menu__link">Pricing</a>
        </li>
        <li class="main-menu__item has-dropdown links" data-content="pricing">
          <a href="{{ esc_url( 'https://docs.codefresh.io' ) }}" class="main-menu__link" target="_blank" rel="noopener noreferrer">Resources<span class="iconFix"><i class="fas fa-chevron-down fa-xs" style="margin-left:5px;"></i></span></a>
          @include('partials.nav-dropdown-resources')
        </li>
        <?php/*
        <li class="main-menu__item">
          <a href="{{ esc_url( site_url( 'enterprise' ) ) }}" class="main-menu__link">Enterprise</a>
        </li>
        */?>
        <li class="main-menu__item">
          <a href="{{ esc_url( site_url( 'blog' ) ) }}" class="main-menu__link">Blog</a>
        </li>
        <li class="main-menu__item">
          <a href="{{ esc_url( site_url( 'request-a-demo' ) ) }}" class="main-menu__link">Schedule Demo</a>
        </li>
      </ul>

      {{-- Secondary Navigation --}}
      <ul class="ml-xl-3">
        <li class="main-menu__item pr-0">
          <a href="{{ esc_url( $GLOBALS['APP_URL_LOGIN'] ) }}" class="btn btn-outline-primary nav-item-login">
            <span class="iconFix"><i class="fas fa-user-circle"></i></span> {{ __( 'Sign in', 'codefresh' ) }}
          </a>
        </li>
        <li class="main-menu__item">
          <a href="{{ esc_url( site_url( 'codefresh-signup' ) ) }}" class="btn btn-primary nav-item-signup">
            {{ __( 'Sign up', 'codefresh' ) }}
          </a>
        </li>
      </ul>
    </nav>

    @include('partials.nav-mobile')

  </div>
</header>
