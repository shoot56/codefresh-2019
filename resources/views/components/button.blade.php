<a
  href="{{ esc_url($url) }}"
  target="{{ esc_attr($target) }}"
  class="btn {{ $type ? 'btn-' . $type : 'btn-primary' }} {{ $class ?? '' }}">
  {!! $label ?? $slot !!}@include('partials.svg.chevron-right')
</a>
