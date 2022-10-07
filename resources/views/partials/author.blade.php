<section class="flex border-t-2 border-light pt-16 pb-12">
  <div class="w-12 mr-4">
    <div class="relative aspect-ratio-square">
    @if( !get_avatar( get_the_author_meta( 'ID' ) ) == 0 )
      <div>{!! get_avatar( get_the_author_meta( 'ID' ) ) !!}</div>
    @else
    @endif
    </div>
  </div>
  <div class="flex-1">
    <h3 class="mb-2 text-lg font-bold">{!! App::authorName() !!}</h3>
    <p class="text-sm mb-0">{!! App::authorDescription() !!}
    </p>
  </div>
</section>
