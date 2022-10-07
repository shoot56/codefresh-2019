<div class="cmp-signup-content">
  <div class="asymm-header bg-white">
    <div class="container">
      <div class="">
        <a href="{{ esc_url( site_url() ) }}"><img src="@asset('images/logo.svg')" alt="Codefresh"></a>
      </div>
    </div>
  </div>

  <div class="md:flex md:min-h-screen md:pt-20 md:justify-center md:items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-32">

      <div class="order-last mt-16 md:mt-0 md:order-first md:max-w-sm text-center md:text-left">
        <div class="content1">
          {!! get_field('primary_content') !!}
        </div>
        <div class="inline-flex flex-wrap justify-left mb-8 space-x-4 g2badges">
          @include('partials.featured-g2-bg-white')
        </div>
        <div class="content2">
          {!! get_field('secondary_content') !!}
        </div>

        <div class="signup-integrate">
          <hr class="mb-2 mt-12" />
          <div class="mb-4 text-sm">
            Integrate seamlessly with your favorite tools.
          </div>

          <div class="signup-integrate__list">
            <img src="@asset('images/integrate/github-2.svg')" alt="GitHub">
            <img src="@asset('images/integrate/gitlab-2.svg')" alt="GitLab">
            <img src="@asset('images/integrate/bitbucket-2.svg')" alt="Bitbucket">
            <img src="@asset('images/integrate/slack-2.svg')" alt="Slack">
            <img src="@asset('images/integrate/jfrog-2.svg')" alt="Jenkins">
            <img src="@asset('images/integrate/kubernetes-2.svg')" alt="Kubernetes">
            <img src="@asset('images/integrate/helm-2.svg')" alt="Helm">
            <img src="@asset('images/integrate/docker-2.svg')" alt="Docker">
          </div>
        </div>
      </div>

      <div class="order-first md:order-last md:max-w-sm">
        @include('partials.signup-options-2021a')
      </div>

    </div>
  </div>
</div>