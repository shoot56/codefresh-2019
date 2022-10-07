<h2 class="lg:text-center">
  Words from satisfied users<span class="text-primary">.</span>
</h2>

<div class="flex flex-wrap">
  <div class="row mb-20 space-y-4 lg:space-y-0">

    @php
    $testimonials = new WP_Query( array(
      'post_type'      => 'testimonials',
      'posts_per_page' => 3
    ) );

    $count = 1;
    @endphp

    @if( $testimonials->have_posts() )
      @while ( $testimonials->have_posts() ) @php $testimonials->the_post() @endphp

      @php
      $bg = '';

      switch ( $count ) {
        case 1:
          $bg = ' bg-primary';
          break;

        case 2:
          $bg = ' bg-green-alt-1';
          break;

        case 3:
          $bg = ' bg-green-alt-2';
          break;

        default:
          $bg = ' bg-primary';
          break;
      }
      @endphp

      <div class="col w-full md:w-1/3">
        <div class="p-10 h-full rounded-lg text-white md:shadow-xl flex flex-col {{ $bg }}">
          <div class="mb-8 text-lg">
            <i class="fas fa-quote-left fa-lg block mb-3"></i>
            {!! get_field( 'content' ) !!}
          </div>
          <div class="mt-auto text-sm">
            <span class="block font-bold">{!! get_field( 'client_name' ) !!}</span>
            <span>{!! App::title() !!}</span>
          </div>
        </div>
      </div>
      @php $count++ @endphp
      @endwhile
      @php wp_reset_postdata() @endphp
    @endif

  </div>
</div>
