@php
$btns    = get_field('cf_runner_hero_btn_rep');
$heading = get_field('cf_runner_install_heading');
$install = get_field('cf_runner_install_rep');
$link    = App\acf_link(get_field('cf_runner_install_link'));
@endphp

@component('components.hero-wrapper', ['class' => 'hero--default'])

    <div class="row items-center">
        <div class="col w-full md:w-1/2 runner-hero">
            @while (have_posts()) @php the_post() @endphp
                @include('partials.content-page')
            @endwhile
            @if ($btns)
                <div class="mt-auto mb-8">
                    @foreach ($btns as $item)
                    @php $btn = App\acf_link($item['btn']); @endphp
                        @if ( count($btn) )
                            <a class="mt-4 mr-4 btn btn-{{ $item['type'] == 'solid' ? 'primary' : 'outline-primary' }} block lg:inline-block"
                                href="{{ esc_url($btn['url']) }}"
                                target="{{ esc_attr($btn['target']) }}">
                                {{ $btn['title'] }}
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <div class="col w-full md:w-1/2 overflow-hidden md:overflow-visible">
            <div class="max-w-md mx-auto mt-6 md:mt-0">
                <div class="font-display font-bold text-2xl text-dark-alt max-w-sm mx-auto text-center md:text-xl lg:text-left lg:ml-0">
                    {!! $heading !!}
                </div>
                @if ($install)
                    <div class="relative pt-6 px-6 pb-6 bg-oxford-blue rounded-xl shadow-cf-l">
                        <div class="w-full h-full absolute top-0 right-0 -mr-12 mt-16 -z-1 bg-gradient-to-l from-light to-transparent rounded-xl"></div>
                        @component('components.svg.mac-window-buttons')@endcomponent
                        @foreach ($install as $item)
                        <div class="my-6 text-white font-bold">
                            <span class="text-primary font-display text-2xl">$</span> <span class="font-display text-2xl">{{ $item['command'] }}</span>
                            <div class="opacity-50 mt-3 max-w-sm"># {{ $item['comment'] }}</div>
                        </div>
                        @endforeach
                    </div>
                @endif
                @if ( count($link) )
                    <div class="mt-auto mb-4 text-center md:mb-0 lg:text-left lg:ml-0">
                        <a class="inline-block font-display font-bold text-primary mt-6 text-base"
                            href="{{ esc_url($link['url']) }}"
                            target="{{ esc_attr($link['target']) }}">
                            {{ $link['title'] }}
                            <i class="fas fa-arrow-right fa-sm ml-1"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endcomponent
