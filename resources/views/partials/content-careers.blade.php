<style scoped>
  .responsive-layout {
    flex-direction: row; 
  }
  
  @media (max-width: 586px) { 
    .responsive-layout {
      flex-direction: column; 
    }
  }

  .bg-grey{
    background: #D2DADE !important;
    padding-bottom: 60px !important;
  }

  .layout-center {
    max-width: 1220px;
    margin: 0 auto;
  }

  .bg-gradient-testimonials  {
    background: rgb(0,33,57) !important;
    background: linear-gradient(0deg, rgba(0,33,57,1) 0%, rgba(10,99,118,1) 100%) !important;
  }

  .careers-title {
    color: #fff;
  }

  .md\:pb-32 {
    padding-bottom: unset !important;
  }
</style>
<section class="mt-24 full-width overflow-hidden bg-white">
  <div class="container relative">
    <h2 class="text-3xl md:text-4xl mb-0">{!! $values_subtitle !!}</h2>


    <div class="w-full">
      <div class="flex -mx-4 responsive-layout">
        @if ($values_rep)
          @foreach ($values_rep as $item)
            @include('components.card-values', ['item' => $item])
          @endforeach
        @endif
      </div>
    </div>
  </div>
</section>

<section class="mt-24 full-width py-8 md:pt-24" style="background: rgb(241,243,244);
background: linear-gradient(0deg, rgba(241,243,244,1) 0%, rgba(246,249,252,1) 100%); padding-bottom: 60px;">
  <div class="flex flex-wrap -mx-4 items-center layout-center">
    <div class="w-full px-4">
      <div>
        <h2 class="mb-6 cf-title-line cf-title-line--l">{!! $main_title !!}</h2>
        {!! $main_body !!}
      </div>
    </div>

    <div class="w-full px-3">
      <div class="careers-carousel relative mt-8">
        <style>.careers-carousel-cell {height: 240px;}</style>
        <div
        class="overflow-hidden"
        data-flickity='{
          "cellAlign": "left",
          "contain": true,
          "autoPlay": 4000,
          "dragable": false,
          "wrapAround": true,
          "prevNextButtons": false,
          "pageDots": false }'>
          @if ($carousel)
            @foreach ($carousel as $img)
              <div class="careers-carousel-cell relative overflow-hidden w-full md:w-1/3 md:mr-2.5">
                {!! wp_get_attachment_image($img, 'large', false, ['class' => 'absolute top-0 left-0 h-full w-full object-cover']) !!}
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

<section class="full-width py-16 bg-gradient-testimonials">
  <div class="container">
    @include('partials.careers-testimonials')
  </div>
</section>

<section class="full-width py-16 bg-gradient-to-t from-light to-transparent">
  <div class="container">
    @include('partials.careers-meet-a-codefresher')
  </div>
</section>

<section id="opening" class="pt-20 pb-32 md:pb-40">
  <h2 class="mb-6 cf-title-line cf-title-line--l">{!! $job_listing_title !!}</h2>
  {!! $job_listing_body !!}
  <div id="grnhse_app"></div>
  <script src="https://boards.greenhouse.io/embed/job_board/js?for=codefresh"></script>
</section>
