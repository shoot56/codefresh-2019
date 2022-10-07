<div class="open-source-fund-hero pt-4 mb-10">
    <div class="container">
        <header class="mb-10">
            <a href="{{ esc_url(site_url()) }}"><img src="@asset('images/logo-white-green.svg')" alt="Codefresh"
                    width="140" class="inline-block"></a>
            <span class="mx-1"><i class="fas fa-heart fa-lg text-red"></i></span>
            <span class="font-weight-bold">Open source</span>
        </header>
        <div>
            <span class="open-source-fund-title open-source-fund-title--1 mb-3">{{ get_field('head_title') }}</span>
        </div>
        <div class="counter">$<span id="count">{{ get_field('fund_amount') }}</span></div>
        <div>
            <span class="open-source-fund-title open-source-fund-title--2">Open source fund</span>
        </div>
    </div>

    <div class="open-source-fund-hero-sub py-3 mt-4">
        <div class="container">
            <p class="max-w-50 mx-auto">
                {{ get_field('short_description') }}
            </p>
        </div>
    </div>
</div>

<div class="open-source-fund-content">
    <div class="container">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full lg:w-5/12 px-3">
                <img src="@asset('images/superfresh-contact.png')" alt="Superfresh" class="contact-opts__img">
                {!! get_field('content') !!}
            </div>
            <div class="w-full lg:w-1/2 md:px-3 ml-auto">
                <div class="p-4 md:p-8 bg-white md:rounded-lg md:shadow-lg">
                    @php $form = get_field('form') @endphp
                    {!! gravity_form($form, false, false, false, '', false) !!}
                </div>
            </div>
        </div>
    </div>
</div>
