@php
$short_headline = get_field( 'home_features_short_headline' );
$heading        = get_field( 'home_features_heading' );
$features       = get_field( 'home_features' );
$acf_link       = get_field( 'home_features_link' );
$link           = App\_link( $acf_link );
$query_args     = array( 'post_type' => 'codefresh_steps', 'posts_per_page' => -1 );
$steps          = get_posts( $query_args );
$steps_count    = count( $steps );
$steps_half     = $steps_count / 2;
$steps_top      = array_slice( $steps, $steps_half );
$steps_bottom   = array_slice( $steps, 0, $steps_half );
@endphp

<section class="full-width z-10 section-t-spacer py-16 lg:py-32">
    <div class="container">
        <div class="grid grid-cols-2 gap-4">
            <div class="section-half-p-l col-span-2 lg:col-span-1">
                <div class="grid gap-4">
                    @include( 'components.short-headline', [ 'message' => $short_headline ] )
                    <h2 class="mb-10 text-white">{!! $heading !!}</h2>
                </div>
                <div class="grid gap-4 grid-cols-2">
                    @if ( $features )
                        @foreach ( $features as $feat )
                            @include( 'components.feature-item', [ 'img_id' => $feat[ 'icon' ], 'title' => $feat[ 'title' ] , 'text' => $feat[ 'text' ] ] )
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 lg:order-first">
                @include( 'components.pipeline-code-block' )
            </div>
        </div>
    </div>

    @if ( count( $steps_top ) || count( $steps_bottom ) )
        <div class="-mt-68 py-8 overflow-hidden">
            <div class="flex actions-template-cards-top">
                @for ( $i = 0; $i < 2; $i++ )
                    @foreach ( $steps_top as $step )
                        @include( 'components.card-step', [
                            'title'       => $step->post_title,
                            'img_id'      => get_post_thumbnail_id( $step->ID ),
                            'description' => get_field( 'description', $step->ID ),
                            'url'         => get_field( 'step_url', $step->ID),
                        ] )
                    @endforeach
                @endfor
            </div>
            <div class="flex mt-4 actions-template-cards-bottom">
                @for ( $i = 0; $i < 2; $i++ )
                    @foreach ( $steps_bottom as $step )
                        @include( 'components.card-step', [
                            'title'       => $step->post_title,
                            'img_id'      => get_post_thumbnail_id( $step->ID ),
                            'description' => get_field( 'description', $step->ID ),
                            'url'         => get_field( 'step_url', $step->ID),
                        ] )
                    @endforeach
                @endfor
            </div>
        </div>
    @endif

    <div class="text-center mt-12">
        @include( 'components.button', [ 'url' => $link->url, 'target' => $link->target, 'label' => $link->title ] )
    </div>

    <div class="cf-grad absolute top-0 left-0 w-full h-full transform -skew-y-6 -z-1">
        <div class="pattern-circuit"></div>
    </div>

</section>
