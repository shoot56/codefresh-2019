@php
$img      = get_field('ooh_img');
$title    = get_field('ooh_title');
$subtitle = get_field('ooh_subtitle');
@endphp

@component('components.hero-wrapper', ['class' => 'hero--ooh bg-oxford-blue-50'])

    <div class=" relative z-10 pt-10 pb-12 md:pb-20 lg:pt-10">
        <div class="row items-center">
            <div class="col w-full lg:w-1/2 xl:w-3/5">
                {!! wp_get_attachment_image( $img, 'large', false, array( 'class' => 'relative mb-6 lg:-bottom-40 lg:mb-0 lg:pr-4 xl:pr-10' ) ) !!}
            </div>
            <div class="col w-full lg:w-1/2 xl:w-2/5">
                <div class="lg:pl-4 text-center lg:text-left">
                    <h1 class="cf-tag cf-tag--primary">{{ $title }}</h1>
                    <div class="text-2xl lg:text-3xl font-bold font-display">{!! $subtitle !!}</div>
                </div>
            </div>
        </div>
    </div>

    <svg class="absolute -bottom-2 left-0 w-full h-auto z-0" width="4200" height="364" viewBox="0 0 4200 364" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4200 348.539L0 0V363.098H4200V348.539Z" fill="white"/>
    </svg>

@endcomponent
