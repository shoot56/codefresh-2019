<div class="pt-12 flex flex-wrap">
  <div class="w-full lg:w-1/3 md:flex md:items-center">
    <div class="pr-3 lg:pr-8">
      @component('components.short-headline')
        {!! $headline !!}
      @endcomponent

      <h1>
        @component('components.text-gradient')
          {!! $title !!}
        @endcomponent
      </h1>

      <p class="lead font-bold text-oxford-blue-400">{!! $subtitle !!}</p>
    </div>
  </div>

  <div class="w-full lg:w-2/3">
    {!! App\video_with_preview(
      'cs-video',
      $main_video['short'],
      $main_video['full'],
      $main_video['poster']) !!}
  </div>
</div>
