<article @php post_class('mb-16') @endphp>
  <div class="entry-content py-6">
    @php the_content() @endphp
  </div>

  <section id="apply" class="-mx-4 py-12 px-4 bg-oxford-blue-50 md:rounded-lg">
    <h2 class="cf-title-line cf-title-line--l max-w-lg mx-auto">
      {{ __('Apply Now', 'codefresh') }}
    </h2>

    <div class="max-w-lg mx-auto">
      {!! gravity_form(1, false, false, false, '', false) !!}
    </div>
  </section>

  <section id="share" class="mt-16 p-8 bg-oxford-blue-50 rounded-lg">
    <h3 class="cf-title-line cf-title-line--l mb-10">
      {{ __('Share with a Friend', 'codefresh') }}
    </h3>

    {!! do_shortcode('[addtoany]') !!}
  </section>
</article>
