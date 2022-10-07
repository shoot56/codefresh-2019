<a href="{{ esc_url( $url ) }}" target="{{ esc_attr( $target ) }}" class="link text-{{ $type ?? 'primary' }} {{ $class ?? '' }}">
    {!! $label ?? $slot !!}@include( 'partials.svg.chevron-right' )
</a>
