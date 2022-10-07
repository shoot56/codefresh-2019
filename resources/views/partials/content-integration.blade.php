@php global $post @endphp

@if ($section_two_features)
  <section class="full-width">
    <div class="pt-12 pb-24 md:pt-20 md:pb-32">
      <div class="container">
        <div class="row">
          <div class="col w-full lg:w-2/5">
            <h2 class="mb-10 text-2xl text-center md:text-3xl lg:mb-12 lg:pr-4 lg:text-left">{!! $section_two_title !!}</h2>
            {!! wp_get_attachment_image($section_two_image, 'large', false, ['class' => 'mb-8 px-6 lg:mt-20 lg:pl-4 lg:pr-12']) !!}
          </div>

          <div class="col w-full lg:w-3/5 space-y-4">
            @foreach ($section_two_features as $item)
              <div class="flex">
                <div><i class="fas fa-check-circle text-primary text-xl mt-0.5 mr-4"></i></div>
                <div>
                  <div class="mb-2 font-bold">{!! $item['title'] !!}</div>
                  {!! $item['body'] !!}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endif

@if ($section_one_features)
  <section class="full-width">
    <div class="py-12 bg-oxford-blue-50">
      <div class="container">
        <div class="row justify-center -mt-24 space-y-8 lg:space-y-0">
          @foreach ($section_one_features as $item)
            <div class="col w-full {{ $loop->count > 2 ? 'lg:w-1/3' : 'lg:w-1/2' }}">
              <div class="relative flex flex-col h-full w-full pt-10 pb-6 px-6 bg-white rounded-xl shadow-lg overflow-hidden lg:pt-10 lg:pb-8 {{ $item['image'] ? 'lg:px-8' : 'lg:px-12' }}">
                @if ($item['image'])
                  <div class="mb-6 relative w-full aspect-ratio-16/9 bg-light">
                    {!! wp_get_attachment_image($item['image'], 'medium', false, ['class' => 'img-full rounded shadow']) !!}
                  </div>
                @endif

                <h2 class="font-normal {{ $loop->count > 2 ? '' : 'md:text-4xl' }}">{!! $item['title'] !!}</h2>
                {!! $item['body'] !!}

                <div class="absolute top-0 left-0 h-2 w-full bg-gradient-to-r from-green-light to-blue"></div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endif

@if ($section_three_features)
  <section class="full-width">
    <div class="my-12 md:my-16">
      <div class="container">
        <h2 class="mb-12 text-2xl text-center md:text-3xl lg:mb-24">{!! $section_three_title !!}</h2>

        <div class="row">
          @foreach ($section_three_features as $item)
            <div class="col w-full md:w-1/2 lg:w-1/3">
              <div class="flex mb-8 pr-4 md:mb-12">
                <div>
                  <div class="w-14 md:w-24 mr-8">
                    <div class="relative aspect-ratio-square w-full shadow-lg rounded-full">
                      {!! wp_get_attachment_image($item['icon'], 'thumbnail', false, ['class' => 'img-full p-3 md:p-5']) !!}
                    </div>
                  </div>
                </div>
                <div>
                  <div class="text-2xl mb-4">{!! $item['title'] !!}</div>
                  {!! $item['body'] !!}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endif

@if ($iframe)
  <div class="max-w-4xl mx-auto mb-20">
    {!! $iframe !!}
  </div>
@endif

@if (count($blog_posts))
<section class="my-12">
  <div class="row">
    @foreach ($blog_posts as $post)
      @php setup_postdata($post) @endphp
      <div class="w-full md:w-1/2 lg:w-1/3 mb-6 px-3">
        @include('partials.content')
      </div>
    @endforeach
    @php wp_reset_postdata() @endphp
  </div>
</section>
@endif

<section class="full-width">
  <div class="py-20 bg-oxford-blue text-center border-b border-primary border-opacity-25 md:py-24">
    <div class="container">
      <h2 class="px-4 text-2xl text-white md:text-3xl lg:text-4xl">{!! $cta_title !!}</h2>

      @if ($cta_link)
        @component('components.button', ['url' => $cta_link->url, 'class' => 'text-xl'])
          {!! $cta_link->title !!}
        @endcomponent
      @endif
    </div>
  </div>
</section>
