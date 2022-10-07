<section class="full-width">
  <div class="py-12 bg-oxford-blue-50">
    <div class="container">
      <div class="row">
        <div class="col w-full lg:w-1/2">
          <h2 class="text-2xl font-black text-blue-dark">
            {{ __('Upcoming', 'codefresh') }}
          </h2>

          @if ($events->have_posts())
            @while ($events->have_posts()) @php $events->the_post() @endphp
              @include('partials.events-live')
            @endwhile
            @php wp_reset_query() @endphp
          @else
            {{ __('New Events Coming Soon!', 'codefresh') }}
          @endif
          <div class="col w-full">
            <div class="mt-10 pt-4 px-4 pb-0.5 rounded-xl shadow-cf-light bg-white md:pt-8 md:px-8 md:pb-5 lg:mt-0">
              <div class="font-display font-bold text-2xl text-blue-dark">
                {{ __('Subscribe to updates', 'codefresh') }}
              </div>
              <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
              <script>
                hbspt.forms.create({
                region: "na1",
                portalId: "5054647",
                formId: "c32591b4-21f8-4dc9-851f-19e80488a0ac",
                sfdcCampaignId: "7011I000000Ln1oQAC", 
                onFormReady: function($form) {
                    populateFormUrl();
                },
              });
              </script>
            </div>
          </div>
        </div>

        <div class="col w-full lg:w-1/2">
          <h2 class="mt-20 text-2xl font-black text-blue-dark lg:mt-0">
            {{ __('Webcast on-demand', 'codefresh') }}
          </h2>

          <div class="p-6 bg-white rounded-xl md:p-8">
            @if ($webcasts->have_posts())
              @while ($webcasts->have_posts()) @php $webcasts->the_post() @endphp
                @include('partials.events-webinar')
              @endwhile
              @php wp_reset_query() @endphp
            @else
              {{ __('New webinars coming soon!', 'codefresh') }}
            @endif

            <a class="btn btn-primary block" href="{{ esc_url(site_url('webcasts-on-demand/')) }}">
              {{ __('See all', 'codefresh') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
