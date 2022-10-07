<div class="py-4 bg-nk-blue-marine">
  <div class="container">
    <a class="logo relative inline-block z-10" href="{{ esc_url(site_url()) }}" aria-label="Codefresh">
      <span class="helper"></span>
      @svg('logo', 'inline-block align-middle h-auto w-32')
    </a>

    <button
      id="mobile-menu-trigger"
      type="button"
      aria-label="{{ __('Mobile Menu', 'codefresh') }}"
      class="hamburger hamburger--slider lg:hidden ml-auto">
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    @if ($main_menu)
      <nav class="main-menu">
        <ul>
          @foreach ($main_menu as $item)
            @php $url = $item['external'] ? $item['slug'] : site_url($item['slug']); @endphp

            @if ($item['dropdown_platform'])
              <li class="main-menu__item has-dropdown links">
                <a href="{{ $item['slug'] }}" class="main-menu__link" @if ($item['data_badge']) data-badge="{{ $item['data_badge'] }}" @endif>
                  {{ $item['title'] }} <i class="fas fa-chevron-down"></i>
                  @include('partials.nav-dropdown-platform')
                </a>
              </li>
            @elseif ($item['dropdown_resources'])
              <li class="main-menu__item has-dropdown links">
                <a href="{{ $item['slug'] }}" class="main-menu__link" @if ($item['data_badge']) data-badge="{{ $item['data_badge'] }}" @endif>
                  {{ $item['title'] }} <i class="fas fa-chevron-down"></i>
                  @include('partials.nav-dropdown-resources')
                </a>
              </li>
            @else
              <li class="main-menu__item">
                <a
                  href="{{ $url }}"
                  class="main-menu__link website-nav-item"
                  @if ( $item['external'] ) target="_blank" rel="noopener noreferrer" @endif @if ($item['data_badge']) data-badge="{{ $item['data_badge'] }}" @endif>
                  {{ $item['title'] }} 
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </nav>
    @endif

    <div class="ml-xl-2 hidden lg:block">
      <a href="{{ esc_url($GLOBALS['APP_URL_LOGIN']) }}" class="new-link new-link-primary website-nav-item">
        {{ __('Sign in', 'codefresh') }}
      </a>

      <a href="/request-a-demo/" id="nav_button_secondary_click" class="ml-3 new-link new-link-primary website-nav-item">Schedule demo</a>
      <a href="/codefresh-signup/" id="nav_button_primary_click" class="btn btn-bl-white-outline ml-3 website-nav-item">Sign up <i class="fas fa-chevron-right"></i></a>
    </div>

    @include('partials.nav-mobile')
  </div>
</div>
