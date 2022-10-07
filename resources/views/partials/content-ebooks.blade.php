@if ($ebooks->have_posts())
<div class="mb-10">
  <div class="row">
    @while ($ebooks->have_posts()) @php $ebooks->the_post() @endphp
      <div class="flex col w-full md:w-1/2 lg:w-1/3 mb-8">
        @include('components.card-ebook')
      </div>
    @endwhile
    @php wp_reset_postdata() @endphp
  </div>
</div>
@endif
