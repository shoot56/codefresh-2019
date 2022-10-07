<div class="full-width bg-dark">
  <div class="py-4 md:pt-20">
    <div class="container">
      <div class="hero__content pt-28 pb-20 md:pb-28">
        <div class="flex flex-wrap -mx-4">
          <div class="px-4 w-full lg:w-3/5">
            <h1>
              @component('components.text-gradient')
                {!! $hero_title !!}
              @endcomponent
            </h1>

            <div class="text-white text-lg xl:pr-32">
              {!! $hero_content !!}
            </div>

            <div class="mb-12">
              <!-- Place this tag where you want the button to render. -->
              <a class="github-button" href="https://github.com/argoproj/argo-cd" data-size="large" data-show-count="true" aria-label="Star argoproj/argo-cd on GitHub">Star</a>

              <!-- Place this tag in your head or just before your close body tag. -->
              <script async defer src="https://buttons.github.io/buttons.js"></script>
            </div>

            @if ($logos)
              <div>
                <p class="mb-1 text-primary">Loved by</p>
                <div class="flex flex-wrap items-center">
                  @foreach ($logos as $logo_id)
                    <div class="mt-4 mr-5 xl:mr-6">
                      {!! App\get_svg_contents($logo_id) !!}
                    </div>
                  @endforeach
                </div>
              </div>
            @endif
          </div>

          <div class="px-4 w-full lg:w-2/5">
            <div class="relative hidden lg:block">
              {!! wp_get_attachment_image($hero_image, 'large', false, [
                'class' => 'absolute z-10 w-full top-40 xl:top-20 left-1/2 transform -translate-x-1/2',
              ]) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
