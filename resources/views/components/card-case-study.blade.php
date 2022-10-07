<article class="bg-oxford-blue-50 h-full flex flex-col p-8 rounded-xl">
  <div class="mb-8">
    @if ($logo)
      <div class="h-24 mb-6">
        <span class="helper"></span>
        {!! wp_get_attachment_image($logo, 'medium', false, [
          'class' => 'inline-block w-auto align-middle',
          'style' => sprintf('height:%s;max-width:90%%;', $logo_height),
        ]) !!}
      </div>
    @endif

    <h3 class="text-xl italic leading-normal text-dark-heading">{!! $title !!}</h3>
    <p>{!! $body !!}</p>
  </div>

  <div class="mt-auto">
    <a href="{{ $to }}" target="{{ esc_attr( $target ) }}" class="font-bold font-display">
      {{ $link_label }} <i class="fas fa-arrow-right fa-sm ml-1"></i>
    </a>
  </div>
</article>
