@if ($related_posts->have_posts())
  <div class="lg:pl-14">
    <div class="mb-4 font-display font-black text-2xl">
      @component('components.text-gradient')
        {!! __('Also meet', 'codefresh') !!}
      @endcomponent
    </div>

    <div class="row">
      @while ($related_posts->have_posts()) @php $related_posts->the_post() @endphp
        <div class="col w-full mb-8">
          @include('partials.card-'.get_post_type())
        </div>
      @endwhile
    </div>
  </div>
@endif
