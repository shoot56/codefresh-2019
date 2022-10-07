@php
$content = get_field( 'compare_hero_content' );
$link_1  = get_field( 'compare_hero_link_1' );
$link_2  = get_field( 'compare_hero_link_2' );
$btn_1   = App\acf_link( $link_1 );
$btn_2   = App\acf_link( $link_2 );
@endphp

@component('components.hero-wrapper', array( 'class' => 'text-center bg-oxford-blue-50', 'class_content' => 'py-6 md:py-12' ))
    <h1 class="is-h3">{!! App::title() !!}</h1>
    <div class="my-8 max-w-4xl mx-auto">{!! $content !!}</div>
    <a
        href="{{ esc_url( $btn_1['url'] ) }}"
        target="{{ esc_attr( $btn_1['target'] ) }}"
        class="btn btn-primary block md:inline-block mb-4 md:mb-0 md:mr-4"
    >
        {{ $btn_1['title'] }}
    </a>
    @if ( $btn_2 )
        <a
            href="{{ esc_url( $btn_2['url'] ) }}"
            target="{{ esc_attr( $btn_2['target'] ) }}"
            class="btn btn-secondary block md:inline-block"
        >
            {{ $btn_2['title'] }}
        </a>
    @endif
@endcomponent
