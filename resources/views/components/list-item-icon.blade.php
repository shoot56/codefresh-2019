@php

@endphp

<li class="flex my-2 text-sm">
    <div class="w-6 h-auto mr-2">
        <div class="relative w-full aspect-ratio-square">
            <img src="@asset( 'images/icon-placeholder.svg ')" alt="" class="img-full lazyload">
        </div>
    </div>
    <span class="font-display font-bold text-dark-alt">{!! $slot ?? $text !!}</span>
</li>
