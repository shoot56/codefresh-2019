<header class="fixvember__header">
  <div class="container-fluid">
    <div class="row">
      <div class="col d-flex">
        <a class="fixvember__logo" href="{{ esc_url( site_url( 'fixvember' ) ) }}">
          <img src="@asset('images/lp/fixvember/fixvember-codefresh.svg')" alt="Fixvember by Codefresh">
        </a>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-6">
      <h4 class="text-center text-white mb-1 mt-3">{!! get_field('text', false) !!}</h4>
      {!! gravity_form( get_field( 'form_id' ), false, false, false, '', false ) !!}
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="fixvember__footer d-lg-flex justify-content-lg-around">
        <ul class="fixvember__footer__nav">
          <li><a href="{{ get_field('facebook', 11028) }}" target="_blank"><i class="fab fa-facebook-f"></i> Share on Facebook</a></li>
          <li><a href="{{ get_field('twitter', 11028) }}" target="_blank"><i class="fab fa-twitter"></i> Share on Twitter</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
