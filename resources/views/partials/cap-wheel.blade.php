@if ( get_field('cap_wheel_before'))
  <div class="cap-wheel-before">
    {!! get_field('cap_wheel_before') !!}
  </div>
  @if ( get_field('cap_show_cta_buttons'))
    <div class="{!! get_field('cap_buttons_align') !!}">
      @include('partials.cta-button-2021a')
    </div>
  @endif
@endif

<div class="md:grid md:grid-cols-2 gap-x-8">
  <div class="md:relative">
    <div class="flex flex-wrap content-start max-w-xs md:max-w-none mx-auto md:mx-0 mb-8">
      <img src="@asset('images/lp/cap/cap-wheel-v2.png')" loading="lazy">
    </div>
  </div>
  <div class="">
    <h2 class="text-3xl mb-4">Codefresh and Argo in Perfect Harmony</h2>
    <h3 class="text-xl font-bold text-primary">Codefresh Software Delivery Platform powered by Argo combines the best of the open source with our expertise as software delivery specialists.</h3>
    <div class="">
      <strong class="block text-lg mb-0">Scalability</strong>
      <p class="text-sm">Whether your enterprise needs 1 Argo instance or 1000, we can cover them all. Manage all of your Argo runtimes and deployments from a single control plane providing visibility of your entire code-to-cloud enterprise.</p>
    </div>
    <div class="">
      <strong class="block text-lg mb-0">Security</strong>
      <p class="text-sm">An Argo toolset with your enterprise security requirements covered with integrated cross-application single sign on, secrets management, and granular permission controls for workflow approvals.</p>
    </div>
    <div class="">
      <strong class="block text-lg mb-0">Support</strong>
      <p class="text-sm">Argo is the fastest-growing community in DevOps. Combined with Codefresh’s award winning support and our extensive internal testing, you will always have the care and support your enterprise requires.</p>
    </div>
    <div class="">
      @if ( get_field('cap_show_cta_buttons'))
        <div class="{!! get_field('cap_buttons_align') !!}">
          @include('partials.cta-button-2021a')
        </div>
      @endif
    </div>
  </div>
</div>

@if ( get_field('cap_wheel_after'))
  <div class="cap-wheel-after">
    {!! get_field('cap_wheel_after') !!}
  </div>
  @if ( get_field('cap_show_cta_buttons'))
    <div class="{!! get_field('cap_buttons_align') !!}">
      @include('partials.cta-button-2021a')
    </div>
  @endif
@endif
