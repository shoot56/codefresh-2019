@php
$basicResources = get_field( 'basic_resources' );
$proResources   = get_field( 'pro_resources' );
$tooltip = 'Codefresh Runner allows you to run builds and deploy behind your firewall. <a href="https://codefresh.io/docs/docs/enterprise/codefresh-runner" target="_blank" rel="noopener noreferrer" class="underline">Learn more</a>.';
$need = 'Need more?';
@endphp

<div class="cmp-21a-pricing-calculator" id="calculator">

  <div class="pricing-hero-text mt-20 mb-2.5 text-center">
    <h1 class="text-3xl text-oxford-blue mb-2.5">Estimate your price</h1>
    <p class="text-lg text-oxford-blue mb-0">Use our comprehensive price calculator to estimate your Codefresh pricing for different concurrent builds.</p>
  </div>

  <details class="cf-details-tag" id="calculatorDetails">
    <summary class="text-center" id="calculatorSummary"><i class="fas fa-sm fa-chevron-down mr-3"></i>Pricing Calculator</summary>

    <section class="plan mt-10">
      <div class="container">

        <div class="switch-button mb-4">
          <span class="active active--billed"></span>

          <button class="switch-button-case left active-case">
            {{ __('Annually', 'codefresh') }}
          </button>

          <button class="switch-button-case right">
            {{ __('Monthly', 'codefresh') }}
          </button>
        </div>

        <div class="flex flex-wrap -mx-3">

          {{-- Basic Plan --}}
          <div class="w-full lg:w-1/3 lg:px-3 mb-4">
            <div id="basic" class="plan__item plan-basic">
              <h3 class="plan__title">CI Basic</h3>
              <div class="plan__price is-free">
                <div class="plan__value">
                  <span class="plan__dollar-sign">$</span>
                  <span id="basicPrice">FREE</span>
                </div>
                <span class="plan__billing">/Month</span>
              </div>
              <div class="plan__range">
                <span class="plan__steps">Concurrent Builds: <span id="totalSteps-basic">1</span></span>
                <ul class="plan__range-list">
                  <li class="plan__range-item">
                    <label for="basicSteps-sm" class="plan__range-label">
                      <span>Small</span>
                      <span class="plan__resources">
                        <span class="plan__resources-1">{!! $basicResources['sm_line_1'] !!}</span>
                        <span class="plan__resources-2">{!! $basicResources['sm_line_2'] !!}</span>
                      </span>
                    </label>
                    <input class="plan__input plan__input--basic" type="text" id="basicSteps-sm" name="basicSteps-sm" data-price="19">
                  </li>
                  <li class="plan__range-item">
                    <label for="basicSteps-md" class="plan__range-label">
                      <span>Medium</span>
                      <span class="plan__resources">
                        <span class="plan__resources-1">{!! $basicResources['md_line_1'] !!}</span>
                        <span class="plan__resources-2">{!! $basicResources['md_line_2'] !!}</span>
                      </span>
                    </label>
                    <input class="plan__input plan__input--basic" type="text" id="basicSteps-md" name="basicSteps-md" data-price="49">
                  </li>
                  <li class="plan__range-item">
                    <label for="basicSteps-lg" class="plan__range-label">
                      <span>Large</span>
                      <span class="plan__resources">
                        <span class="plan__resources-1">{!! $basicResources['lg_line_1'] !!}</span>
                        <span class="plan__resources-2">{!! $basicResources['lg_line_2'] !!}</span>
                      </span>
                    </label>
                    <input class="plan__input plan__input--basic" type="text" id="basicSteps-lg" name="basicSteps-lg" data-price="139">
                  </li>
                  <li class="plan__range-item mt-5">
                    <label for="basicRunner" class="plan__range-label">
                      <span>
                        Concurrent Runner Builds
                        @component('components.badge', ['color' => 'orange'])
                        @endcomponent
                      </span>
                      <button type="button" class="relative plan__resources px-1 text-sm underline text-primary" data-toggle="tooltip" data-placement="top" title="{{ __($tooltip, 'codefresh') }}">
                        {{ __($need, 'codefresh') }}
                      </button>
                    </label>
                    <input class="plan__input plan__input--basic" type="text" id="basicRunner" name="basicRunner" data-price="139">
                  </li>
                </ul>
              </div>
              <div class="mt-auto">
                <a class="btn btn-primary" href="{{ esc_url( site_url( 'codefresh-signup' ) ) }}">Get Started</a>
              </div>
            </div>
          </div>

          {{-- Pro Plan --}}
          <div class="w-full lg:w-1/3 lg:px-3 mb-4">
            <div id="pro" class="plan__item plan-pro">
              <h3 class="plan__title">CD Pro</h3>
              <div class="plan__price">
                <div class="plan__value">
                  <span class="plan__dollar-sign">$</span>
                  <span id="proPrice">34</span>
                </div>
                <span class="plan__billing">/Month</span>
              </div>
                <div class="plan__range">
                  <span class="plan__steps">Concurrent Builds: <span id="totalSteps-pro">1</span></span>
                  <ul class="plan__range-list">
                    <li class="plan__range-item">
                      <label for="proSteps-sm" class="plan__range-label">
                        <span>Small</span>
                        <span class="plan__resources">
                          <span class="plan__resources-1">{!! $proResources['sm_line_1'] !!}</span>
                          <span class="plan__resources-2">{!! $proResources['sm_line_2'] !!}</span>
                        </span>
                      </label>
                      <input class="plan__input plan__input--pro" type="text" id="proSteps-sm" name="proSteps-sm" data-price="34">
                    </li>
                    <li class="plan__range-item">
                      <label for="proSteps-md" class="plan__range-label">
                        <span>Medium</span>
                        <span class="plan__resources">
                          <span class="plan__resources-1">{!! $proResources['md_line_1'] !!}</span>
                          <span class="plan__resources-2">{!! $proResources['md_line_2'] !!}</span>
                        </span>
                      </label>
                      <input class="plan__input plan__input--pro" type="text" id="proSteps-md" name="proSteps-md" data-price="89">
                    </li>
                    <li class="plan__range-item">
                      <label for="proSteps-lg" class="plan__range-label">
                        <span>Large</span>
                        <span class="plan__resources">
                          <span class="plan__resources-1">{!! $proResources['lg_line_1'] !!}</span>
                          <span class="plan__resources-2">{!! $proResources['lg_line_2'] !!}</span>
                        </span>
                      </label>
                      <input class="plan__input plan__input--pro" type="text" id="proSteps-lg" name="proSteps-lg" data-price="269">
                    </li>
                    <li class="plan__range-item mt-5">
                      <label for="proRunner" class="plan__range-label">
                        <span>
                          Concurrent Runner Builds
                          @component('components.badge', ['color' => 'orange'])
                          @endcomponent
                        </span>
                        <button type="button" class="relative plan__resources px-1 text-sm underline text-primary" data-toggle="tooltip" data-placement="top" title="{{ __($tooltip, 'codefresh') }}">
                          {{ __($need, 'codefresh') }}
                        </button>
                      </label>
                      <input class="plan__input plan__input--pro" type="text" id="proRunner" name="proRunner" data-price="139">
                    </li>
                  </ul>
                </div>
              <div class="mt-auto">
                <a class="btn btn-primary" href="{{ esc_url( site_url( 'codefresh-signup' ) ) }}">Start Trial</a>
              </div>
            </div>
          </div>

          {{-- GitOps or Enterprise Plans --}}
          <div class="w-full lg:w-1/3 lg:px-3 mb-4 plan-gitops-or-enterprise">
            <div class="plan__item">
              <h3 class="plan__title">GitOps or Enterprise</h3>
              <div class="mb-4 text-xl">Contact us today to discuss your needs for a GitOps or Enterprise solution.</div>
              <p>Comes with award winning 24/7 support.</p>
              <p>Built for horizontal and vertical scaling, deploy to thousands of clusters, manage thousands of pipelines, support thousands of developers, with enterprise-grade security.
              <p>Codefresh Enterprise is loved by companies doing healthcare, defense, finance, retail, and more.</p>
              <div class="plan__price mt-2.5">
                <div class="">
                  <a class="btn btn-primary" href="{{ esc_url( site_url( 'contact-us/' ) ) }}">Request Quote</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </details>
</div>
