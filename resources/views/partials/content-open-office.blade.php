@php
$title  = get_field('ooh_form_title');
$text   = get_field('ooh_text');
$iframe = get_field('ooh_iframe');
$links  = get_field('ooh_links');
@endphp

<div class="row">
  <div class="col w-full md:w-1/2">
    <div class="max-w-xl text-xl">
      {!! $text !!}

      @if ($links)
        <div class="mt-8 mb-12">
          @foreach ($links as $item)
            <div class="w-full font-display font-bold text-2xl mb-4 text-dark-alt">
              {!! wp_get_attachment_image($item['icon'], 'thumbnail', false, ['class' => 'inline-block h-6 w-auto mr-2']) !!}
              <span class="align-middle">{!! $item['label'] !!}</span>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>

  <div class="col w-full md:w-1/2">
    <div class="relative mt-6 md:mt-0">
      <div class="text-xl font-bold font-display text-center lg:text-left">
        <i class="fas fa-users text-primary fa-lg mr-2"></i> {{ $title }}
      </div>

      <div class="relative zoom-wrap mb-12">
        <iframe src="{{ $iframe }}" width="100%" height="100%" class="absolute top-0 left-0 max-w-full"></iframe>
      </div>
    </div>
  </div>
</div>
