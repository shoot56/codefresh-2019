<section class="fixvember__hero__wrapper">
  <header class="fixvember__header">
    <div class="px-4">
      <div class="flex">
        <a class="fixvember__logo" href="{{ site_url('fixvember') }}">
          <img src="@asset('images/lp/fixvember/fixvember-codefresh.svg')" alt="Fixvember by Codefresh">
        </a>
        <ul class="fixvember-nav list-none p-0 ml-auto">
          <li class="hidden md:inline-block"><a href="#what-need-to-be-fixed">What need to be Fixed</a></li>
          <li class="hidden md:inline-block"><a href="#projects">Projects</a></li>
          <li class="inline-block"><a href="{{ site_url('fixvember/sign_up') }}">Sign up</a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="flex">
      <div class="flex-1">
        <div class="fixvember__hero text-center">
          <div class="fixvember__title text-white">
            <img src="@asset('images/lp/fixvember/fixvember.svg')" alt="Fixvember by Codefresh" class="mx-auto">
          </div>
          <p class="fixvember__subtitle text-white my-6">{!! get_field('subtitle', false, false) !!}</p>
          <a href="{{ site_url('fixvember/sign_up') }}" class="fixvember__btn--lg">Start Building</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="what-need-to-be-fixed" class="fixvember__info">
  <div class="container">
    <h1 class="text-center text-white mb-10">How to earn the coveted<br>Fixvember t-shirt</h1>
    <div class="flex flex-wrap -mx-3 text-center">
      @if(have_rows('info'))
        @while(have_rows('info')) @php the_row() @endphp
          @php $icon = get_sub_field('icon') @endphp
          <div class="w-full md:w-1/3 px-3 fixvember__info__item">
            <img class="mb-3 mx-auto" src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
            <h3 class="text-white mb-4 text-lg">{{ get_sub_field('title') }}</h3>
            <p class="lead text-white">{{ get_sub_field('desc', false, false) }}</p>
            <hr class="fixvember__info__break">
          </div>
        @endwhile
      @endif
    </div>
    <div class="flex">
      <div class="flex-1">
        <div class="fixvember__rules">
          <h1 class="text-fix-green">Rules</h1>
          <p class="text-white">{!! get_field('rules', false, false) !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="projects" class="fixvember__projects">
  <div class="container">
    <div class="flex">
      <div class="flex-1 mb-4 text-center fixvember__in-association">
        <h5>In association with</h5>
        <div class="fixvember__in-association__logos">
          <img src="@asset('images/lp/fixvember/devops-logo.svg')" alt="DevOps.com">
          <img src="@asset('images/lp/fixvember/codefresh-logo.svg')" alt="Codefresh">
        </div>
        <hr>
      </div>
    </div>
    <h1 class="text-center mb-3">Need a project?<br> Contribute to one of these!</h1>
    <div class="flex flex-wrap -mx-3">

      @if(have_rows('projects'))
        @while(have_rows('projects')) @php the_row() @endphp
          <div class="w-full md:w-1/2 lg:w-1/3 px-3 mt-6">
            <div class="fixvember__projects__card">

              <div class="fixvember__projects__card__header d-md-flex">
                <a href="{{ get_sub_field('url') }}" target="_blank" rel="noopoener noreferrer" class="fixvember__projects__name">
                  {{ get_sub_field('name') }}
                </a>
                <div class="fixvember__projects__star ml-auto">
                  <a class="github-button" href="{{ get_sub_field('url') }}" data-icon="octicon-star" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </div>
              </div>

              <div class="fixvember__projects__card__body">
                <p>{{ get_sub_field('desc') }}</p>
              </div>

              <div class="fixvember__projects__card__footer text-center">
                <a href="{{ get_sub_field('url') }}" target="_blank" rel="noopoener noreferrer">
                  {{ __( 'Contribute', 'codefresh' ) }}
                </a>
              </div>

            </div>
          </div>
        @endwhile
      @endif {{-- .projectts --}}

    </div>
  </div>
</div>

<div class="container">
  <div class="flex">
    <div class="col">
      <div class="fixvember__footer lg:flex lg:justify-around">
        <a class="fixvember__footer__logo" href="{{ site_url('fixvember') }}"><img src="@asset('images/lp/fixvember/fixvember-codefresh.svg')" alt="Fixvember by Codefresh"></a>
        <ul class="fixvember__footer__nav list-none p-0">
          <li><a href="{{ site_url('fixvember/sign_up') }}">Sign Up</a></li>
          <li><a href="{{ get_field('facebook') }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> Share on Facebook</a></li>
          <li><a href="{{ get_field('twitter') }}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> Share on Twitter</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script async defer src="https://buttons.github.io/buttons.js"></script>
