@php
$img_id = $img_id ?? 0;
$title  = $title ?? '';
$text   = $text ?? '';
@endphp

<div class="feature-item col-span-2 lg:col-span-1">
    {!! App\get_svg_contents( $img_id ) !!}
    <h5 class="relative mt-4 mb-3 text-lg text-white pr-6">{!! $title !!}</h5>
    <p class="text-sm text-green-100">{!! $text !!}</p>
</div>
