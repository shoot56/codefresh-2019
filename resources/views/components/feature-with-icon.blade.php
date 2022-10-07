@php
$img_id         = $img_id ?? 0;
$short_headline = $short_headline ?? 'Run Pipelines';
$title          = $title ?? '';
$text           = $text ?? '';
$acf_link       = $acf_link ?? array();
$link           = App\_link( $acf_link );
@endphp

<div class="md:pr-24">
    <div class="mb-10">
        {!! App\get_svg_contents( $img_id ) !!}
    </div>
    <div class="mb-2 font-display font-bold text-sm text-primary uppercase tracking-wider">{!! $short_headline !!}</div>
    <h3 class="{{ $loop->first ? 'text-green-light' : 'text-blue' }}">{!! $title !!}</h3>
    <p class="lead font-bold text-green-100">{!! $text !!}</p>
    @if ( isset( $link->url ) )
        <div class="mt-6">
            <a href="{{ esc_url( $link->url ) }}" target="{{ esc_attr( $link->target ) }}" class="new-link text-lg">
                {{ $link->title }}@include( 'partials.svg.chevron-right' )
            </a>
        </div>
    @endif
</div>
