@php $s1_img = get_field( 's1_img' ) @endphp

@component('components.hero-wrapper', ['class' => 'hero--feats'])
  <div class="nav-features">
    <ul>
      <li><a href="#KubernetesIntegration" class="scrollLink">End-to-end GitOps Support</a></li>
      <li><a href="#UltraFast" class="scrollLink">Ultra fast</a></li>
      <li><a href="#HandlesAnyWorkflow" class="scrollLink">Handles any workflow</a></li>
      <li><a href="#EnterpriseReady" class="scrollLink">Enterprise-ready</a></li>
      <li><a href="#PowerfulFeatures" class="scrollLink">Powerful features</a></li>
    </ul>
  </div>

  <section id="KubernetesIntegration" class="pt-3 pt-md-5 mb-5">
    <div class="flex flex-wrap -mx-4 items-center">
      <div class="w-full md:w-1/2 px-4">
        <h1 class="features-title">{{ get_field( 's1_title' ) }}</h1>
        {!! get_field( 's1_subtitle' ) !!}

        <div class="hero-btn-wrap my-10">
          <a class="btn btn-primary inline-block text-sm createAcct mr-0 md:mr-3" href="{{ esc_url( site_url( 'codefresh-signup' ) ) }}">Create Account</a>
          <a class="btn btn-secondary inline-block text-sm" href="{{ esc_url( site_url( 'request-a-demo' ) ) }}">Schedule Demo</a>
        </div>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <img src="{{ $s1_img['url'] }}" alt="{{ $s1_img['alt'] }}">
      </div>
    </div>
  </section>
@endcomponent
