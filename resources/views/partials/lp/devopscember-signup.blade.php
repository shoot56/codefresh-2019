<header class="fixvember__header">
  <div class="container-fluid">
    <div class="flex flex-wrap -mx-3">
      <div class="w-auto flex mx-auto">
        <a href="{{ esc_url( site_url( 'devopscember-by-codefresh' ) ) }}">
          <img src="@asset('images/lp/devopscember/logo.svg')" alt="DevOpscember by Codefresh">
        </a>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="flex flex-wrap -mx-3 justify-center">
    <div class="w-full lg:w-1/2 px-3">
      <h4 class="devops-singup text-center text-white mb-3 mt-6">
        {!! get_field( 'text' ) !!}
      </h4>
        @if( get_field( 'form_id' ) )
          <div class="devops-form-wrap">
            {!! gravity_form( get_field( 'form_id' ), false, false, false, '', false ) !!}
          </div>
        @endif
    </div>
  </div>
</div>

<footer class="devops-footer">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-auto">
        <ul class="list-unstyled text-center">
            @if ( get_field( 'facebook', 14732 ) )
            <li class="devops-footer__nav-item">
              <a class="devops-footer__link" href="{{ esc_url( get_field( 'facebook', 14732 ) ) }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f fa-2x block mb-3"></i> Share on Facebook
              </a>
            </li>
            @endif
            @if ( get_field( 'twitter', 14732 ) )
            <li class="devops-footer__nav-item">
              <a class="devops-footer__link" href="{{ esc_url( get_field( 'twitter', 14732 ) ) }}" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter fa-2x block mb-3"></i> Share on Twitter
              </a>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </div>
</footer>
