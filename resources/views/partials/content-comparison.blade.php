@php
$vs              = get_field( 'compare_vs_name' );
$vs_logo_id      = get_field( 'compare_vs_logo' );
$vs_logo_height  = get_field( 'compare_vs_height' );
$cta_heading     = get_field( 'cta_headline' );
@endphp

@if ( have_rows( 'compare_layout' ) )
    @while ( have_rows('compare_layout') ) @php the_row() @endphp
        @if ( get_row_layout() === 'editor' )
            {!! get_sub_field( 'editor') !!}
        @endif
        @if ( get_row_layout() === 'cta' )
            @php
            $text = get_sub_field( 'text' );
            $link = get_sub_field( 'link' );
            $btn  = App\acf_link( $link );
            @endphp

            <div class="text-center my-8">
                <div class="w-full inline-block mx-auto text-center lg:w-4/5 lg:text-left xl:w-3/5">
                    <h3 class="lg:inline-block lg:mb-0 lg:mr-48 align-middle">{!! $text !!}</h3>
                    <a href="{{ esc_url( $btn['url'] ) }}" target="{{ esc_attr( $btn['target'] ) }}" class="btn btn-primary block text-2xl lg:inline-block">
                        {{ $btn['title'] }}
                    </a>
                </div>
            </div>

        @endif
        @if ( get_row_layout() === 'table' )
            @php $acf_rep = get_sub_field( 'table' ) @endphp
            @include( 'partials.table-comparison', array(
                'arr'            => $acf_rep,
                'vs'             => $vs,
                'vs_logo_id'     => $vs_logo_id,
                'vs_logo_height' => $vs_logo_height,
            ) )
        @endif
    @endwhile
@endif

@include( 'partials.customers', array( 'class' => 'mt-20 md:mt-32') )
