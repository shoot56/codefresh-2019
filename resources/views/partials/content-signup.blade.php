<div class="asymm-header">
  <div class="container">
    <div class="-mx-3">
      <a href="{{ esc_url( site_url() ) }}"><img src="@asset('images/logo-white-green.svg')" alt="Codefresh"></a>
    </div>
  </div>
</div>

<section class="asymm-content">

  <ul class="signup-feat-list">
    @if (have_rows('flow_rep'))
      @while (have_rows('flow_rep')) @php the_row() @endphp
        <li class="signup-feat-list__item"><img src="{{ get_sub_field('img') }}">{{ get_sub_field('text') }}</li>
      @endwhile
    @endif
  </ul>

  <div class="signup-integrate">
    <div class="signup-integrate__title">
      <?php the_field('integrate_seamlessly'); ?>
    </div>

    <div class="signup-integrate__list">
      <img src="@asset('images/integrate/github.svg')" alt="GitHub">
      <img src="@asset('images/integrate/gitlab.svg')" alt="GitLab">
      <img src="@asset('images/integrate/bitbucket.svg')" alt="Bitbucket">
      <img src="@asset('images/integrate/slack.svg')" alt="Slack">
      <img src="@asset('images/integrate/jenkins.svg')" alt="Jenkins">
      <img src="@asset('images/integrate/kubernetes.svg')" alt="Kubernetes">
      <img src="@asset('images/integrate/helm.svg')" alt="Helm">
      <img src="@asset('images/integrate/docker.svg')" alt="Docker">
    </div>
  </div>
</section>{{-- .asymm-content --}}

<div class="asymm-aside">
  <div class="asymm-aside__inner">
    <div class="asymm-aside__content">
      @include('partials.signup-options')
    </div>
  </div>
</div>
