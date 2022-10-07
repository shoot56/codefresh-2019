@php
$heading  = get_field( 'home_new_feature_heading' );
$text     = get_field( 'home_new_feature_text' );
$img_id   = get_field( 'home_new_feature_img' );
$acf_link = get_field( 'home_new_feature_link' );
$link     = App\_link( $acf_link );
@endphp

<div class="grid gap-4 col-auto py-12 lg:grid-cols-2 lg:items-center lg:py-40">
    <div class="lg:col-span-1">
        {!! wp_get_attachment_image( $img_id, 'large', false, array( 'class' => 'feature-image shadow-img rounded-lg lg:float-right' ) ) !!}
    </div>
    <div class="lg:col-span-1">
        <div class="section-half-p-l">
            <div class="grid gap-4">
                <div>
                    @include( 'components.styled-badge', [ 'label' => 'New' ] )
                </div>
                <h2 class="mb-0 text-dark-heading">{!! $heading !!}</h2>
                <p class="mb-0 lead font-bold text-oxford-blue-400">{!! $text !!}</p>
                @if ( isset( $link->url ) )
                    <div>
                        @include( 'components.button', [ 'url' => $link->url, 'target' => $link->target, 'label' => $link->title ] )
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
