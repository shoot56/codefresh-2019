<div class="signup-options">
  <div class="signup-options__title">Sign up</div>
  <div class="signup-options__link">or <a href="{{ esc_url( $GLOBALS['APP_URL_LOGIN'] ) }}">sign in to your account</a></div>
  <ul class="list-none p-0 my-4 text-center md:text-left">
    <li class="signup-options__item">
      <a href="{{ esc_url( $GLOBALS['APP_URL_AUTH_GITHUB'] ) }}">
      <img class="mr-2 fa-fw inline-block align-sub" src="@asset('images/signup/github.svg')" alt="Github">
      Sign up with GitHub
    </a>
    </li>
    <li class="signup-options__item">
      <a href="{{ esc_url( $GLOBALS['APP_URL_AUTH_BITBUCKET'] ) }}">
      <img class="mr-2 fa-fw inline-block align-sub" src="@asset('images/signup/bitbucket.svg')" alt="Bitbucket"
      >Sign up with Bitbucket</a>
    </li>
    <li class="signup-options__item">
      <a href="{{ esc_url( $GLOBALS['APP_URL_AUTH_GITLAB'] ) }}">
      <img class="mr-2 fa-fw inline-block align-sub" src="@asset('images/signup/gitlab.svg')" alt="GitLab">
      Sign up with GitLab
    </a>
    </li>
    <li class="signup-options__item">
      <a href="{{ esc_url( $GLOBALS['APP_URL_AUTH_GOOGLE'] ) }}">
      <img class="mr-2 fa-fw inline-block align-sub" src="@asset('images/signup/google.svg')" alt="Google">
      Sign up with Google
    </a>
    </li>
    <li class="signup-options__item">
      <a href="{{ esc_url( $GLOBALS['APP_URL_AUTH_AZURE'] ) }}">
      <img class="mr-2 fa-fw inline-block align-sub" src="@asset('images/signup/azure.svg')" alt="Azure">
      Sign up with Azure
    </a>
    </li>
  </ul>
</div>
