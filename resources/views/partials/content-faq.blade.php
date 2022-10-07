<section class="faq">
  @if (!$faq->have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'codefresh') }}
    </div>
  @endif

  <ul class="accordion list-none p-0 my-16 mx-auto max-w-3xl" id="faq">
    @while ($faq->have_posts()) @php $faq->the_post() @endphp
      <li id="post-@php the_id() @endphp" class="border-b-2 border-light">
        <button class="accordionBtn flex items-center text-left py-5 px-4 w-full shadow-none bg-transparent font-normal md:text-xl focus:outline-none" type="button">
          {!! App::title() !!}
          <i class="fas fa-chevron-down fa-xs ml-auto"></i>
        </button>

        <div class="accordionItem hidden px-4">
          @php the_content() @endphp
        </div>
      </li>
    @endwhile
    @php wp_reset_postdata() @endphp
  </ul>
</section>
