<div class="entry-author mt-auto text-primary flex items-center">
  @if( !get_avatar( get_the_author_meta( 'ID' ) ) == 0 )
    <div>{!! get_avatar( get_the_author_meta( 'ID' ) ) !!}</div>
  @else
    <div>
      <img src="@asset('images/placeholder.jpg')" alt="{!! get_the_title() !!}" class="lazyload inline-block">
    </div>
  @endif
  <span class="author vcard text-sm">
    <a href="{{ get_author_posts_url( get_the_author_meta( 'ID' ) ) }}" rel="author">
      {{ get_the_author() }}
    </a>
  </span>
</div>
