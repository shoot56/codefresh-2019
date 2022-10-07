@if($events->have_posts())
  <div class="flex flex-wrap">
    <div class="flex flex-wrap -mx-3">
      @while ($events->have_posts()) @php $events->the_post() @endphp
        @include('components.card-webcast')
      @endwhile
    </div>
  </div>

  <div class="w-full">
    <div class="custom-pagination mb-6 lg:mb-12">
      {!! paginate_links([
        'total' => $events->max_num_pages,
        'prev_text'          => __('<i class="fas fa-chevron-left"></i>'),
        'next_text'          => __('<i class="fas fa-chevron-right"></i>'),
      ]) !!}
    </div>
  </div>
@else
  {{ __('New Events Coming Soon!', 'codefresh') }}
@endif

@php wp_reset_query() @endphp
