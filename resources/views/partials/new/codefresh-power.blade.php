@php
// $heading  = get_field( 'home_power_heading' );
$features = get_field( 'cf_power_items' );
@endphp

@if ( $features )
    <div class="py-32 md:py-48">
        <h2 class="max-w-2xl mb-24 text-white md:text-7xl">
            @component( 'components.text-gradient' )The power of Codefresh, @endcomponent
            on our infra or yours
        </h2>
        <div class="grid grid-gap grid-cols-2">
            @foreach ( $features as $feature )
                <div class="col-span-2 md:col-span-1">
                    @include( 'components.feature-with-icon', [
                        'img_id'   => $feature['icon'],
                        'title'    => $feature['title'],
                        'text'     => $feature['text'],
                        'acf_link' => $feature['link'],
                    ] )
                </div>
            @endforeach
        </div>
    </div>
@endif
