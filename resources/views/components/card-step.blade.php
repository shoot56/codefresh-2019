@php
$title       = $title ?? '';
$description = $description ?? '';
$img_id      = $img_id ?? 0;
$margin      = $margin ?? 'mx-2';
$url         = $url ?? '';
@endphp

<div class="codefresh-step flex flex-shrink-0 flex-col w-70 py-4 px-6 mx-2 rounded-lg shadow-md bg-white">
    <div class="flex">
        <div class="flex-1">
            <div class="mb-1 font-display font-black text-sm">{!! wp_trim_words( $title, 7, '&hellip;' ) !!}</div>
            <div class="font-display text-xs text-oxford-blue-400">{!! wp_trim_words( $description, 12, '&hellip;' ) !!}</div>
        </div>
        <div class="ml-4">
            <div class="relative w-14 aspect-ratio-square">
                @if ( $img_id )
                    {!! wp_get_attachment_image( $img_id, 'medium', false, array( 'class' => 'img-full rounded-full' ) ) !!}
                @else
                    <div class="img-full rounded-full bg-oxford-blue-50"></div>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-auto">
        <a href="{{ esc_url( $url ) }}" target="_blank" rel="noopener noreferrer" class="inline-block mt-3 new-link text-sm">
            {{ __( 'View step', 'codefresh' ) }}@include( 'partials.svg.chevron-right' )
        </a>
    </div>
</div>
