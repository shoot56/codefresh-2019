@php
$clients = get_field('home_customers_logos');
@endphp

<div class="mt-16 mb-10 md:my-32 {{ $class ?? '' }}">
  <div class="container">
    @if ($clients)
      <div class="flex flex-wrap justify-center items-center">
        @foreach($clients as $client)
          {!! wp_get_attachment_image($client['logo'], 'medium', false, [
            'class' => 'mx-8 my-4 w-auto',
            'style' => 'height: ' . $client['logo_height'] . 'px;',
          ]) !!}
        @endforeach
      </div>
    @endif

    <div class="mt-8 mb-3 text-center">
      @svg('badges/g2-rating', 'w-auto h-6 mx-auto md:h-8')
    </div>

    <div class="flex flex-wrap justify-center mb-8 space-x-4">
      @svg('badges/best-roi-spring-2021', 'w-auto h-24 md:h-32')
      @svg('badges/ci-cd-leader-spring-2021', 'w-auto h-24 md:h-32')
      @svg('badges/easiest-to-use-spring-2021', 'w-auto h-24 md:h-32')
    </div>
  </div>
</div>
