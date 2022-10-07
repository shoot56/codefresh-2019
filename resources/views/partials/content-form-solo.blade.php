<section class="form-solo">
  <div class="mb-4">@php the_content() @endphp</div>
  <div class="mb-4 mb-lg-5">
    {!! gravity_form( App::form(), false, false, false, '', false ) !!}
  </div>
</section>
