@php
$title                = $title ?? '';
$text                 = $text ?? '';
$enable_mini_features = $enable_mini_features ?? false;
$mini_features        = $mini_features ?? array();
$acf_link             = $acf_link ?? array();
$enable_link          = $enable_link ?? false;
$link                 = App\_link( $acf_link );
$img_id               = $img_id ?? 0;
$iteration            = $iteration ?? 1;
$even                 = $iteration % 2 === 0;
$class_names          = $class_names ?? '';
$img_classes          = $even ? 'mb-4 lg:mb-0 shadow-img rounded-lg feature-image lg:float-right' : 'mb-4 lg:mb-0 shadow-img rounded-lg feature-image';
@endphp

<div class="grid lg:grid-cols-2 gap-y-4 items-center md:gap-y-8 lg:gap-4 {{ $class_names }}">
    <div class="lg:col-span-1 {{ $even ? '' : 'lg:order-last' }}">
        {!! wp_get_attachment_image( $img_id, 'large', false, array( 'class' => $img_classes ) ) !!}
    </div>
    <div class="lg:col-span-1">
        <div class="section-half-p-{{ $even ? 'l' : 'r' }}">
            <h2 class="text-dark-heading">{!! $title !!}</h2>
            <p class="mb-8 lead font-bold text-oxford-blue-400">{!! $text !!}</p>

            @if ( $enable_mini_features && $mini_features )
                <div class="grid gap-4 {{ count( $mini_features ) > 1 ? 'grid-cols-2' : 'grid-cols-1' }}">
                    @foreach ( $mini_features as $feature )
                        <div class="lg:grid-span-2">
                            {!! App\get_svg_contents( $feature['icon'] ) !!}
                            <h5 class="mt-4 font-normal text-base text-dark-heading leading-normal">{!! $feature['description'] !!}</h5>
                        </div>
                    @endforeach
                </div>
            @endif

            @if ( $enable_link && isset( $link->url ) )
                <div class="mt-6">
                    <a href="{{ esc_url( $link->url ) }}" target="{{ esc_attr( $link->target ) }}" class="new-link md:text-lg">
                        {{ $link->title }}@include( 'partials.svg.chevron-right' )
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
