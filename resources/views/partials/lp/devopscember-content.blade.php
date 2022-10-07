@php
$heroButton = get_field( 'hero_button' );
@endphp

<section class="devopscember-hero-wrap">
  <header class="devops-header">
    <div class="px-4">
      <div class="flex">
        <div class="w-full flex">
          <a class="devops-header__logo" href="{{ esc_url( get_permalink() ) }}">
            <img src="@asset('images/lp/devopscember/icon.svg')" alt="devopscember">
          </a>
          <nav class="devops-header__nav ml-auto">
            <ul class="list-none p-0">
              <li class="hidden">
                <a href="#what-need-to-be-fixed" class="devops-header__link">
                  {{ get_field( 'nav_item_1' ) }}
                </a>
              </li>
              <li class="hidden">
                <a href="#projects" class="devops-header__link">
                  {{ get_field( 'nav_item_2' ) }}
                </a>
              </li>
              <li>
                <a href="{{ esc_url( get_field( 'signup' ) ) }}" class="devops-header__link">
                  Sign up
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="flex">
      <div class="w-full">
        <div class="devopscember__hero text-center mb-6 lg:mb-10 lg:mt-10">
          <img src="@asset('images/lp/devopscember/hero.svg')" alt="DevOpscember" class="devopscember__hero-img my-12 mx-auto">
          <p class="devopscember__subtitle ops-text-light mb-6">
            {!! get_field('subtitle', false, false) !!}
          </p>
          <a href="{{ esc_url( $heroButton['url'] ) }}" class="devopscember__btn--lg">
            {{ $heroButton['label'] }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="what-need-to-be-fixed" class="devopscember-info">
  <div class="container">
    <h2 class="devops-title text-md-center text-white mb-6">
        {{ get_field( 'info_title' ) }}
    </h2>
    <div class="flex flex-wrap -mx-3">
      @if ( have_rows( 'info' ) )
        @while ( have_rows( 'info' ) ) @php the_row() @endphp
          @php $icon = get_sub_field( 'icon' ) @endphp

          <div class="w-full md:w-1/3 px-3 flex">
            <div class="devopscember-info__item mb-6">
              <img class="mb-4" src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
              <h3 class="text-lg mb-6">{{ get_sub_field( 'title' ) }}</h3>
              <p class="ops-text-light">{{ get_sub_field( 'desc', false, false ) }}</p>
            </div>
          </div>

        @endwhile
      @endif
    </div>
    <div class="flex">
      <div class="w-full">
        <div class="devopscember__rules ops-text-light">
          <h2 class="ops-text-grad">
              {{ get_field( 'rules_title' ) }}
          </h2>
          {!! get_field( 'rules' ) !!}
        </div>
      </div>
    </div>
  </div>
</div>

<div id="projects" class="devopscember__projects">
  <div class="container">

    <div class="flex mb-20">
      <div class="w-full in-association-wrap">
        <div class="text-center devopscember__in-association">
          <h3 class="devops-title text-center text-white mb-0">
            {{ get_field( 'association_title' ) }}
          </h3>

          @if ( have_rows( 'logos' ) )

          <div class="devopscember__in-association__logos">

            @while ( have_rows( 'logos') ) @php the_row() @endphp

              @php $img = get_sub_field( 'logo' ) @endphp

              <img src="{{ $img['sizes']['medium'] }}" alt="{{ $img['alt'] }}" class="lazyload">

            @endwhile
          </div>
          @endif

        </div>
      </div>
    </div>

    <h2 class="devops-title text-white md:text-center">
        {{ get_field( 'projects_title' ) }}
    </h2>
    <div class="flex flex-wrap -mx-3">

      @if ( have_rows( 'projects' ) )
        @while ( have_rows( 'projects' ) ) @php the_row() @endphp

          <div class="w-full md:w-1/2 lg:w-1/3 px-3 mt-6">
            <div class="devopscember__projects__card">
              <div class="devopscember__projects__card__header">
                <h3 class="text-3xl text-white mb-3">
                  <a href="{{ get_sub_field( 'url' ) }}" class="ops-text-grad" target="_blank">
                    {{ get_sub_field( 'name' ) }}
                  </a>
                </h3>
                <div class="devopscember__projects__star ml-auto"><a class="github-button" href="{{ get_sub_field( 'url' ) }}" data-icon="octicon-star" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub" data-color-scheme="dark">Star</a></div>
              </div>
              <div class="devopscember__projects__card__body">
                <p>{{ get_sub_field( 'desc' ) }}</p>
              </div>
              <div class="devops-project__footer text-center mt-auto">
                <a href="{{ get_sub_field( 'url' ) }}" target="_blank" rel="noopener noreferrer" class="devops-project__link">
                  Contribute<i class="fas fa-arrow-circle-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>

        @endwhile
      @endif {{-- .projectts --}}

    </div>
  </div>
</div>

<div class="devops-footer-wrap">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-auto mx-auto">
        <div class="devops-footer text-center">
          <nav>
            <ul class="list-unstyled">
              @if ( get_field( 'signup' ) )
              <li class="devops-footer__nav-item">
                <a class="devops-footer__link" href="{{ esc_url( site_url( get_field( 'signup' ) ) ) }}">
                  <i class="fas fa-sign-in fa-2x block mb-4"></i>Sign Up
                </a>
              </li>
              @endif
              @if ( get_field( 'facebook' ) )
              <li class="devops-footer__nav-item">
                <a class="devops-footer__link" href="{{ esc_url( get_field( 'facebook' ) ) }}" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-facebook-f fa-2x block mb-4"></i> Share on Facebook
                </a>
              </li>
              @endif
              @if ( get_field( 'twitter' ) )
              <li class="devops-footer__nav-item">
                <a class="devops-footer__link" href="{{ esc_url( get_field( 'twitter' ) ) }}" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-twitter fa-2x block mb-4"></i> Share on Twitter
                </a>
              </li>
              @endif
            </ul>
          </nav>
          <a href="{{ esc_url( get_permalink() ) }}"><img src="@asset('images/lp/devopscember/logo.svg')" alt="DevOpscember" class="block mx-auto mt-4 lg:mt-0"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script async defer src="https://buttons.github.io/buttons.js"></script>
