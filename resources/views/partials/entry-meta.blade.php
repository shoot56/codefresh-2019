@php $cat = get_the_category() @endphp

<div class="font-display uppercase font-bold tracking-wider text-xs mb-2 {{ $class ?? '' }}">
  @if(!empty($cat))
    <a href="{{ esc_url(get_category_link($cat[0]->term_id)) }}" class="text-primary hover:text-primary-dark">
      {{ esc_html($cat[0]->name) }}
    </a>
  @endif
</div>
