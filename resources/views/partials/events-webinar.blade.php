@php
$tags       = wp_get_post_terms( get_the_ID(), 'events_tag', array( 'fields' => 'names' ) );
$link_label = get_field( 'link_label' ) ? get_field( 'link_label' ) : 'Watch here';
@endphp

<article class="flex mb-8 pb-8 border-b-2 border-blue-light">
    <div class="relative h-16 w-16 rounded-full overflow-hidden shadow">
        <a href="{{ esc_url( get_the_permalink() ) }}">
            <img src="{{ get_field( 'img' ) }}" alt="{!! App::title() !!}" class="lazyload absolute top-0 left-0 h-full w-full object-cover">
        </a>
    </div>
    <div class="flex-1 ml-4">
        <h3 class="mb-3 text-base">
            <a href="{{ esc_url( get_the_permalink() ) }}" class="text-dark hover:text-primary">{!! App::title() !!}</a>
        </h3>
        @if( count( $tags ) )
            <ul class="list-none p-0">
                @foreach( $tags as $tag )
                    <li class="inline-block px-3 py-1 text-xs mr-1 mb-1 text-primary bg-light rounded-lg">{{ $tag }}</li>
                @endforeach
            </ul>
        @endif
        <div class="mt-2">
            <a href="{{ esc_url( get_the_permalink() ) }}" class="font-display font-bold">
                {{ $link_label }}
            </a>
        </div>
    </div>
</article>
