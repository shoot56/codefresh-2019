@component('components.hero-wrapper', ['class' => 'hero--s-feat bg-oxford-blue'])
  <h1>@component('components.text-gradient'){!! App::title() !!}@endcomponent</h1>

  <div class="mx-auto max-w-3xl text-white">
    {!! $body !!}
  </div>

  @if ($hero_buttons)
    <div class="mt-12">
      <div class="row justify-center space-y-4 md:space-y-0">
        @foreach ($hero_buttons as $item)
          <div class="inline-block mx-2">
            @if ($item['link'])
              <a href="{{ esc_url($item['link']['url']) }}" target="{{ $item['link']['target'] ? $item['link']['target'] : '_self' }}" class="relative btn block hover:text-white @if ($item['icon'])pl-12 @endif" style="background-color: {{ $item['bg_color'] }};">
                @if ($item['icon'])
                  <div class="absolute top-0 left-0 flex mt-1 ml-1 w-9 h-9 bg-black bg-opacity-10 rounded-full">
                    <img src="{{ esc_url($item['icon']) }}" alt="icon" class="inline-block mx-auto w-8/12">
                  </div>
                @endif
                <span class="align-middle">{!! $item['link']['title'] !!}</span>
              </a>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  @endif
@endcomponent
