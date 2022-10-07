@php
$img_id             = get_field( 'feature_hero_image' );
$acf_link_primary   = get_field( 'feature_link_primary' );
$acf_link_secondary = get_field( 'feature_link_secondary' );
$link_primary       = App\_link( $acf_link_primary );
$link_secondary     = App\_link( $acf_link_secondary );
@endphp

<div class="full-width">
    <div class="py-4 overflow-hidden md:pt-24">
        <div class="container">
            <div class="hero__content pt-24 pb-32">
                <div class="max-w-50 mx-auto text-center text-white">
                    <h1 class="sr-only">{!! App::title() !!}</h1>
                    {!! wp_get_attachment_image( $img_id, 'large', false, array( 'class' => 'mb-12 w-auto mx-auto' ) ) !!}
                    @php the_content() @endphp
                    @if ( isset( $link_primary->url ) )
                        @component( 'components.button', [ 'type' => 'primary', 'url' => $link_primary->url, 'class' => 'mr-2 lg:mr-6' ] )
                            {{ $link_primary->title }}
                        @endcomponent
                    @endif
                    @if ( isset( $link_secondary->url ) )
                        <a class="new-link new-link-primary" href="{{ $link_secondary->url }}">
                            {{ $link_secondary->title }}@include( 'partials.svg.chevron-right' )
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="hero-gradient"></div>
</div>
