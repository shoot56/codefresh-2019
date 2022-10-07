<style scoped>
  .card-responsive-layout {
    display: flex;
  }
  .size-thumbnail {
    width: 60px !important;
    height: 60px !important;
  }
  @media (max-width: 586px) { 
    .card-responsive-layout {
      display: flex;
    }
    .card-img-center {
      display: flex;
      justify-content: space-evenly;
    }
  }
</style>
<div class="w-full md:w-1/2 px-4 mt-8 card-responsive-layout">
  <div class="text-center md:text-left">
    <div class="card-img-center" style="padding: 0.75rem">
      {!! wp_get_attachment_image($item['icon'], 'thumbnail', false) !!}
    </div>

    <h3 class="text-xl">{!! $item['heading'] !!}</h3>
    <p class="text-body-light">{!! $item['text'] !!}</p>
  </div>
</div>
