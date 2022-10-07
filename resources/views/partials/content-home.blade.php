@php
namespace App;

$features = get_field( 'home_extra_features' );
@endphp

<div class="relative full-width">
    <div class="container pt-16 md:pt-24 pb-16 md:pb-24">
        @include('partials.new.featured-case-studies')
    </div>
</div>

<?php
/*
<div class="relative full-width">
    <div class="container">
        @include('partials.new.news')
    </div>
</div>
*/
?>

<div class="relative full-width">
    <div class="container">
        @include('partials.new.new-feature')
    </div>
    <div class="bg-oxford-blue-50 absolute top-0 left-0 w-full h-full transform -skew-y-6 -z-1"></div>
</div>

@include('partials.new.integrations')

<?php
/*
The partial "new features" corresponds to "Features" in the CMS
*/
?>
@include('partials.new.features')


<?php
/*
The below "$features" corresponds to "More Features" in the CMS
*/
?>
<div class="full-width">
    <div class="py-8 overflow-hidden">
        <div class="container">
            @if ( $features )
                @foreach ( $features as $feature)
                    @include( 'partials.new.feature', [
                        'title'                => $feature['title'],
                        'text'                 => $feature['text'],
                        'mini_features'        => $feature['mini_features'],
                        'acf_link'             => $feature['link'],
                        'img_id'               => $feature['img'],
                        'enable_mini_features' => $feature['enable_list'],
                        'enable_link'          => $feature['enable_link'],
                        'iteration'            => $loop->iteration,
                        'class_names'          => 'section-spacer',
                    ] )
                @endforeach
            @endif
        </div>
    </div>
    <div class="new-extra-bg bg-oxford-blue-50 absolute bottom-0 left-0 w-full transform -skew-y-6 -z-1"></div>
</div>

<div class="full-width">

    <div class="container">
        @include( 'partials.new.codefresh-power' )
    </div>

    <div class="absolute top-0 left-0 w-full h-auto transform -skew-y-6 overflow-hidden circuit-right">
        {!! file_get_contents( asset_path( 'images/circuit-el-alt.svg' ) ) !!}
    </div>

    <div class="absolute bottom-0 left-0 w-full h-auto transform -skew-y-6 overflow-hidden circuit-left">
        {!! file_get_contents( asset_path( 'images/circuit-el.svg' ) ) !!}
    </div>

    <div class="cf-grad absolute top-0 left-0 w-full h-full transform -skew-y-6 -z-1">
        <div class="pattern-circuit"></div>
    </div>
</div>

<div class="full-width">
    <div class="reviews-bg overflow-hidden">
        <div class="container">
            @include ('partials.new.reviews')
        </div>
    </div>
</div>
