<div class="asymm-header"><a href="{{ site_url() }}"><img src="@asset('images/logo-white-green.svg')" alt="Codefresh"></a></div>

<section class="asymm-content">
  <h1 class="asymm-content__title">{!! App::title() !!}</h1>
  @php the_content() @endphp
</section>{{-- .asymm-content --}}

<div class="asymm-aside">
  <div class="signup-options">
    <div class="signup-options__title">Sign up</div>
    <div class="signup-options__link">or <a href="#">sign in to your account</a></div>
      <ul class="list-unstyled my-2 text-center text-md-left">
        <li class="signup-options__item">
          <a href="#"><img class="mr-1 fa-fw" src="@asset('images/signup/github.svg')" alt="Github">Sign up with Github</a>
        </li>
        <li class="signup-options__item">
          <a href="#"><img class="mr-1 fa-fw" src="@asset('images/signup/bitbucket.svg')" alt="Bitbucket">Sign up with Bitbucket</a>
        </li>
        <li class="signup-options__item">
          <a href="#"><img class="mr-1 fa-fw" src="@asset('images/signup/gitlab.svg')" alt="GitLab">Sign up with GitLab</a>
        </li>
        <li class="signup-options__item">
          <a href="#"><img class="mr-1 fa-fw" src="@asset('images/signup/google.svg')" alt="Google">Sign up with Google</a>
        </li>
        <li class="signup-options__item">
          <a href="#"><img class="mr-1 fa-fw" src="@asset('images/signup/azure.svg')" alt="Azure">Sign up with Azure</a>
        </li>
      </ul>
  </div>{{-- .signup --}}
</div>{{-- .asymm-aside --}}
