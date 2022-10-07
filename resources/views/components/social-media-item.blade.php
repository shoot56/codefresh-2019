<a
    href="{{ esc_url( $url ) }}"
    class="social-media-btn text-{{ $color }}"
    target="_blank" rel="noopener"
    aria-label="{{ esc_attr(  sprintf( __( 'Visit our %s page', 'codefresh' ), $platform ) ) }}"
>
    <span class="icon-stack border border-primary w-12 h-12 rounded-full text-center">
        <i class="fab fa-{{ $icon_name }} fa-lg text-{{ $color }}"></i>
    </span>
</a>
