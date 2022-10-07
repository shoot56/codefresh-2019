@php
$cards      = get_field('cf_runner_feat_rep');
$ctas       = get_field('cf_runner_cta_rep');
$ctaheading = get_field('cf_runner_ctas_heading');
$footer     = get_field('cf_runner_cta');
@endphp

<div class="full-width bg-gradient-to-b from-light to-transparent">

    <svg class="w-full max-w-full h-auto absolute -top-2 left-0" preserveAspectRatio="none" width="1440" height="65" viewBox="0 0 1440 65" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1440 22.9948C1440 22.9948 1001.66 65.0011 720 64.9999C438.344 64.9986 7.34549e-06 22.9885 7.34549e-06 22.9885L1.1191e-05 0.994438L1440 0.99469L1440 22.9948Z" fill="white"/>
    </svg>

    <div class="container">
        <div class="runner-card pb-16 pt-6 md:pt-0 md:pb-20 relative z-10">
            @if ($cards)
                <div class="max-w-4xl mx-auto">
                    @foreach ($cards as $card)
                        <div class="my-4 p-10 rounded-lg md:p-12" style="background: {{ isset($card['bg_color']) ? $card['bg_color'] : '#e8f8f5' }}">
                            <div class="flex flex-wrap max-w-xl">
                                <div class="mb-6 mr-6 w-full h-auto md:w-16">
                                    {!! wp_get_attachment_image($card['icon'], 'medium') !!}
                                </div>
                                <h3 class="flex-1 text-dark-alt">{!! $card['heading'] !!}</h3>
                            </div>
                            <div class="max-w-3xl">
                                {!! $card['text'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        @if ($ctaheading)
            <h2 class="max-w-2xl mx-auto mb-6 md:mb-16 text-center">
                {!! $ctaheading !!}
            </h2>
        @endif

        @if ($ctas)
            <div class="row">
                <div class="flex flex-wrap max-w-5xl mx-auto text-center">
                    @foreach ($ctas as $cta)
                        @php $link = App\acf_link($cta['btn']); @endphp
                        <div class="col w-full md:w-1/2">
                            <div class="equal-h py-8 px-6 md:px-16">
                                <h3 class="text-primary">{{ $cta['heading'] }}</h3>
                                {!! $cta['text'] !!}
                                @if ( count($link) )
                                    <div class="mt-auto mb-6 md:mb-8 text-center">
                                        <a class="btn btn-{{ $cta['type'] == 'solid' ? 'primary' : 'outline-primary' }} md:mt-6" href="{{ esc_url($link['url']) }}" target="{{ esc_attr($link['target']) }}">
                                            {{ $link['title'] }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>

    @if ($footer)
        @component('components/before-footer', ['shape' => true])
            <div class="container">
                <div class="text-3xl font-display font-bold text-dark-alt text-center pb-16">
                    {!! $footer !!}
                </div>
            </div>
        @endcomponent
    @endif

</div>
