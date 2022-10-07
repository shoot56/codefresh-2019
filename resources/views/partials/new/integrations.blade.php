@php
namespace App;

$short_headline  = get_field( 'home_integrations_short_headline' );
$heading         = get_field( 'home_integrations_heading' );
$text            = get_field( 'home_integrations_text' );
$acf_link        = get_field( 'home_integrations_link' );
$link            = _link( $acf_link );
$rotate_words = array( 'any Git Provider', 'any cloud', 'anything' );
@endphp

<section class="section-spacer text-center">
    @include( 'components.short-headline', [ 'message' => $short_headline ] )
    <h2 class="text-dark-heading">
        <span class="block font-normal align-middle md:inline-block">{!! $heading !!}</span>
        @if ( $rotate_words )
            <span class="rotating-words">
                @foreach ( $rotate_words as $word)
                    @if ( $loop->first )
                        <b class="font-black py-1 is-showing">{{ $word }}</b>
                    @else
                        <b class="font-black py-1 is-hiding">{{ $word }}</b>
                    @endif
                @endforeach
            </span>
        @endif
    </h2>
    <div class="full-width">
        <div class="integrations-animated my-4 overflow-hidden">
            @include('partials.svg.animated-integrations')
        </div>
    </div>
    <p class="max-w-lg mx-auto lead font-bold text-oxford-blue-400">{!! $text !!}</p>
    <div>
        @include( 'components.button', [ 'url' => $link->url, 'target' => $link->target, 'label' => $link->title ] )
    </div>
</section>
