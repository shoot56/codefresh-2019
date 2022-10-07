<section class="full-width py-14">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2>
          @component('components.text-gradient')
            {!! $section1_title !!}
          @endcomponent
        </h2>

        <div class="mb-6 font-semibold font-display text-xl text-oxford-blue-400">
          {!! $section1_subtitle !!}
        </div>

        <div class="styled-content">
          {!! $section1_content !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14 bg-light">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2>
          @component('components.text-gradient')
            {!! $section2_title !!}
          @endcomponent
        </h2>

        <div class="mb-6 font-semibold font-display text-xl text-oxford-blue-400">
          {!! $section2_subtitle !!}
        </div>

        <div class="styled-content">
          {!! $section2_content !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2>
          @component('components.text-gradient')
            {!! $section3_title !!}
          @endcomponent
        </h2>

        <div class="mb-6 font-semibold font-display text-xl text-oxford-blue-400">
          {!! $section3_subtitle !!}
        </div>

        <div class="styled-content">
          {!! $section3_content !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14 bg-light">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2>
          @component('components.text-gradient')
            {!! $section4_title !!}
          @endcomponent
        </h2>

        @if ($section4_list)
          <ul class="px-0 list-none">
            @foreach ($section4_list as $item)
              <li class="mt-10">
                <div class="mb-4 font-semibold font-display text-xl text-oxford-blue-400">
                  {!! $item['title'] !!}
                </div>

                {!! $item['content'] !!}
              </li>
            @endforeach
          </ul>
        @endif
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center items-center">
      <div class="px-4 w-full lg:w-1/3">
        {!! wp_get_attachment_image($section5_image, 'large', false, [
                  'class' => 'w-full mb-6',
                ]) !!}
      </div>
      <div class="px-4 w-full lg:w-2/3">
        <div class="lg:pl-12">
          <h2>
            @component('components.text-gradient')
              {!! $section2_title !!}
            @endcomponent
          </h2>

          <div class="mb-6 font-semibold font-display text-xl text-oxford-blue-400">
            {!! $section2_subtitle !!}
          </div>

          <div class="styled-content">
            {!! $section2_content !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14 bg-light">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2 class="text-center">
          @component('components.text-gradient')
            {!! $section6_title !!}
          @endcomponent
        </h2>

        <div class="lg:px-24 my-12">
          {!! wp_get_attachment_image($section6_image, 'large', false, [
                  'class' => 'w-full',
                ]) !!}
          <small class="block mt-6 text-center">
            {!! wp_get_attachment_caption($section6_image) !!}
          </small>
        </div>

        @if ($section6_list)
          <ul class="px-0 list-none">
            @foreach ($section6_list as $item)
              <li class="mt-10">
                <div class="mb-4 font-semibold font-display text-xl text-oxford-blue-400">
                  {!! $item['title'] !!}
                </div>

                {!! $item['content'] !!}
              </li>
            @endforeach
          </ul>
        @endif
      </div>
    </div>
  </div>
</section>

<section class="full-width py-14">
  <div class="container">
    <div class="flex flex-wrap -mx-4 justify-center">
      <div class="px-4 w-full lg:w-5/6 xl:w-9/12">
        <h2>
          @component('components.text-gradient')
            {!! $section7_title !!}
          @endcomponent
        </h2>

        <div class="styled-content">
          {!! $section7_content !!}
        </div>
      </div>
    </div>
  </div>
</section>
