<section class="contact full-width bg-oxford-blue-50 md:mt-6">
  <div class="container">
    <img class="shape-footer" src="@asset('images/shape-t.svg')" alt="Wavy Background">

    <div class="flex flex-wrap -mx-4 contact-row relative items-center">
      <div class="w-full lg:w-1/2 px-4">
        <div class="p-6 md:p-10 bg-white shadow-lg rounded-lg">
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
            hbspt.forms.create({
            region: "na1",
            portalId: "5054647",
            formId: "87b831e2-f7ea-4e71-ac7f-1a0ef541cb19",
            sfdcCampaignId: "7011I000000Ln1ZQAS",
            onFormReady: function($form) {
                populateFormUrl();
            },
          });
          window.addEventListener('message', event => {
            if(event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmit') {
                dataLayer.push(
                {
                  'event' : 'contact_us_form_complete'
                });
            }
          });
          </script>
        </div>
      </div>

      <div class="w-full lg:w-1/2 px-4 lg:ml-auto">
        <div class="contact-opts">
          <img src="@asset('images/superfresh-contact.png')" alt="Superfresh" class="contact-opts__img">

          <h2>{!! $title !!}</h2>

          <div class="space-y-2">
            <div class="contact-opts__item rounded-xl">
              <a href="{{ esc_url($schedule_url) }}">
                <div class="contact-opts__inner">
                  <h4 class="text-dark">
                    <i class="fas fa-calendar-day text-primary mr-4"></i>
                    {!! $schedule_title !!}
                  </h4>
                </div>
              </a>
            </div>

<?php /*
            <div class="contact-opts__item rounded-xl">
              <div class="contact-opts__inner">
                <a id="chatLink" href="javascript:void(0)" role="button">
                  <h4 class="text-dark">
                    <i class="fas fa-comments text-primary mr-4"></i>
                    {!! $live_chat_title !!}
                  </h4>
                </a>
              </div>
            </div>
*/ ?>

            <div class="contact-opts__item rounded-xl">
              <div class="contact-opts__inner">
                <a href="{{ esc_url($docs_url) }}" target="_blank" rel="noopener noreferrer">
                  <h4 class="text-dark">
                    <i class="fas fa-book-open text-primary mr-4"></i>
                    {!! $docs_title !!}
                  </h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@if ($branches)
<section class="full-width bg-oxford-blue-50 pb-16">
  <div class="container">
    <h2 class="mb-4">
      {{ __('Branches', 'codefresh') }}<span class="text-primary">.</span>
    </h2>

    @foreach ($branches as $branch)
      @component('components.card-contact-address', ['branch' => $branch])
      @endcomponent

      @if (!$loop->last)
        <hr class="border-2 border-light my-16 max-w-sm mx-auto">
      @endif
    @endforeach
  </div>
</section>
@endif
