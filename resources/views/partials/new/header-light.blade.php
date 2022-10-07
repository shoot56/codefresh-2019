<header class="header">
  <div class="py-4">
    <div class="container">
      <a class="logo" href="{{ esc_url(site_url()) }}" aria-label="Codefresh">
        <span class="helper"></span>
        @svg('logo')
      </a>

      <button
        id="mobile-menu-trigger"
        type="button"
        aria-label="{{ __('Mobile Menu', 'codefresh') }}"
        class="hamburger hamburger--slider lg:hidden ml-auto">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
      </button>

      @if ($main_menu)
        <nav class="main-menu justify-center">
          <ul>
            @foreach ($main_menu as $item)
              @php $url = $item['external'] ? $item['slug'] : site_url($item['slug']); @endphp

              @if ($item['dropdown'])
                <li class="main-menu__item has-dropdown links">
                  <a href="{{ $item['slug'] }}" class="main-menu__link">
                    {{ $item['title'] }}
                    @include('partials.nav-dropdown-resources')
                  </a>
                </li>
              @else
                <li class="main-menu__item">
                  <a
                    href="{{ $url }}"
                    class="main-menu__link"
                    @if ( $item['external'] ) target="_blank" rel="noopener noreferrer" @endif>
                    {{ $item['title'] }}
                  </a>
                </li>
              @endif
            @endforeach
          </ul>
        </nav>
      @endif

      <div class="ml-xl-3 hidden lg:block">
        <a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}" class="new-link new-link-primary">
          {{ __('Sign in', 'codefresh') }}
        </a>

        @component( 'components.button', [ 'type' => 'primary', 'url' => site_url( 'codefresh-signup' ), 'class' => 'ml-4' ] )
          {{ __('Sign up', 'codefresh') }}
        @endcomponent
      </div>

      @include('partials.nav-mobile')
    </div>
  </div>
</header>
