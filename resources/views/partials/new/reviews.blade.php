@php
$heading    = get_field( 'home_reviews_heading' );
$subtitle   = get_field( 'home_reviews_subheading' );
$query_args = array( 'post_type' => 'reviews', 'posts_per_page' => -1 );
$reviews    = new WP_Query( $query_args );
@endphp

@if ( $reviews )
    <div class="codefresh-reviews py-16 md:py-64">
        <div class="mb-12">
            <h2 class="mb-0 text-dark-heading md:text-7xl">
                {!! $heading !!}
            </h2>
            <div class="font-display font-black text-2xl text-oxford-blue-400">{!! $subtitle !!}</div>
        </div>
        <div
            class="shadow-img rounded-2xl"
            data-flickity='{
            "cellAlign": "left",
            "groupCells": true,
            "contain": true,
            "adaptiveHeight": true
            }'
        >
            @while ( $reviews->have_posts() ) @php $reviews->the_post() @endphp
                <div class="w-full">
                    @component( 'components.review-item', [
                        'company'   => get_the_title(),
                        'img_id'    => get_post_thumbnail_id(),
                        'heading'   => get_field( 'review_heading' ),
                        'head_shot' => get_field( 'review_head_shot' ),
                        'author'    => get_field( 'review_author' ),
                        'job_title' => get_field( 'review_job_title' ),
                    ] )
                        @php the_content() @endphp
                    @endcomponent
                </div>
            @endwhile
            @php wp_reset_postdata() @endphp
        </div>
    </div>
@endif
