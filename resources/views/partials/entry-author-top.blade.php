<div class="entry-author-top ml-4 md:ml-8 relative">
  @if( !get_avatar( get_the_author_meta( 'ID' ) ) == 0 )
    <div class="entry-author-top__img">{!! get_avatar( get_the_author_meta( 'ID' ) ) !!}</div>
  @else
    <div class="entry-author-top__img entry-author-top__img--placeholder">
      <img class="lazyload" src="@asset('images/placeholder.jpg')" alt="{!! get_the_title() !!}">
    </div>
  @endif
  <span class="author vcard inline-block">
    <a href="{{ get_author_posts_url( get_the_author_meta( 'ID' ) ) }}" rel="author" class="fn text-body-light">
      {{ get_the_author() }}
    </a>
    &nbsp;&nbsp;&#183;&nbsp;&nbsp;<time class="updated" datetime="{{ get_post_time( 'c', true ) }}">{{ get_the_date( 'M d, Y' ) }}</time>
  </span>
</div>
