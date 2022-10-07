<article class="p-4 bg-oxford-blue-50 rounded-lg">
  <div>
    <div class="mb-4">
      <div class="w-full">
        <div class="relative aspect-ratio-4/5">
          {!! the_post_thumbnail('post-thumbnail', ['class' => 'img-full']) !!}
        </div>
      </div>
    </div>

    <div>
      <h2 class="mb-4 text-base leading-normal">{!! App::title() !!}</h2>

      <div class="text-sm text-dark leading-normal">
        {!! wp_trim_words(get_the_content(), 30, '&hellip;') !!}
      </div>

      <div class="pt-4">
        <a href="{{ esc_url(get_the_permalink()) }}" class="btn btn-outline-primary btn-sm">
          {{ __('Get now', 'codefresh') }}@include('partials.svg.chevron-right')
        </a>
      </div>
    </div>
  </div>
</article>
